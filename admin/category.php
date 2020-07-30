<?php



 require 'inc/header.php';
require_once 'inc/checklogin.php';
$category = new Category;
$cat_data = $category->getAllData();
//debug($cat_data);
?>
<link rel= "stylesheet" href="<?php echo ADMIN_ASSETS_CSS?>/dataTables.min.css">
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
          <h1 class="h3 mb-4 text-gray-800">Category List
          <a href="category-form.php" class="btn btn-success float-right">
                    <i class="fa fa-plus"></i> Add Category
                </a>
          </h1>
          
          <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <th>S.N</th>
                <th>ProductName</th>
                <th>ProductType</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php  
                    if($cat_data){
                        foreach($cat_data as $key => $cat_info){
                            ?>
                            <tr>
                              <td><?php echo $key+1;?></td>
                              <td><?php echo $cat_info->productname;?></td>
                              <td><?php echo $cat_info->producttype;?></td>
                              <td><?php echo $cat_info->price;?></td>
                              <td>
                              <a href="category-form.php?id=<?php echo $cat_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>    
                                <a href="process/category.php?id=<?php echo $cat_info->id;?>" class="btn btn-danger btn-circle" onclick="return confirm('Are You sure you want to delete this category?')">
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php require 'inc/copy.php';?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  
<?php require 'inc/footer.php';?>

<script src="<?php echo ADMIN_ASSETS_JS?>/dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable();
} );
</script>



 