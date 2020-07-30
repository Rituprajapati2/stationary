<?php



require '../../config/init.php';
require '../inc/checklogin.php';

$category=new Category();
if(isset($_POST) && !empty($_POST)){
    //for the connection of database
     //debug($_POST);
     //debug($_FILES,true);
    $data = array(
        'productname' => sanitize($_POST['productname']),//
        'producttype' => sanitize($_POST['producttype']),
        'price' => sanitize($_POST['price']),
        
    ); 
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        // Upload image
        $file_name = uploadSingleImage($_FILES['image'], 'category');
        if($file_name){
            $data['image'] = $file_name;
        }
    } 

    $cat_id = (isset($_POST['cat_id']) && !empty($_POST['cat_id'])) ? (int)$_POST['cat_id'] : null;
    if($cat_id){
        // debug($cat_id, true);
         $act = "updat";
         $success = $category->updateData($data, $cat_id);
     } else {
         $act = "add";
         $success = $category->addData($data);
     }


    
    if($success){
        redirect('../category.php','success','Category '.$act.'ed successfully.');
    }else{
        redirect('../category.php','error','sorry!There was problem while '.$act.'ing category.');
    }


   // debug($data);
    //debug($_FILES,true);
} else if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('../category.php','error','Invalid Category Id.');
        }
        $cat_info = $category->getDataById($id);
        if(!$cat_info){
            redirect('../category.php','error','Category not found or has been already deleted.');
      
        }
        $del = $category->deleteDataById($id);
        if($del){
            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/category/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/category/'.$cat_info[0]->image);
            }
            redirect('../category.php', 'success','Category deleted successfully.');

        }else{
            redirect('../category.php', 'error','Sorry! There was problem while deleting cateogry.');
        }

        

    }


else{
    redirect('../category.php', 'error','Unauthorized access.');
}

