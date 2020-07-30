<?php
    ob_start();//header error are solved
    session_start();//admin pannel

    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    // exit;
    
    $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];//print_r($_SERVER);=>on which server does the kantipur or www.kantipur/loc lies
    define('SITE_URL', $url);


    /*** DB Constants ****/
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PWD', '');
    define('DB_NAME', 'news_800');

    define('ERROR_LOG', $_SERVER['DOCUMENT_ROOT'].'/error/error.log');//folder afoi bancha name called error.log

     //website ko configuration....any chages reqire then yetta change garney not in header footer..
    define('ADMIN_URL', SITE_URL.'/admin');
    define('ADMIN_ASSETS', ADMIN_URL.'/assets');
    define('ADMIN_ASSETS_CSS', ADMIN_ASSETS.'/css');
    define('ADMIN_ASSETS_JS', ADMIN_ASSETS.'/js');
    define('ADMIN_ASSETS_IMAGES', ADMIN_ASSETS.'/img');





    define('ALLOWED_EXTS', array('jpg','png','gif','bmp','svg'));
//name(uploads) folder creating
    define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'].'/uploads');
//uploads folder (while updating the image should be shown )    
    define('UPLOAD_URL', SITE_URL.'/uploads');





    
    define('HOME_ASSETS', SITE_URL.'/assets');
    define('HOME_ASSETS_CSS', HOME_ASSETS.'/css');
    define('HOME_ASSETS_JS', HOME_ASSETS.'/js');
    define('HOME_ASSETS_IMAGES', HOME_ASSETS.'/images');


    define('SITE_TITLE','Stationary.com, An product management');
    define('SITE_KEYWORDS','hoooo');
    define('SITE_DESCRIPTION','It is an online store website providing you information  of product from all the categories.');
