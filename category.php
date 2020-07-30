<?php require 'config/init.php';
$_title = "Category ";
require 'inc/header.php';
require 'inc/menu.php';
$news = new News();
$no_cat = false;
if(isset($_GET['id']) && !empty($_GET['id'])){
    $cat_id = (int)$_GET['id'];
    $news_list = $news->getCategoryNews($cat_id, 30);
    if(!$news_list){
        $no_cat = true;
    }
}

?>
    <section class="inner">
        <div class="container">
                <?php 
                    if($no_cat){
                        echo "<p class='alert alert-danger'>Items not found in this category</p>";
                    } else {
                        foreach($news_list as $cat_news){
                        ?>
                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-img">
                                <a href="news.php?id=<?php echo $cat_news->id;?>">
                                    <?php
                                        if(file_exists(UPLOAD_DIR.'/news/'.$cat_news->image) && !empty($cat_news->image)){
                                    ?>
                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$cat_news->image;?>)"></figure>
                                        <?php } else {
                                        ?>
                                    <figure class="testimg" style="background-image: url(<?php echo HOME_ASSETS_IMAGES.'/logo.jpg';?>)"></figure>
                                        <?php    
                                        }?>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="inner-details">
                                <h2><a href="news.php?id=<?php echo $cat_news->id;?>"><?php echo $cat_news->producttype;?></a></h2>
                                <p>
                                
                                
                                         - Rs  <?php echo $cat_news->price;?>
                                          
                                    
                                    <br>
                                
                                    <?php echo $cat_news->summary;?>
                                </p>
                            </div>
                        </div>
                        </div>
                        <hr>
                        <?php
                        }
                    }
                ?>
        </div>
    </section>

    <?php require 'inc/footer.php';?>
