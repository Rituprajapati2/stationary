<?php require 'inc/header.php';
require_once 'inc/checklogin.php';
$pages = new Pages;
$page_data = $pages->getAllData();
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
              Pages List
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
                        if($page_data){
                            foreach($page_data as $key => $page_info){
                                ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $page_info->title;?></td>
                                    <td><?php echo $page_info->summary;?></td>
                                    <td>
                                        <a href="pages-form.php?id=<?php echo $page_info->id;?>" class="btn btn-success btn-circle">
                                            <i class="fa fa-edit"></i>
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
