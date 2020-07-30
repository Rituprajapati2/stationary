<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo (isset($_title) ? $_title.' || ' : '' ).SITE_TITLE;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="<?php echo isset($meta,$meta['keywords']) ? $meta['keywords'] :  SITE_KEYWORDS;?>">
    <meta name="description" content="<?php echo isset($meta,$meta['description']) ? $meta['description'] :  SITE_DESCRIPTION;?>">


    <meta property="og:type" content="web">
    <meta property="og:url" content="<?php echo getPageUrl() ?>">
    <meta property="og:description" content="<?php echo (isset($meta, $meta['og_description']) ? $meta['og_description'] : SITE_DESCRIPTION);?>">
    <meta property="og:title" content="<?php echo (isset($meta, $meta['og_title']) ? $meta['og_title'] : SITE_TITLE);?>">
    <meta property="og:image" content="<?php echo (isset($meta, $meta['og_image']) ? $meta['og_image'] : HOME_ASSETS_IMAGES.'/logo.jpg');?>">
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo HOME_ASSETS_CSS;?>/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo HOME_ASSETS_CSS;?>/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo HOME_ASSETS_CSS;?>/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo HOME_ASSETS_CSS;?>/lightbox.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo HOME_ASSETS_CSS;?>/main.css" />
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=422408421704405&autoLogAppEvents=1"></script>
