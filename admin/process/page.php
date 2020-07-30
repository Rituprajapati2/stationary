<?php
    require '../../config/init.php';
    require '../inc/checklogin.php';

    $page = new Pages();

    if(isset($_POST) && !empty($_POST)){
        // debug($_POST);
        // debug($_FILES, true);

        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
            'description' => htmlentities($_POST['description']),
           );  
        // debug($data, true);

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            // Upload image
            $file_name = uploadSingleImage($_FILES['image'], 'pages');
            if($file_name){
                $data['image'] = $file_name;
            }
        }

        $page_id = (isset($_POST['page_id']) && !empty($_POST['page_id'])) ? (int)$_POST['page_id'] : null;
        
        
        if($page_id){
           // debug($page_id, true);
            $act = "updat";
            $success = $page->updateData($data, $page_id);
        } else {
            $act = "add";
            $success = $page->addData($data);
        }
        if($success){
            redirect('../pages.php','success','Pages '.$act.'ed successfully.');
        } else {
            redirect('../pages.php','error','Sorry! There was problem while '.$act.'ing page.');
        }
    } else {
        redirect('../pages.php', 'error','Unauthorized access.');
    }
