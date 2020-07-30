<?php 
/*
require 'inc/header.php';
require_once 'inc/checklogin.php';
$gallery = new Gallery;
$gallery_data = $gallery->getAllData();

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
          Product gallery List</h1>
          <a href="gallery-form.php" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i> Add Gallery
                </a>
                </h1>
                <div class="row">
                <div class="col-12">
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>S.N</th>
                    <th>Product Name</th>
                    <th>Product Type</th>
                    <th>Image</th>
                    <th>Price</th>
        
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        if($gallery_data){
                            foreach($gallery_data as $key => $gallery_info){
                                ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $gallery_info->productname;?></td>
                                    <td><?php echo $gallery_info->producttype;?></td>
                                    <td><?php echo $gallery_info->image;?></td>
                                    
                                    <td><?php echo $gallery_info->price;?></td>
                                   
                                    <td>
                                        <a href="gallery-form.php?id=<?php echo $gallery_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>    

                                        <a href="process/gallery.php?id=<?php echo $gallery_info->id;?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You sure you want to delete this gallery?')">
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








/*

require 'inc/header.php';
require_once 'inc/checklogin.php';
$gallery = new Gallery;
$gallery_data = $gallery->getAllData();
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
              Gallery List
                <a href="gallery-form.php" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i> Add Gallery
                </a>
          </h1>

            <div class="row">
                <div class="col-12">
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Summary</th>
                   
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        if($gallery_data){
                            foreach($gallery_data as $key => $gallery_info){
                                ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $gallery_info->title;?></td>
                                    <td><?php echo $gallery_info->summary;?></td>
                                    
                                    <td>
                                        <a href="gallery-form.php?id=<?php echo $gallery_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>    

                                        <a href="process/gallery.php?id=<?php echo $gallery_info->id;?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You sure you want to delete this gallery?')">
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
*/

require 'inc/header.php';
require_once 'inc/checklogin.php';
$gallery = new Gallery;
$gallery_data = $gallery->getAllData();
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
              Gallery List
                <a href="gallery-form.php" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i> Add Gallery
                </a>
          </h1>

            <div class="row">
                <div class="col-12">
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        if($gallery_data){
                            foreach($gallery_data as $key => $gallery_info){
                                ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $gallery_info->title;?></td>
                                    <td><?php echo $gallery_info->summary;?></td>
                                
                                    <td>
                                        <a href="gallery-form.php?id=<?php echo $gallery_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>    

                                        <a href="process/gallery.php?id=<?php echo $gallery_info->id;?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You sure you want to delete this gallery?')">
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
