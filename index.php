<?php 
require 'config/init.php';
$_title = "Home ";
require 'inc/header.php';
require 'inc/menu.php'
?>    
   <section class="politics">
        <div class="container">
            <div class="news-wrapper">
                <?php 
                    $news = new News();
                    $latest_news = $news->getLatestContent(4);
                    if($latest_news){
                        foreach($latest_news as $news_info){
                        ?>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-center">
                                        <a href="news.php?id=<?php echo $news_info->id;?>" class="btn-link">
                                            <?php echo $news_info->producttype;?>
                                        </a>
                                    
                                        <img class="img img-responsive img-thumbnail" src="<?php echo UPLOAD_URL.'/news/'.$news_info->image;?>" alt="">
                                    </h1>
                                </div>
                            </div>            
                            <hr>
                        <?php
                        }
                    }
                ?>                    
            
            </div>
        </div>
    </section>

    <?php 
        $politics_news = $news->getCategoryNews(79, 4);
        if($politics_news){
    ?>
    <section class="politics">
        <div class="container">
 
             <div class="section-title">
                <h2><a href="category.php?id=79">Gifts</a></h2>
                <p><a href="category.php?id=79">See All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <?php 
                        $first_news = array_shift($politics_news);
                    ?>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$first_news->image;?>)"></figure>
                            <h2><a href="news.php?id=<?php echo $first_news->id;?>"><?php echo $first_news->producttype;?></a></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        if($politics_news){
                                            foreach($politics_news as $news_list){
                                            ?>
                                            <div class="col-md-4">
                                                <a href="news.php?id=<?php echo $news_list->id;?>">
                                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_list->image;?>)"></figure></a>
                                            </div>
                                            <div class="col-md-8">
                                                <h3><a href="news.php?id=<?php echo $news_list->id;?>"><?php echo $news_list->producttype;?></a></h3>
                                                <p>
                                                    <?php echo $news_list->summary; ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php } ?>


        <?php 
        $stationary_news = $news->getCategoryNews(80, 4);
        if($stationary_news){
    ?>
    <section class="politics">
        <div class="container">
 
             <div class="section-title">
                <h2><a href="category.php?id=80">Stationary</a></h2>
                <p><a href="category.php?id=80">See All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <?php 
                        $first_news = array_shift($stationary_news);
                    ?>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$first_news->image;?>)"></figure>
                            <h2><a href="news.php?id=<?php echo $first_news->id;?>"><?php echo $first_news->producttype;?></a></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        if($stationary_news){
                                            foreach($stationary_news as $news_list){
                                            ?>
                                            <div class="col-md-4">
                                                <a href="news.php?id=<?php echo $news_list->id;?>">
                                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_list->image;?>)"></figure></a>
                                            </div>
                                            <div class="col-md-8">
                                                <h3><a href="news.php?id=<?php echo $news_list->id;?>"><?php echo $news_list->producttype;?></a></h3>
                                                <p>
                                                    <?php echo $news_list->summary; ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php } ?>


        <?php 
        $Games_news = $news->getCategoryNews(90, 4);
        if($Games_news){
    ?>
    <section class="politics">
        <div class="container">
            <div class="section-title">
                <h2><a href="category.php?id=90">Games</a></h2>
                <p><a href="category.php?id=90">See All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <?php 
                        $first_news = array_shift($Games_news);
                    ?>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$first_news->image;?>)"></figure>
                            <h2><a href="news.php?id=<?php echo $first_news->id;?>"><?php echo $first_news->producttype;?></a></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        if($Games_news){
                                            foreach($Games_news as $news_list){
                                            ?>
                                            <div class="col-md-4">
                                                <a href="news.php?id=<?php echo $news_list->id;?>">
                                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_list->image;?>)"></figure></a>
                                            </div>
                                            <div class="col-md-8">
                                                <h3><a href="news.php?id=<?php echo $news_list->id;?>"><?php echo $news_list->producttype;?></a></h3>
                                                <p>
                                                    <?php echo $news_list->summary; ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php } ?>




        <?php 
        $Children_news = $news->getCategoryNews(95, 4);
        if($Children_news){
    ?>
    <section class="politics">
        <div class="container">
 
             <div class="section-title">
                <h2><a href="category.php?id=95">Children Doll</a></h2>
                <p><a href="category.php?id=95">See All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <?php 
                        $first_news = array_shift($Children_news);
                    ?>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$first_news->image;?>)"></figure>
                            <h2><a href="news.php?id=<?php echo $first_news->id;?>"><?php echo $first_news->producttype;?></a></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        if($Children_news){
                                            foreach($Children_news as $news_list){
                                            ?>
                                            <div class="col-md-4">
                                                <a href="news.php?id=<?php echo $news_list->id;?>">
                                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_list->image;?>)"></figure></a>
                                            </div>
                                            <div class="col-md-8">
                                                <h3><a href="news.php?id=<?php echo $news_list->id;?>"><?php echo $news_list->producttype;?></a></h3>
                                                <p>
                                                    <?php echo $news_list->summary; ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php } ?>



        <?php 
        $Books_news = $news->getCategoryNews(91, 4);
        if($Books_news){
    ?>
    <section class="politics">
        <div class="container">
 
             <div class="section-title">
                <h2><a href="category.php?id=91">Books</a></h2>
                <p><a href="category.php?id=91">See All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <?php 
                        $first_news = array_shift($Books_news);
                    ?>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$first_news->image;?>)"></figure>
                            <h2><a href="news.php?id=<?php echo $first_news->id;?>"><?php echo $first_news->producttype;?></a></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        if($Books_news){
                                            foreach($Books_news as $news_list){
                                            ?>
                                            <div class="col-md-4">
                                                <a href="news.php?id=<?php echo $news_list->id;?>">
                                                    <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$news_list->image;?>)"></figure></a>
                                            </div>
                                            <div class="col-md-8">
                                                <h3><a href="news.php?id=<?php echo $news_list->id;?>"><?php echo $news_list->producttype;?></a></h3>
                                                <p>
                                                    <?php echo $news_list->summary; ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php } ?>


   
    

    
                            
                           

    

   

    

    
<?php require 'inc/footer.php';?>
