<?php
/*
require 'inc/header.php';
require_once 'inc/checklogin.php';
$gallery = new Gallery;

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('gallery.php','error','Invalid gallery Id.');
    }

    $gallery_info = $gallery->getDataById($id);
    
    if(!$gallery_info){
        redirect('gallery.php','error','Gallery already deleted or does not exists.');
    }
    
}
?>
<!-- Page Wrapper -->
<div id="wrapper">

    <?php require 'inc/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php require 'inc/top-nav.php'; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php flash(); ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">
                    Gallery <?php echo ucfirst($act);?>
                </h1>

                <div class="row">
                    <div class="col-12">
                        <form action="process/gallery.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$gallery_info[0]->title;?>" name="title" id="title" required placeholder="Enter Gallery Name" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$gallery_info[0]->summary;?></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Image: </label>
                                <div class="col-sm-3">
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <?php 
                                    if($act == 'update'){
                                    ?>
                                    <div class="col-sm-4">
                                        <img src="<?php echo UPLOAD_URL.'/gallery/'.$gallery_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Other Images: </label>
                                <div class="col-sm-3">
                                    <input type="file" name="other_images[]" multiple accept="image/*">
                                </div>
                            </div>
                            
                            <div class="row">
                            <?php 
                                if($act == 'update'){
                                    $image = new GalleryImage();
                                    $gallery_images = $image->getDataByParentId($id);
                                    if($gallery_images){
                                        foreach($gallery_images as $gall_imag){
                                        ?>
                                        <div class="col-sm-3">
                                            <img src="<?php echo UPLOAD_URL.'/gallery/'.$gall_imag->image_name;?>" alt="" class="img img-responseive img-thumbnail">
                                            <input type="checkbox" name="del_image[]" value="<?php echo $gall_imag->id;?>"> Delete
                                        </div>

                                        <?php
                                        }
                                    }
                                }
                            ?>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="gallery_id" value="<?php echo @$gallery_info[0]->id;?>">
                                    <button class="btn btn-danger" type="reset">
                                        <i class="fa fa-trash"></i> Reset
                                    </button>
                                    

                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php require 'inc/copy.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<?php require 'inc/footer.php'; ?>
*/




/*

 require 'inc/header.php';
require_once 'inc/checklogin.php';
$gallery = new Gallery;

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('gallery.php','error','Invalid gallery Id.');
    }

    $gallery_info = $gallery->getDataById($id);
    
    if(!$gallery_info){
        redirect('gallery.php','error','Gallery already deleted or does not exists.');
    }
    
}
?>
<!-- Page Wrapper -->
<div id="wrapper">

    <?php require 'inc/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php require 'inc/top-nav.php'; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php flash(); ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">
                    Gallery <?php echo ucfirst($act);?>
                </h1>

                <div class="row">
                    <div class="col-12">
                        <form action="process/gallery.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$gallery_info[0]->title;?>" name="title" id="title" required placeholder="Enter Gallery Name" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$gallery_info[0]->summary;?></textarea>
                                </div>
                            </div>
                           

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Image: </label>
                                <div class="col-sm-3">
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <?php 
                                    if($act == 'update'){
                                    ?>
                                    <div class="col-sm-4">
                                        <img src="<?php echo UPLOAD_URL.'/gallery/'.$gallery_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Other Images: </label>
                                <div class="col-sm-3">
                                    <input type="file" name="other_images[]" multiple accept="image/*">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="gallery_id" value="<?php echo @$gallery_info[0]->id;?>">
                                    <button class="btn btn-danger" type="reset">
                                        <i class="fa fa-trash"></i> Reset
                                    </button>

                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php require 'inc/copy.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<?php require 'inc/footer.php'; ?>
*/



require 'inc/header.php';
require_once 'inc/checklogin.php';
$gallery = new Gallery;

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('gallery.php','error','Invalid gallery Id.');
    }

    $gallery_info = $gallery->getDataById($id);
    
    if(!$gallery_info){
        redirect('gallery.php','error','Gallery already deleted or does not exists.');
    }
    
}
?>
<!-- Page Wrapper -->
<div id="wrapper">

    <?php require 'inc/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php require 'inc/top-nav.php'; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php flash(); ?>
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">
                    Gallery <?php echo ucfirst($act);?>
                </h1>

                <div class="row">
                    <div class="col-12">
                        <form action="process/gallery.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$gallery_info[0]->title;?>" name="title" id="title" required placeholder="Enter Gallery Name" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$gallery_info[0]->summary;?></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Image: </label>
                                <div class="col-sm-3">
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <?php 
                                    if($act == 'update'){
                                    ?>
                                    <div class="col-sm-4">
                                        <img src="<?php echo UPLOAD_URL.'/gallery/'.$gallery_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Other Images: </label>
                                <div class="col-sm-3">
                                    <input type="file" name="other_images[]" multiple accept="image/*">
                                </div>
                            </div>
                            
                            <div class="row">
                            <?php 
                                if($act == 'update'){
                                    $image = new GalleryImage();
                                   $gallery_images = $image->getDataByParentId($id);
                                   if($gallery_images){
                                      foreach($gallery_images as $gall_imag){
                                        ?>
                                        <div class="col-sm-3">
                                            <img src="<?php echo UPLOAD_URL.'/gallery/'.$gall_imag->image_name;?>" alt="" class="img img-responseive img-thumbnail">
                                            <input type="checkbox" name="del_image[]" value="<?php echo $gall_imag->id;?>"> Delete
                                        </div>

                                        <?php
                                        }
                                    }
                                }
                            ?>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="gallery_id" value="<?php echo @$gallery_info[0]->id;?>">
                                    <button class="btn btn-danger" type="reset">
                                        <i class="fa fa-trash"></i> Reset
                                    </button>

                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php require 'inc/copy.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<?php require 'inc/footer.php'; ?>
