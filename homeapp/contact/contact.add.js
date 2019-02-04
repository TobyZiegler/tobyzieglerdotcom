function addContact(contact) {

    var bulletSpace = "&nbsp;&bull;&nbsp;";

    // obfuscated email using btoa()
    var sendDomain = "VG9ieVppZWdsZXIuY29t";
    var sendTo = "VG9ieUA=";
    var address = atob(sendTo) + atob(sendDomain);
    var mailContent = ("<a href=\"mail" + "to:" + address + "?Subject=Resume\u0020Inquiry" + "\">" + address + "</" + "a>");

    // obfuscated link to linkedin using btoa()
    var linkedinCode = "d3d3LmxpbmtlZGluLmNvbS9pbi9Ub2J5WmllZ2xlcg==";
    var linkedinAddress = atob(linkedinCode);
    var linkedinContent = ("<" + "a href=\u0022https://" + linkedinAddress + "\u0022\u0020" + "target=\u0022_blank\u0022" + ">" + "linkedin.com" + "</" + "a>");

    // obfuscated link to home page
    var homeSiteCode = "VG9ieVppZWdsZXIuY29t";
    var homeSiteAddress = atob(homeSiteCode);
    var homeSiteContent = ("<" + "a href=\u0022https://" + homeSiteAddress + "\u0022\u0020" + "target=\u0022_blank\u0022" + ">" + "www." + homeSiteAddress + "</" + "a>");

    // not obfuscated
    var cityState = ("&nbsp;" + "<" + "a href=\u0022https://" + "goo.gl/maps/rppF2KVEeYn\u0022\u0020" + "\u0020target=\u0022_blank\u0022" + ">" + "Springfield, Missouri" + "</" + "a>");

    // build contact bar contents
    var contactBarContent = cityState + bulletSpace + mailContent + bulletSpace + linkedinContent + bulletSpace + homeSiteContent;

    switch (contact) {
        case "mailto":
            return mailContent;

        case "linkedin":
            return linkedinContent;

        case "homesite":
            return homeSiteContent;

        case "maplink":
            return cityState;

        case "fullcontact":
            return contactBarContent;
    }
    // get element for insertion and insert after id element
    var currentSpan = document.getElementById("contactBar");
    currentSpan.insertAdjacentHTML("beforeend", contactBarContent);
};