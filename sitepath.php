<?php
    // all of this is just to avoid having to change 
    // code between the local host and the server
    $path = "/";
    $httpspath = $_SERVER['HTTPS'];
    $httpath = $_SERVER['HTTP_HOST'];
    $pagepath = dirname($_SERVER['PHP_SELF']);
    $filename = basename($_SERVER['PHP_SELF']);
    $pageid = str_replace(".php", "", $filename);
    $server = $_SERVER['SERVER_NAME'];
    if ($httpspath) {
        $path = "https://".$httpath.$pagepath."/";
    }
    elseif ($server == "localhost") {
        $path = "http://".$httpath.$pagepath."/";
    }
    ?>