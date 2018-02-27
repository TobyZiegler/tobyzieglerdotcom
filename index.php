<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$keywords = ", index";
$description = "The home page for Toby Zieger's personal site.";
$title = "Home Page";
$header = "<h2>Hello, and welcome Toby Ziegler's site.</h2>";
$content = ($path . '/pages/homecontent.php');
include($path . '/pages/templates/baseview.php');
?>
