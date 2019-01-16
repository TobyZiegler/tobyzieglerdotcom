/*
Modal Image Gallery code courtesy w3schools
https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_parallax&stacked=h
*/
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

/*
Used to toggle the menu on small screens when clicking on the menu button
Toggle code courtesy w3schools
https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_parallax&stacked=h
*/
function toggleFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

/*
Change style of navbar on scroll
Navbar scroll code courtesy w3schools
https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_parallax&stacked=h
*/
window.onscroll = function () { myFunction() };
function myFunction() {
  var navbar = document.getElementById("myNavbar");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
  } else {
    navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
  }
}

/*
reveal code courtesy Banana from stackoverflow
https: //stackoverflow.com/users/3406576/banana
*/
function reveal(id) {
  var e = document.getElementById(id);
  if (e.style.display == 'inline') {
    e.style.display = 'none';
  } else {
    var allTexts = document.querySelectorAll(".myHiddenText");
    for (var i = 0, len = allTexts.length; i < len; i++) {
      allTexts[i].style.display = 'none';
    }
    e.style.display = 'inline';
  }
}

function addContact(contact) {

  var bulletSpace = "&nbsp;&bull;&nbsp;";

  switch (contact) {
    case "mailto":
      // obfuscated email using btoa()
      var sendDomain = "VG9ieVppZWdsZXIuY29t";
      var sendTo = "VG9ieUA=";
      var address = atob(sendTo) + atob(sendDomain);
      var mailContent = ("<a href=\"mail" + "to:" + address + "?Subject=Resume\u0020Inquiry" + "\">" + address + "</" + "a>");
      return mailContent;

    case "linkedin":
      // obfuscated link to linkedin using btoa()
      var linkedinCode = "d3d3LmxpbmtlZGluLmNvbS9pbi9Ub2J5WmllZ2xlcg==";
      var linkedinAddress = atob(linkedinCode);
      var linkedinContent = ("<" + "a href=\u0022https://" + linkedinAddress + "\u0022\u0020" + "target=\u0022_blank\u0022" + ">" + "linkedin.com" + "</" + "a>");
      return linkedinContent;

    case "homesite":
      // obfuscated link to home page
      var homeSiteCode = "VG9ieVppZWdsZXIuY29t";
      var homeSiteAddress = atob(homeSiteCode);
      var homeSiteContent = ("<" + "a href=\u0022https://" + homeSiteAddress + "\u0022\u0020" + "target=\u0022_blank\u0022" + ">" + "www." + homeSiteAddress + "</" + "a>");
      return homeSiteContent;

    case "maplink":
      // not obfuscated
      var cityState = ("&nbsp;" + "<" + "a href=\u0022https://" + "goo.gl/maps/rppF2KVEeYn\u0022\u0020" + "\u0020target=\u0022_blank\u0022" + ">" + "Springfield, Missouri" + "</" + "a>");
      return cityState;

    case "fullcontact":
      // build contact bar contents
      var contactBarContent = cityState + bulletSpace + mailContent + bulletSpace + linkedinContent + bulletSpace + homeSiteContent;
      return contactBarContent;
  }
  // get element for insertion and insert after id element
  var currentSpan = document.getElementById("contactBar");
  currentSpan.insertAdjacentHTML("beforeend", contactBarContent);
};