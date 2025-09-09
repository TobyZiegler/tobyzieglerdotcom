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
