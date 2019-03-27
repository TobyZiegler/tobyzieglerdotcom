/*
Used to toggle the menu on small screens when clicking on the menu button
Toggle code from w3schools
https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_parallax&stacked=h
*/
function toggleFunction() {
    var toggleitem = document.getElementById("navMobile");
    if (toggleitem.className.indexOf("w3-show") == -1) {
      toggleitem.className += " w3-show";
    } else if (toggleitem.className.indexOf("w3-hide") == -1) {
        toggleitem.className += " w3-hide";
      } else {
        toggleitem.className = toggleitem.className.replace(" w3-show", "");
    }
  }
  