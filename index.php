<?php
    $homefolder = "/";
    $server = $_SERVER['SERVER_NAME'];
    if ($server == "localhost") $homefolder = ":8888/tobyzieglerdotcom/";
    $path = $server . $homefolder;

    $keywords = ", index";
    $description = "The home page for Toby Zieger's personal site.";
    $title = "Home Page";
    $header = "<h2>Hello, and welcome Toby Ziegler's site.</h2>";
    $content = ($path . 'pages/homecontent.php');
    include($path . 'pages/templates/baseview.php');
?>
<p>content = <?php echo $content?></p>
<p>baseview = <?php echo ($path . 'pages/templates/baseview.php')?></p>
