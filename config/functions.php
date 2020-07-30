<?php
    function debug($data, $is_exit=false){
        echo "<pre style='background: #FFFFFF;'>";
        print_r($data);
        echo "</pre>";
        if($is_exit){
            exit;
        }
    }

    function setSession($key, $message){
        if(!isset($_SESSION)){
            session_start();
        }   
        $_SESSION[$key] = $message;
    }

    function flash(){
        if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
            echo "<p class='alert alert-success'>".$_SESSION['success']."</p>";
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
            echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }

        if(isset($_SESSION['warning']) && !empty($_SESSION['warning'])){
            echo "<p class='alert alert-warning'>".$_SESSION['warning']."</p>";
            unset($_SESSION['warning']);
        }
    }

    function redirect($path, $session_key= null, $session_msg = null){
        if($session_key !== null){
            setSession($session_key, $session_msg);
        }
        @header('location: '.$path);
        exit;
    }
//password
    function generateRandomString($length = 100){
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $len = strlen($chars);//length of that string//finding the lenth of that character
        $random = "";//variable creation

        for($i=0; $i<$length; $i++){
            $position = rand(0, $len-1);//0 to Z...size-1
            $random .= $chars[$position];
        }

        return $random;
    }
     // name matrai lekhna milxa product type ma not anchor tag smthg
    function sanitize($str){
        $str = strip_tags($str);//erasing tag or smthg
        $str = rtrim($str);//agadi re pachadi ko space hatauchha
        return $str;
    }
    
//image
    function uploadSingleImage($file, $dir){
        if($file['error']  == 0){
            if($file['size'] <= 5000000){
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                if(in_array(strtolower($ext), ALLOWED_EXTS)){

                    $name = ucfirst($dir)."-".date('Ymdhis').rand(0,99).".".$ext;

                    $path = UPLOAD_DIR.'/'.$dir;
                    if(!is_dir($path)){
                        mkdir($path, 0777, true);
                    }
                    $success = move_uploaded_file($file['tmp_name'],$path.'/'.$name);
                    if($success){
                        return $name;
                    } else {
                        return null;
                    }
                } else {
                    return null;
                }
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    function getPageUrl(){
        // http://www.kantipur.loc/
        $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        return $url;
    }
    function getCurrentPage(){
        return pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    }


