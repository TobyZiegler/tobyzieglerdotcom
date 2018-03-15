<?php phpinfo();?>
<?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
<!-- path =  /Users/tjz/Sites -->
<p>just path = <?php echo $path; ?></p>

<p><?=basename($_SERVER['PHP_SELF'],'.php')?></p>
<!-- phpinfo -->
<?php $content = ($path . '/pages/homecontent.php');?>
<p>path + link = <?php echo $content; ?></p>

    <?php
$homefolder = "/tobyzieglerdotcom";
$linkto = ($path . $homefolder . '/pages/homecontent.php');
?>
<p>path + homefolder + link = <?php echo $linkto ?></p>

    <?php 
    $homefolder = "/";
    $server = $_SERVER['SERVER_NAME'];
    if ($server == "localhost") $homefolder = ":8888/tobyzieglerdotcom/";
    $pathfolder = $server . $homefolder;
    ?>
<p>master path = <?php echo $pathfolder ?></p>

<p>href = <?php echo ($pathfolder . 'pages/homecontent.php')?></p>

<p>server name = <?php echo $_SERVER['SERVER_NAME']?></p>
