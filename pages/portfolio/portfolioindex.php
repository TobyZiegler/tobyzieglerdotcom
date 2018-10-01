<?php
$keywords = ", CIW, HTML5, CSS, School, Midterm, Periodic Table, Independent Project";
$description = "Catalog of my portfolio pieces";
$title = "Portfolio";
$header = "<h1>The Catalog of Portfolio Pieces</h1>";
$content = 'portfoliocontent.php';
$host = $_SERVER['HTTP_HOST'];
include($host . '/sitepath.php');
include($path . 'pages/templates/baseview.php');
// include('../../pages/templates/baseview.php');
?>
