<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Toby, Ziegler, Toby Ziegler, TobyZiegler, designer, developer, programmer, graphic, graphics<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <title>
        <?php echo $title; ?>
    </title>
    <?php include("favicon.php");?>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="../../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/tobystyles.css">
        <link rel="stylesheet" href="/css/socialiconstyles.css">
        <link rel="stylesheet" href="/js/tobyscripts">
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie_8.css" />
    <![endif]-->
        <!--    <script src="script.js"></script>-->
        <style>
            .photocontainer:before {
                background-image: url('images/backgrounds/29842821730_4e0524f910_k.jpg');
            }

        </style>
</head>

<body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">
    <div class="photocontainer">
        <div></div>
        <nav>
            <?php include("navbar.php");?>
        </nav>
        <header>
            <?php echo $header; ?>
        </header>
        <!-- page content -->
        <div id="contentArea">
            <?php include $content; ?>
        </div>
        <footer>
            <!--
<div>
    <?php include("socialicons.php");?>
</div>-->
            <?php include("footer.php");?>
                <div class="fadebox attribution">
                    <p>Background photo: The U.S. Air Force’s 45th Space Wing supported United Launch Alliance&#8217s successful launch of the third Space Based Infrared Systems Geosynchronous Earth Orbit spacecraft aboard an Atlas V rocket from Launch Complex 41 here Jan. 20 at 7:42 p.m. ET. The launch is the first major launch operation of 2017 on the Eastern Range and kicks off what is predicted to be a busy year on the Eastern Range. (Courtesy photo by United Launch Alliance)
                        <br/>Background photo: 170120-O-ZZ999-018 - <a href="http://www.dvidshub.net/">www.dvidshub.net</a> - <a href="https://www.flickr.com/photos/39955793@N07/">US DOD flickr feed</a></p>
                </div>
        </footer>
    </div>
</body>

</html>
