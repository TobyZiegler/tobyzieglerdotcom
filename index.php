<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$keywords = ", index";
$description = "The home page for Toby Zieger's personal site.";
$title = "Home Page";
$header = "<h1>Welcome!</h1>";
$content = ($path . '/pages/homecontent.php');
include($path . '/pages/templates/baseview.php');
?>
