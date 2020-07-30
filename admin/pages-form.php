<?php require 'inc/header.php';
require_once 'inc/checklogin.php';
$page = new Pages;


$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('page.php','error','Invalid page Id.');
    }

    $page_info = $page->getDataById($id);
    
    if(!$page_info){
        redirect('pages.php','error','Pages already deleted or does not exists.');
    }
    
}
?>
<!-- include summernote css/js -->
<link href="<?php echo ADMIN_ASSETS;?>/summernote/summernote.css" rel="stylesheet">
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
                    Pages <?php echo ucfirst($act);?>
                </h1>

                <div class="row">
                    <div class="col-12">
                        <form action="process/page.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$page_info[0]->title;?>" name="title" id="title" required placeholder="Enter Pages Name" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$page_info[0]->summary;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Description: </label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="description" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$page_info[0]->description;?></textarea>
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
                                        <img src="<?php echo UPLOAD_URL.'/pages/'.$page_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="page_id" value="<?php echo @$page_info[0]->id;?>">
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
<script src="<?php echo ADMIN_ASSETS;?>/summernote/summernote.js"></script>
<script>
$(document).ready(function() {
  $('#description').summernote();
});
</script>
