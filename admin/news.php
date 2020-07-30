<?php 
/*require 'inc/header.php';
require_once 'inc/checklogin.php';
$news = new News;
$news_data = $news->getAllData();

?>
<link rel= "stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
            <?php flash();?>   
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">
          Product List</h1>
          <a href="news-form.php" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i> Add Product
                </a>
                </h1>
                <div class="row">
                <div class="col-12">
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>S.N</th>
                    <th>Product name</th>
                    <th>Product Type</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Price</th>
        
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        if($news_data){
                            foreach($news_data as $key => $news_info){
                                ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $news_info->productname;?></td>
                                    <td><?php echo $news_info->producttype;?></td>
                                    <td><?php echo $news_info->cat_id;?></td>
                                    <td><?php echo $news_info->image;?></td>
                                    <td><?php echo $news_info->price;?></td>
                                   
                                    <td>
                                        <a href="news-form.php?id=<?php echo $news_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>    

                                        <a href="process/news.php?id=<?php echo $news_info->id;?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You sure you want to delete this news?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
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
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready( function () {
    $('.table').DataTable();
} );
</script>*/



 require 'inc/header.php';
require_once 'inc/checklogin.php';
$news = new News;
$news_data = $news->getAllData();
?>
<link rel="stylesheet" href="<?php echo ADMIN_ASSETS_CSS?>/dataTables.min.css">
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
            <?php flash();?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">
              Product List
                <a href="news-form.php" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i> Add Product
                </a>
          </h1>

            <div class="row">
                <div class="col-12">
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>S.N</th>
                    <th>Producttype</th>
                    <th>Summary</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        if($news_data){
                            foreach($news_data as $key => $news_info){
                                ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $news_info->producttype;?></td>
                                    <td><?php echo $news_info->summary;?></td>
                                    <td><?php echo $news_info->cat_id;?></td>
                                    <td><?php echo $news_info->price;?></td>
                                    <td>
                                        <a href="news-form.php?id=<?php echo $news_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>    

                                        <a href="process/news.php?id=<?php echo $news_info->id;?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You sure you want to delete this product?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
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
<script src="<?php echo ADMIN_ASSETS_JS;?>/dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable();
} );
</script>
