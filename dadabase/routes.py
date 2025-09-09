from flask import render_template, request, redirect, url_for
from . import dadabase_bp
from .models import Joke, db

# Home page inside Dad-a-Base
@dadabase_bp.route("/")
def home():
    return render_template("dadabase/home.html")

# Browse jokes
@dadabase_bp.route("/browse")
def browse():
    jokes = [
        {"content": "Why don’t eggs tell jokes? They’d crack each other up."},
        {"content": "I only know 25 letters of the alphabet. I don’t know y."}
        {"content": "I’m afraid for the calendar. Its days are numbered."}
    ]
    return render_template("dadabase/browse.html", jokes=jokes)

# Submit a joke
@dadabase_bp.route("/submit", methods=["GET", "POST"])
def submit():
    if request.method == "POST":
        new_joke = Joke(content=request.form["joke"])
        db.session.add(newjoke)
        db.session.commit()
        return redirect(url_for("dadabase.browse"))
    return render_template("dadabase/submit.html")

# Search jokes
@dadabase_bp.route("/search", methods=["GET", "POST"])
def search():
    results = []
    if request.method == "POST":
        term = request.form["term"]
        # TODO: actually search database
        results = Joke.query.filter(Joke.content.contains(term)).all()
    return render_template("dadabase/search.html", results=results)

# Obligatory about me
@dadabase_bp.route("/about")
def about():
    return render_template("dadabase/about.html")