from flask import render_template, request, redirect, url_for
from .models import db, Joke
from . import dadabase_bp

# Home page inside Dad-a-Base section
@dadabase_bp.route("/dadabase/")
def home():
    return render_template("dadabase/home.html")

# Browse jokes
@dadabase_bp.route("/dadabase/browse")
def browse():
    jokes = Joke.query.all()  # fetch all jokes from DB
    return render_template("dadabase/browse.html", jokes=jokes)

# Submit a joke
@dadabase_bp.route("/dadabase/submit", methods=["GET", "POST"])
def submit():
    if request.method == "POST":
        new_joke = Joke(
            content=request.form["joke"],
            author="Anonymous"  # later we can make this user-supplied
        )
        db.session.add(new_joke)   # fixed typo here
        db.session.commit()
        return redirect(url_for("dadabase.browse"))
    return render_template("dadabase/submit.html")

# Search jokes
@dadabase_bp.route("/dadabase/search", methods=["GET", "POST"])
def search():
    if request.method == "POST":
        query = request.form["query"]
        results = Joke.query.filter(Joke.content.contains(query)).all()
        return render_template("dadabase/search.html", jokes=results, query=query)
    return render_template("dadabase/search.html")

# About page
@dadabase_bp.route("/dadabase/about")
def about():
    return render_template("dadabase/about.html")
