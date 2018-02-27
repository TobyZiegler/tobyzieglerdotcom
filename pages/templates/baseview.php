<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Toby, Ziegler, Toby Ziegler, TobyZiegler, designer, developer, programmer, graphic, graphics<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $title; ?>
    </title>
    <?php include("favicon.php");?>
        <link rel="stylesheet" href="/css/reset.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="/assets/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="/css/tobystyles.css"> -->
        <link rel="stylesheet" href="/css/socialiconstyles.css">
        <link rel="stylesheet" href="/js/tobyscripts">
</head>

<body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">
<div class="container">
        <nav>
            <?php include("navbar.php");?>
        </nav>
        <header>
            <?php echo $header; ?>
        </header>
        <div id="contentArea">
            <?php include $content; ?>
        </div>
        <footer>
    <?php include("socialicons.php");?>
            <?php include("footer.php");?>
        </footer>
        </div>
</body>

</html>
