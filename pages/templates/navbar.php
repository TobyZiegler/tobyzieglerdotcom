<nav class="navbar navbar-expand-md navbar-dark">

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <!-- <a class="navbar-brand" href="#">Toby's</a> -->
  <a id="indexbutton" class="nav-link btn btn-success mx-2" href="<?php echo ($path . 'index.html')?>">Home</a>
  <a class="nav-link btn btn-success mx-2" id="notesindexbutton" href="<?php echo ($path . 'pages/notes/notesindex.php')?>">Notes</a>
  <a class="nav-link btn btn-success mx-2" id="portfolioindexbutton" href="<?php echo ($path . 'pages/portfolio/portfolioindex.php')?>">Portfolio</a>
  <a class="nav-link btn btn-success mx-2" id="biobutton" href="<?php echo ($path . 'pages/bio/bio.php')?>">Bio</a>
  <a class="nav-link btn btn-success mx-2" id="contactbutton" href="<?php echo ($path . 'underconstruction.php')?>">Contact</a>
</div>
<p id="demo"></p>
<p id="buttoncheck"></p>
</nav>

<script>
    var pagename = document.body.id;
    document.getElementById("demo").innerHTML = pagename;
  function buttontoggle() {
    var buttonshift = document.getElementById(pagename + "button");
    buttonshift.classList.add("selfbutton");
    document.getElementById("buttoncheck").innerHTML = buttonshift;
  }
  function buttonrefresh () {
    onclick="location.reload();"
  }
</script>