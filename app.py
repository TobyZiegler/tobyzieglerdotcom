from flask import Flask, render_template
from flask_migrate import Migrate
from dadabase import dadabase_bp, models
from dadabase.models import db

app = Flask(__name__)

# Configure SQLite (for now)
app.config["SQLALCHEMY_DATABASE_URI"] = "sqlite:///dadabase.db"
app.config["SQLALCHEMY_TRACK_MODIFICATIONS"] = False

# Initialize DB
db.init_app(app)

migrate = Migrate(app, db)

# Register blueprint
# app.register_blueprint(dadabase_bp, url_prefix="/dadabase")
app.register_blueprint(dadabase_bp)

# Root landing page
@app.route("/")
def index():
    return render_template("index.html")

# Utility: init database (run once to create dadabase.db)
# @app.cli.command("init-db")
# def init_db():
#     with app.app_context():
#         from dadabase.models import db
#         models.db.drop_all()
#         models.db.create_all()
#     print("Database initialized.")

@app.cli.command("seed-db")
def seed_db():
    # with app.app_context():
    """"Seed the database with starter jokes."""

    # Check if jokes already exist
    if Joke.query.first():
        print("✅ Jokes already seeded. Skipping.")
        return
    else:

        from dadabase.models import Joke, db
        jokes = [
            {"content": "I'm afraid for the calendar. Its days are numbered","author": "daDad"},
            {"content": "I only know 25 letters of the alphabet. I don't know y.","author": "daDad"},
            {"content": "What do a tick and the Eiffel Tower have in common? They're both Paris sites.","author": "daDad"},
            {"content": "Why don't eggs tell jokes? They'd crack each other up.","author": "daDad"},
            {"content": "What do you call fake spaghetti? An impasta.","author": "daDad"}
        ]
        for eachOne in jokes:
            if not Joke.query.filter_by(content=eachOne["content"]).first():
                db.session.add(Joke(content=eachOne["content"], author=eachOne["author"]))
        db.session.commit()
        print("Database seeded with starter jokes.")

@app.cli.command("reset-db")
def reset_db():
    """Drop all tables, recreate them, and seed with jokes."""
    import click

    # Ask for confirmation before dropping everything
    if not click.confirm("⚠️  This will DROP all tables and recreate them. Continue?"):
        print("❌ Reset aborted.")
        return

    # Drop and recreate
    db.drop_all()
    db.create_all()

    print("🗑️  Database dropped and recreated.")
    
    # Seed jokes right after reset
    jokes = [
        {"content": "I'm afraid for the calendar. Its days are numbered", "author": "Seeder Dad"},
        {"content": "I only know 25 letters of the alphabet. I don't know y.", "author": "Seeder Dad"},
        {"content": "What do a tick and the Eiffel Tower have in common? They're both Paris sites.", "author": "Seeder Dad"},
        {"content": "Why don't eggs tell jokes? They'd crack each other up.", "author": "Seeder Dad"},
        {"content": "What do you call fake spaghetti? An impasta.", "author": "Seeder Dad"}
    ]

    # for eachOne in jokes:
    #         if not Joke.query.filter_by(content=eachOne["content"]).first():
    #             db.session.add(Joke(content=eachOne["content"], author=eachOne["author"]))
    # db.session.commit()

    print("🌱 Database reset and seeded with dad jokes!")
