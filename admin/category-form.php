<!--adding the category--->
<?php 



require 'inc/header.php';
require_once 'inc/checklogin.php';
$category = new Category;
//id url ma dekhako cha vaye tyo update garney and id get(url) ma dekhako xaina vaney that is add
$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "update";
    $id = (int)$_GET['id'];//datase ID is in INT 
    if($id <= 0){
        redirect('category.php','error','Invalid category Id.');

    }
    
    $cat_info = $category->getDataById($id);
    if(!$cat_info){
        redirect('category.php','error','Category already deleted or does not exists on Database.');
    }
    //debug($cat_info);
    

    
    
    
}
?>
  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php require 'inc/sidebar.php';?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require 'inc/top-nav.php';?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php flash();?>   <!---welcome to dadmin panel>
            
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Category <?php echo ucfirst($act);?>
          </h1>

          <div class="row">
                    <div class="col-12">
                        <form action="process/category.php" enctype="multipart/form-data" method="post" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Productname: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$cat_info[0]->productname;?>" name="productname" id="productname" required placeholder="Enter  product Name" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">ProductType: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$cat_info[0]->producttype;?>" name="producttype" id="producttype" required placeholder="Enter  product type" class="form-control form-control-sm">
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
                                        <img src="<?php echo UPLOAD_URL.'/category/'.$cat_info[0]->image;?>" class="img img-responsive img-thumbnail" alt="">
                                    </div>
                                    <?php
                                    }
                                ?>

                                
                            </div>



                            <div class="form-group row">
                                <label for="" class="col-sm-3">Price: </label>
                                <div class="col-sm-9">
                                    <input type="number" value="<?php echo @$cat_info[0]->price;?>"  name="price" id="price" required placeholder="Enter  price" class="form-control form-control-sm">
                                </div>
                            </div>

                            



                            

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                <input type="hidden" name="cat_id" value="<?php echo @$cat_info[0]->id;?>">
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

     <?php require 'inc/copy.php';?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  
<?php require 'inc/footer.php';?>



 




