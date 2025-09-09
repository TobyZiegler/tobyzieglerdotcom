from flask import Flask, render_template, request, redirect, url_for
from flask_sqlalchemy import SQLAlchemy
import random

app = Flask(__name__)

# -----------------------------
# DATABASE CONFIG
# -----------------------------
# Local testing: SQLite (swap later for MySQL)
app.config['SQLALCHEMY_DATABASE_URI'] = "sqlite:///dadabase.db"
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)

# -----------------------------
# MODEL
# -----------------------------
class Joke(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    text = db.Column(db.String(500), nullable=False)
    author = db.Column(db.String(100), default="Anonymous")

# -----------------------------
# ROUTES
# -----------------------------
@app.route("/")
def index():
    jokes = Joke.query.all()
    if not jokes:
        return render_template("index.html", joke="No jokes in the Dad-a-Base yet!", author="System")
    joke = random.choice(jokes)
    return render_template("index.html", joke=joke.text, author=joke.author)


@app.route("/dadabase/")
def home():
    jokes = Joke.query.all()
    if not jokes:
        return render_template("home.html", joke="No jokes in the Dad-a-Base yet!", author="System")
    joke = random.choice(jokes)
    return render_template("home.html", joke=joke.text, author=joke.author)


@app.route("/dadabase/browse")
def browse():
    jokes = Joke.query.order_by(Joke.id.desc()).all()
    return render_template("browse.html", jokes=jokes)


@app.route("/dadabase/search", methods=["GET", "POST"])
def search():
    results = []
    query = ""
    if request.method == "POST":
        query = request.form["query"]
        results = Joke.query.filter(Joke.text.ilike(f"%{query}%")).all()
    return render_template("search.html", results=results, query=query)


@app.route("/dadabase/submit", methods=["GET", "POST"])
def submit():
    if request.method == "POST":
        text = request.form["text"]
        author = request.form.get("author", "Anonymous")
        if text.strip():
            new_joke = Joke(text=text.strip(), author=author.strip())
            db.session.add(new_joke)
            db.session.commit()
            return redirect(url_for("browse"))
    return render_template("submit.html")


@app.route("/dadabase/about")
def about():
    return render_template("about.html")

# -----------------------------
# INITIALIZER
# -----------------------------
@app.cli.command("init-db")
def init_db():
    """Run this once to create the database tables"""
    db.create_all()
    print("Database initialized.")

if __name__ == "__main__":
    app.run(debug=True)
