from flask import Flask
from dadabase import dadabase_bp, db
from dadabase.models import Joke


# ------------------------------------------------------------
# Application Factory
# ------------------------------------------------------------
def create_app():
    """Create and configure the Flask app."""
    app = Flask(__name__)

    # Basic configuration
    app.config["SQLALCHEMY_DATABASE_URI"] = "sqlite:///dadabase.db"
    app.config["SQLALCHEMY_TRACK_MODIFICATIONS"] = False
    app.secret_key = "super_secret_key"  # replace later with env variable

    # Initialize extensions
    db.init_app(app)

    # Register blueprints
    app.register_blueprint(dadabase_bp)

    # Optional: Home route for index.html at the root
    @app.route("/")
    def index():
        return app.send_static_file("index.html")

    # Attach CLI commands (below)
    register_cli_commands(app)

    return app


# ------------------------------------------------------------
# CLI Commands
# ------------------------------------------------------------
def register_cli_commands(app):
    """Register Flask CLI commands for database maintenance."""

    @app.cli.command("seed-db")
    def seed_db():
        """Seed the database with Dad Jokes (without duplicates)."""
        with app.app_context():
            seed_data()
            print("🌱 Database seeded with Dad Jokes!")

    @app.cli.command("reset-db")
    def reset_db():
        """Drop all tables, recreate them, and seed fresh data."""
        import click

        with app.app_context():
            if not click.confirm("⚠️  This will DROP all tables and recreate them. Continue?"):
                print("❌ Reset aborted.")
                return

            db.drop_all()
            db.create_all()
            seed_data()
            print("🔄 Database reset and seeded with Dad Jokes!")


# ------------------------------------------------------------
# Helper Functions
# ------------------------------------------------------------
def seed_data():
    """Insert seed jokes into the database, skipping duplicates."""
    jokes = [
        {"content": "I'm afraid for the calendar. Its days are numbered.", "author": "Seeder Dad"},
        {"content": "I only know 25 letters of the alphabet. I don't know y.", "author": "Seeder Dad"},
        {"content": "What do a tick and the Eiffel Tower have in common? They're both Paris sites.", "author": "Seeder Dad"},
        {"content": "Why don't eggs tell jokes? They'd crack each other up.", "author": "Seeder Dad"},
        {"content": "What do you call fake spaghetti? An impasta.", "author": "Seeder Dad"},
    ]

    for data in jokes:
        # Avoid inserting duplicates (by joke text)
        existing = Joke.query.filter_by(content=data["content"]).first()
        if not existing:
            new_joke = Joke(content=data["content"], author=data["author"])
            db.session.add(new_joke)

    db.session.commit()


# ------------------------------------------------------------
# Entry Point
# ------------------------------------------------------------
if __name__ == "__main__":
    app = create_app()
    app.run(debug=True)
