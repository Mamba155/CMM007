<?php

include('header.php');
    
$cat_query = mysqli_query($con,"SELECT * FROM categories"); 
 
?>

    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>All Recipe Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-area section-padding-80">
        <div class="container">
            <div class="row blog-posts-area">

           <?php while( $category = mysqli_fetch_array( $cat_query ) ){  ?>

           <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex align-items-center">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="/uploads/category/<?= $category['image']; ?>" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span><?= $category['created_at']; ?></span>
                            <a href="recipes.php?cid=<?= $category['id']; ?>">
                                <h5><?= $category['name']; ?></h5>
                            </a>
                            <div class="ratings align-items-center row mx-0">
                                <i class="fa fa-star" aria-hidden="true"></i><p class="mx-2"><?= $loader->recipeCategoryAuthor($category['chef_id']); ?></p>
                            </div>
                        </div>
                    </div>
            </div>

 <?php } ?>


            </div>

        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <?php include('footer.php') ?>