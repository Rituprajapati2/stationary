<?php
/*
require '../../config/init.php';
require '../inc/checklogin.php';

$news=new News();

    if(isset($_POST) && !empty($_POST)){
       // debug($_POST);
        //debug($_FILES,true);
        //for the connection of database
        //edit garda wa for updating showing the editing list
        $data = array(
            'productname' => sanitize($_POST['productname']),
            'producttype' => sanitize($_POST['producttype']),
            'price' => sanitize($_POST['price']),
            'description'=>htmlentities($_POST['description']),
            'summary' => sanitize($_POST['summary']),
        );  
        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            // Upload image
            $file_name = uploadSingleImage($_FILES['image'], 'news');
            if($file_name){
                $data['image'] = $file_name;
            }
        }
        $news_id = (isset($_POST['news_id']) && !empty($_POST['news_id'])) ? (int)$_POST['news_id'] : null;
        if($news_id){
            // debug($news_id, true);
             $act = "updat";
             $success = $news->updateData($data, $news_id);
         } else {
             $act = "add";
             $success = $news->addData($data);
         }
 

        $success = $news->addData($data);
        if($success){
            redirect('../news.php','success','product '.$act.'ed successfully.');
        }else{
            redirect('../news.php','error','sorry!There was problem while '.$act.'ing product.');
        }

    }else if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../news.php','error','Invalid Product Id.');
        }
        $cat_info = $news->getDataById($id);

        if(!$cat_info){
            redirect('../news.php','error','News not found or has been already deleted.');
      
        }
        $del = $news->deleteDataById($id);
        if($del){
            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/news/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/news/'.$cat_info[0]->image);
            }
            redirect('../news.php', 'success','News deleted successfully.');
        } else {
            redirect('../news.php', 'error','Sorry! There was problem while deleting cateogry.');
        }
    } 

    else{
        redirect('../news.php', 'error','Unauthorized access.');
    }*/



    require '../../config/init.php';
    require '../inc/checklogin.php';

    $news = new News();

    if(isset($_POST) && !empty($_POST)){
       // debug($_POST);
        //debug($_FILES, true);

        $data = array(
            'producttype' => sanitize($_POST['producttype']),
            'summary' => sanitize($_POST['summary']),
            'description' => htmlentities($_POST['description']),
            'cat_id' => (int)($_POST['cat_id']), 
            'price' =>  (int)($_POST['price']),
            
        );  
        // debug($data, true);

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            // Upload image
            $file_name = uploadSingleImage($_FILES['image'], 'news');
            if($file_name){
                $data['image'] = $file_name;
            }
        }

        $news_id = (isset($_POST['news_id']) && !empty($_POST['news_id'])) ? (int)$_POST['news_id'] : null;
        
        
        if($news_id){
           // debug($news_id, true);
            $act = "updat";
            $success = $news->updateData($data, $news_id);
        } else {
            $act = "add";
            $success = $news->addData($data);
        }
        if($success){
            redirect('../news.php','success','Product '.$act.'ed successfully.');
        } else {
            redirect('../news.php','error','Sorry! There was problem while '.$act.'ing product.');
        }
    } else if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../news.php','error','Invalid product Id.');
        }

        $cat_info = $news->getDataById($id);

        if(!$cat_info){
            redirect('../news.php','error','product not found or has been already deleted.');
        }

        $del = $news->deleteDataById($id);

        if($del){
            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/news/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/news/'.$cat_info[0]->image);
            }
            redirect('../news.php', 'success','product deleted successfully.');
        } else {
            redirect('../news.php', 'error','Sorry! There was problem while deleting product.');
        }
    } else {
        redirect('../news.php', 'error','Unauthorized access.');
    }
