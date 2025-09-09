from flask_sqlalchemy import SQLAlchemy

# Create database instance (will be initialized by app.py)
db = SQLAlchemy()

class Joke(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    content = db.Column(db.String(500), nullable=False)
    author = db.Column(db.String(100), default="Anonymous")
    created_at = db.Column(db.DateTime, default=datetime.utcnow)