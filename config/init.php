<?php
    //Document_root means undder the htdocs news_800
    require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';

    /*** Autoloading classes */
        //for the class folder wher class is form lile $user= new users();,then users is the class_name 
    spl_autoload_register(function($class_name){
        require_once $_SERVER['DOCUMENT_ROOT'].'/class/'.$class_name.'.php';
    });
