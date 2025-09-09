from flask import Blueprint

dadabase_bp = Blueprint(
    "dadabase", __name__,
    template_folder="templates"
)

# Import routes so they attach to the blueprint
from . import routes
