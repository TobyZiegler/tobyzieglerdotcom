<nav class="navbar navbar-expand-md navbar-dark">

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <!-- <a class="navbar-brand" href="#">Toby's</a> -->
  <a id="indexbutton" class="nav-link btn btn-success mx-2" href="../../index.html">Home</a>
  <a class="nav-link btn btn-success mx-2" id="notesindexbutton" href="../../pages/notes/notesindex.php">Notes</a>
  <a class="nav-link btn btn-success mx-2" id="portfolioindexbutton" href="../../pages/portfolio/portfolioindex.php">Portfolio</a>
  <a class="nav-link btn btn-success mx-2" id="biobutton" href="../../pages/bio/bio.php">Bio</a>
  <a class="nav-link btn btn-success mx-2" id="contactbutton" href="../../underconstruction.php">Contact</a>
</div>
</nav>
<!-- begin self-diagnosis html -->
<p id="demo"></p>
<p id="buttoncheck"></p>
<p id="pathcheck"></p>
<p id="linkcheck"></p>
<!-- end self-diagnosis html -->

<script>

    var pagename = document.body.id;
    var button_dim = pagename + "button";

  // begin self-diagnosis js
    var dapath = "<?php echo $path ?>";
    var dalink = "<?php echo ($path . 'css/xtrastyles.css')?>";
    document.getElementById("demo").innerHTML = button_dim;
    document.getElementById("buttoncheck").innerHTML = pagename;
    document.getElementById("pathcheck").innerHTML = dapath;
    document.getElementById("linkcheck").innerHTML = dalink;
  // end self-diagnosis js

  function buttontoggle() {
    button_dim.classList.add("selfbutton");
  }
  function buttonrefresh () {
    onclick="location.reload();"
  }
</script>