<?php 
/*
require 'inc/header.php';
require_once 'inc/checklogin.php';
$news = new News;
$category  = new Category; /* add caregory product ko data pull garney*/ 
/*
$all_categories = $category->getAllData();

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('news.php','error','Invalid news Id.');
    }

    $news_info = $news->getDataById($id);
    
    if(!$news_info){
        redirect('news.php','error','News already deleted or does not exists.');
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
                    Product  <?php echo ucfirst($act);?>
                </h1>

                <div class="row">
                    <div class="col-12">
                        <form action="process/news.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Productname: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->productname;?>" name="productname" id="productname" required placeholder="Enter  product Name" class="form-control form-control-sm">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3">Producttype: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->producttype;?>" name="producttype" id="producttype" required placeholder="Enter  product type" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$news_info[0]->summary;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Description: </label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="description" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$news_info[0]->description;?></textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3">Category: </label>
                                <div class="col-sm-9">
                                    <select name="cat_id" id="cat_id" class="form-control form-control-sm">
                                        <option value="" selected disabled>-- Select Any One --</option>
                                        <?php 
                                            if($all_categories){
                                                foreach($all_categories as $cat_data){
                                                    ?>
                                                    <option value="<?php echo $cat_data->id;?>" >
                                                        <?php echo $cat_data->productname; ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                        ?>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3">Source: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->source;?>" name="source" id="source" placeholder="Enter News Source" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Location: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->location;?>" name="location" id="location" placeholder="Enter News Location" class="form-control form-control-sm">
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
                                        <img src="<?php echo UPLOAD_URL.'/news/'.$news_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>



                            <div class="form-group row">
                                <label for="" class="col-sm-3">Price: </label>
                                <div class="col-sm-9">
                                    <input type="number" value="<?php echo @$news_info[0]->price;?>" name="price" id="price" required placeholder="Enter  price" class="form-control form-control-sm">
                                </div>
                            </div>

                            



                            

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="news_id" value="<?php echo @$news_info[0]->id;?>">
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
</script>*/

require 'inc/header.php';
require_once 'inc/checklogin.php';
$news = new News;
$category  = new Category;


$all_categories = $category->getAllData();


$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('news.php','error','Invalid news Id.');
    }

    $news_info = $news->getDataById($id);
    
    if(!$news_info){
        redirect('news.php','error','product already deleted or does not exists.');
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
                    Product <?php echo ucfirst($act);?>
                </h1>

                <div class="row">
                    <div class="col-12">
                        <form action="process/news.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">ProductType: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->producttype;?>" name="producttype" id="producttype" required placeholder="Enter product Type" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$news_info[0]->summary;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Price: </label>
                                <div class="col-sm-9">
                                    <input type="number" value="<?php echo @$news_info[0]->price;?>" name="price" id="price" required placeholder="Enter price" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Description: </label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="description" rows="5" style="resize:none;" class="form-control form-control-sm"><?php echo @$news_info[0]->description;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Category: </label>
                                <div class="col-sm-9">
                                    <select name="cat_id" id="cat_id" class="form-control form-control-sm">
                                        <option value="" selected disabled>-- Select Any One --</option>
                                        <?php 
                                            if($all_categories){
                                                foreach($all_categories as $cat_data){
                                                    ?>
                                                    <option value="<?php echo $cat_data->id;?>" <?php echo (isset($news_info) && $news_info[0]->cat_id == $cat_data->id) ? 'selected' : '';?>>
                                                        <?php echo $cat_data->productname; ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                        ?>

                                    </select>
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
                                        <img src="<?php echo UPLOAD_URL.'/news/'.$news_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="news_id" value="<?php echo @$news_info[0]->id;?>">
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


