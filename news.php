<?php require 'config/init.php';
$_title = "Category ";
require 'inc/header.php';
require 'inc/menu.php';
$news = new News();
if(isset($_GET['id']) && !empty($_GET['id'])){
    $news_id = (int)$_GET['id'];
    $news_detail = $news->getDataById($news_id);

    $related_item = $news->getCategoryNews($news_detail[0]->cat_id, 4);
    
}

?>
    <section class="news-inner">
        <div class="container">
            <?php 
                if($news_detail){
                    ?>
                    <div class="full-news">
                <h2><?php echo $news_detail[0]->producttype;?></h2>
                <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_detail[0]->image;?>)"></figure>
                
                <?php echo html_entity_decode($news_detail[0]->description);?>
                <p>
                    
                    <div class="fb-share-button" data-href="<?php echo getPageUrl();?>" data-layout="button_count" data-size="large">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo getPageUrl();?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
                    </div>
                </p>
            </div>
            <div class="comment">
                <h4>Comment</h4>
                <div class="fb-comments" data-href="<?php echo getPageUrl();?>" data-width="100%" data-numposts="5"></div>
            </div>
            <div class="news-wrapper">
                <div class="section-title more">
                    <h2>Related Items</h2>
                </div>
                <div class="more-list"></div>
                    <div class="row">
                        <?php 
                            if($related_item){
                                foreach($related_item as $news_list){
                                    if($news_list->id != $news_detail[0]->id){
                                        ?>
                                        <div class="col-lg-3 col-md-4 col-6">
                                            <div class="more-news">
                                                <a href="news.php?id=<?php echo $news_list->id;?>">
                                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_list->image;?>)"></figure>
                                                </a>
                                                <h2><a href="news.php?id=<?php echo $news_list->id;?>"><?php echo $news_list->producttype;?></a></h2>
                                            </div>
                                        </div>
                                        <?php
        
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
                    <?php
                } else {
                    echo "<p class='alert alert-danger'>Items not found.</p>";
                }
            
            ?>
        </div>
    </section>

    <?php require 'inc/footer.php';?>
