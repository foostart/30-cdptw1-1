﻿<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block.'/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1339.less', 'css/1339.css');

?>

<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>Demo</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1339.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/reset.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo $url_path ?>/css/owl.carousel.min.css" rel="stylesheet" >


        <script src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/owl.carousel.js"></script>
        <!-- end owl -->

    </head>
    <body>
    <?php include $dir_block.'/1339-content.php'; ?>


    </body>
</html>