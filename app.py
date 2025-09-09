from flask import Flask, render_template
from dadabase import dadabase_bp, models

app = Flask(__name__)

# Configure SQLite (for now)
app.config["SQLALCHEMY_DATABASE_URI"] = "sqlite:///dadabase.db"
app.config["SQLALCHEMY_TRACK_MODIFICATIONS"] = False

# Initialize DB
models.db.init_app(app)

# Register blueprint
app.register_blueprint(dadabase_bp, url_prefix="/dadabase")

# Root landing page
@app.route("/")
def index():
    return render_template("index.html")

# Utility: init database (run once to create dadabase.db)
@app.cli.command("init-db")
def init_db():
    with app.app_context():
        models.db.create_all()
    print("Initialized the database.")

    @app.cli.command("seed-db")
def seed_db():
    with app.app_context():
        """"Seed the database with starter jokes."""
        from dadabase.models import Joke, db
        jokes = [
            {"I'm afraid for the calendar. Its days are numbered", "author": "Seeder Dad"},
            {"I only know 25 letters of the alphabet. I don't know y.", "author": "Seeder Dad"},
            {"What do a tick and the Eiffel Tower have in common? They're both Paris sites.", "author": "Seeder Dad"},
            {"Why don't eggs tell jokes? They'd crack each other up.", "author": "Seeder Dad"},
            {"What do you call fake spaghetti? An impasta.", "author": "Seeder Dad"}
        ]
        for line in jokes:
            if not Joke.query.filter_by(content=line).first():
                db.session.add(Joke(content=line))
        db.session.commit()
        print("Database seeded with starter jokes.")

