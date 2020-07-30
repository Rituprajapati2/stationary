<header class="main-head">

<div class="container">
    <div class="logo">
        <img src="<?php echo HOME_ASSETS_IMAGES?>/logo.jpg">
    </div>
</div>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a href="./" class="nav-link <?php echo (getCurrentPage() == 'index') ? 'active' : '';?>">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </li>
                <?php 
                    $category = new Category();
                    $all_categories = $category->getAllData(6);
                    if($all_categories){
                        foreach($all_categories as $cat_info){
                            ?>
                                <li class="nav-item">
                                    <a href="category.php?id=<?php echo $cat_info->id;?>" class="nav-link <?php echo ((getCurrentPage() == 'category') && $_GET['id'] == $cat_info->id) ? 'active' : '';?>">
                                        <?php echo $cat_info->productname; ?>
                                    </a>
                                </li>
                            <?php
                        }
                    }
                
                ?>
            </ul>
        </div>
    </div>
</nav>

</header>
