<?php
    /*require '../../config/init.php';
    require '../inc/checklogin.php';

    $gallery = new Gallery();

    if(isset($_POST) && !empty($_POST)){
       //debug($_POST);
     //  debug($_FILES,true);
        
        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
           
            'added_by' => $_SESSION['user_id']
        );  

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            // Upload image
            $file_name = uploadSingleImage($_FILES['image'], 'gallery');
            if($file_name){
                $data['image'] = $file_name;
            }
        }

        $gallery_id = (isset($_POST['gallery_id']) && !empty($_POST['gallery_id'])) ? (int)$_POST['gallery_id'] : null;
        
        
        if($gallery_id){
           // debug($gallery_id, true);
            $act = "updat";
            $success = $gallery->updateData($data, $gallery_id);
        } else {
            $act = "add";
            $success = $gallery->addData($data);
        }
        if($success){

            if(isset($_FILES['other_images']) && !empty($_FILES['other_images'])){
                $file = $_FILES['other_images'];
                $size = count($file['name']);

                for($i=0; $i<$size; $i++){
                    $temp = array(
                        'name' => $file['name'][$i],
                        'type' => $file['type'][$i],
                        'tmp_name' => $file['tmp_name'][$i],
                        'error' => $file['error'][$i],   
                        'size' => $file['size'][$i]
                    );
                    $upload = uploadSingleImage($temp, 'gallery');
                    if($upload){
                        $temp_data = array(
                            'gallery_id' => $success,
                            'image_name' => $upload
                        );
                        
                        $gallery_image = new GalleryImage();
                        $gallery_image->addData($temp_data);


                    }

                }

            }


           redirect('../gallery.php','success','Gallery '.$act.'ed successfully.');
        } else {
            redirect('../gallery.php','error','Sorry! There was problem while '.$act.'ing gallery.');
        }
    } else if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../gallery.php','error','Invalid Gallery Id.');
        }

        $cat_info = $gallery->getDataById($id);

        if(!$cat_info){
            redirect('../gallery.php','error','Gallery not found or has been already deleted.');
        }

        $del = $gallery->deleteDataById($id);

        if($del){
            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image);
            }
            redirect('../gallery.php', 'success','Gallery deleted successfully.');
        } else {
            redirect('../gallery.php', 'error','Sorry! There was problem while deleting cateogry.');
        }
    } else {
        redirect('../gallery.php', 'error','Unauthorized access.');
    }
*/


/*

    require '../../config/init.php';
    require '../inc/checklogin.php';

    $gallery = new Gallery();

    if(isset($_POST) && !empty($_POST)){
        
       
        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
            'status' => sanitize($_POST['status']),
            'added_by' => $_SESSION['user_id']
        );  

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            // Upload image
            $file_name = uploadSingleImage($_FILES['image'], 'gallery');
            if($file_name){
                $data['image'] = $file_name;
            }
        }

        $gallery_id = (isset($_POST['gallery_id']) && !empty($_POST['gallery_id'])) ? (int)$_POST['gallery_id'] : null;
        
        if($_POST['del_image'] != null){
            $image = new GalleryImage;
            $image->deleteImages($_POST['del_image']);
        }

        
        if($gallery_id){
           // debug($gallery_id, true);
            $act = "updat";
            $success = $gallery->updateData($data, $gallery_id);
        } else {
            $act = "add";
            $success = $gallery->addData($data);
        }
        if($success){

            if(isset($_FILES['other_images']) && !empty($_FILES['other_images'])){
                $file = $_FILES['other_images'];
                $size = count($file['name']);

                for($i=0; $i<$size; $i++){
                    $temp = array(
                        'name' => $file['name'][$i],
                        'type' => $file['type'][$i],
                        'error' => $file['error'][$i],
                        'tmp_name' => $file['tmp_name'][$i],
                        'size' => $file['size'][$i]
                    );

                    $upload = uploadSingleImage($temp, 'gallery');

                    if($upload){

                        $temp_data = array(
                            'gallery_id' => $success,
                            'image_name' => $upload
                        );

                        $gallery_image = new GalleryImage();
                        $gallery_image->addData($temp_data);
                    }
                }
            }


            redirect('../gallery.php','success','Gallery '.$act.'ed successfully.');
        } else {
            redirect('../gallery.php','error','Sorry! There was problem while '.$act.'ing gallery.');
        }
    } else if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../gallery.php','error','Invalid Gallery Id.');
        }

        $cat_info = $gallery->getDataById($id);

        if(!$cat_info){
            redirect('../gallery.php','error','Gallery not found or has been already deleted.');
        }

        $del = $gallery->deleteDataById($id);

        if($del){
            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image);
            }
            redirect('../gallery.php', 'success','Gallery deleted successfully.');
        } else {
            redirect('../gallery.php', 'error','Sorry! There was problem while deleting cateogry.');
        }
    } else {
        redirect('../gallery.php', 'error','Unauthorized access.');
    }*/


    
    require '../../config/init.php';
    require '../inc/checklogin.php';

    $gallery = new Gallery();

    if(isset($_POST) && !empty($_POST)){
        
       
        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
            'added_by' => $_SESSION['user_id']
        );  

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            // Upload image
            $file_name = uploadSingleImage($_FILES['image'], 'gallery');
            if($file_name){
                $data['image'] = $file_name;
            }
        }

        $gallery_id = (isset($_POST['gallery_id']) && !empty($_POST['gallery_id'])) ? (int)$_POST['gallery_id'] : null;
        
        if($_POST['del_image'] != null){
            $image = new GalleryImage;
            $image->deleteImages($_POST['del_image']);
        }

        //for the gallery add
        if($gallery_id){
           // debug($gallery_id, true);
            $act = "updat";
            $success = $gallery->updateData($data, $gallery_id);
        } else {
            $act = "add";
            $success = $gallery->addData($data);
        }
        if($success){
           // debug($success,true);

            if(isset($_FILES['other_images']) && !empty($_FILES['other_images'])){
                $file = $_FILES['other_images'];
                $size = count($file['name']);
                  //file upload
                for($i=0; $i<$size; $i++){
                    $temp = array(
                        'name' => $file['name'][$i],
                        'type' => $file['type'][$i],
                        'error' => $file['error'][$i],
                        'tmp_name' => $file['tmp_name'][$i],
                        'size' => $file['size'][$i]
                    );

                    $upload = uploadSingleImage($temp, 'gallery');

                    if($upload){
                             //for the database ma data entry
                        $temp_data = array(
                            'gallery_id' => $success,
                            'image_name' => $upload
                        );

                        $gallery_image = new GalleryImage();
                        $gallery_image->addData($temp_data);
                    }
                }
            }


            redirect('../gallery.php','success','Gallery '.$act.'ed successfully.');
        } else {
            redirect('../gallery.php','error','Sorry! There was problem while '.$act.'ing gallery.');
        }
    } else if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../gallery.php','error','Invalid Gallery Id.');
        }

        $cat_info = $gallery->getDataById($id);

        if(!$cat_info){
            redirect('../gallery.php','error','Gallery not found or has been already deleted.');
        }

        $del = $gallery->deleteDataById($id);

        if($del){
            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image);
            }
            redirect('../gallery.php', 'success','Gallery deleted successfully.');
        } else {
            redirect('../gallery.php', 'error','Sorry! There was problem while deleting gallery.');
        }
    } else {
        redirect('../gallery.php', 'error','Unauthorized access.');
    }

