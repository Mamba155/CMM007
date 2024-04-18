
<?php include('header.php'); ?>

	<!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel">
            
			<!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
						<div class="author-image">
							<img src="images/resource/author-2.jpg" alt="" />
						</div>
						<div class="info-list clearfix">
						<a href="recipes.php">	<div class="sales">
							    View Recipes
							</div></a>
						</div>
						<h1>Welcome to Spcica <br> Beet Vegetable Recipe Platform</h1>
                    </div>  
                </div>
                
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
						<div class="author-image">
							<img src="images/resource/author-2.jpg" alt="" />
						</div>
						<div class="info-list clearfix">
						<a href="recipes.php">	<div class="sales">
							    View Recipes
							</div></a>
						</div>
						<h1>Welcome to Spcica <br> Beet Vegetable Recipe Platform</h1>
                    </div>  
                </div>
            </div>
			
			<!-- Slide Item -->
            <div class="slide-item">
            	<div class="image-layer" style="background-image:url(images/main-slider/1.jpg)"></div>

                <div class="auto-container">
                    <div class="content-box">
						<div class="author-image">
							<img src="images/resource/author-2.jpg" alt="" />
						</div>
						<div class="info-list clearfix">
						<a href="recipes.php">	<div class="sales">
							    View Recipes
							</div></a>
						</div>
						<h1>Welcome to Spcica <br> Beet Vegetable Recipe Platform</h1>
                    </div> 
                </div>
            </div>
			
        </div>
    </section>
    <!--End Banner Section -->

	
	<!-- Trending Section -->
	<section class="trending-section">
		<div class="auto-container">
			<div class="layer-one" style="background-image: url(images/resource/category-pattern-1.png)"></div>
			<div class="layer-two" style="background-image: url(images/resource/category-pattern-1.png)"></div>
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">TRENDING</div>
							<h2>Standing Rib Roast</h2>
							<div class="text">Preheat oven to 325°. In a small bowl, mix the first 5 ingredients. Place roast in a roasting pan, fat side up; rub with seasoning mixture.Roast 2-1/4 to 2-3/4 hours or until meat reaches desired doneness (for medium-rare, a thermometer should read 135°; medium, 140°; medium-well, 145°). Remove roast from oven; tent with foil. Let stand 15 minutes before carving.</div>
						</div>
						<div class="bold-text">To separate the fat from the drippings with ease, try this tool from OXO ($14).</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/category.png" alt="" />
							<div class="mints">15 Min</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Trending Section -->
	
	<!-- Latest Recipes Section -->
	<section class="popular-recipes-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Latest Recipes</h2>
					</div>
					<div class="pull-right">
						<a href="recipes.php" class="theme-btn btn-style-one"><span class="txt">See all recipes</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="outer-container">
			<div class="row clearfix">
				
				 <?php while ($recipe = mysqli_fetch_array($recipe_query)) { ?>
				<!-- Recipes Block -->
				<div class="recipes-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="single-recipe.php?rid=<?= $recipe['id']; ?>"><img src="uploads/recipes/<?= $recipe['image']; ?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="author-image"><a href="author-details.html"><img src="uploads/recipes/<?= $recipe['image']; ?>" alt="" /></a></div>
							<div class="category"><b> Author: <?= $loader->recipeAuthor($recipe['user_id']); ?> </b></div>
							<h4><a href="single-recipe.php?rid=<?= $recipe['id']; ?>"> <?= $recipe['name']; ?> </a></h4>
							<ul class="post-meta">
								<li><span class="icon flaticon-clock-3"></span><?= $recipe['preparation_time']; ?></li>
								<li><span class="icon flaticon-business-and-finance"></span><?= $recipe['servings']; ?> People</li>
							</ul>
						</div>
					</div>
				</div>
				<?php } ?>
				
				
		
				
			
				
			</div>
		</div>
	</section>
	<!-- End Latest Recipes Section -->
	
	<!-- Latest Recipe Categories Section -->
	<section class="trending-recipes-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Latest Recipe Categories</h2>
					</div>
					<div class="pull-right">
						<a href="recipe-categories.php" class="theme-btn btn-style-one"><span class="txt">See all Post</span></a>
					</div>
				</div>
			</div>
			
			<div class="row clearfix">
				
				 <?php while( $category = mysqli_fetch_array( $cat_query ) ){  ?>
				<!-- Recipe Category Block -->
				<div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="recipes.php?cid=<?= $category['id']; ?>"><img src="uploads/category/<?= $category['image']; ?>" style="height:250px" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="author-image"><a href="recipes.php?cid=<?= $category['id']; ?>"><img src="uploads/category/<?= $category['image']; ?>"  alt="recipe category" /></a></div>
							<div class="category"><b>Author: <?= $loader->recipeCategoryAuthor($category['chef_id']); ?></b></div>
							<h4><a href="recipes.php?cid=<?= $category['id']; ?>"><?= $category['name']; ?></a></h4>
						</div>
					</div>
				</div>
				<?php } ?>
				
			</div>
			
		</div>
	</section>
	<!-- End Trending Recipes Section -->
	
	<!-- Call To Action Section -->
    <?php include('partials/call_to_section.php'); ?>
	<!-- End Call To Action Section -->
	
	<!-- Video Section -->
	<section class="video-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-6 col-sm-12">
					<!--Video Box-->
					<div class="video-box">
						<div class="image">
							<h4>Pressure-Cooker Chicken</h4>
							<img src="images/resource/video-1.jpg" alt="" />
							<a href="https://youtu.be/z9XKWyY_YIU?si=WNmyXDh6O46FiVNu" class="lightbox-image overlay-box"><span class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-6 col-sm-12">
					<!--Video Box-->
					<div class="video-box">
						<div class="image">
							<h4>Garlic Tomato Bruschetta</h4>
							<img src="images/resource/video-2.jpg" alt="" />
							<a href="https://youtu.be/FzYZBo1HBno?si=vKvURkyA_fCLBJCH" class="lightbox-image overlay-box"><span class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Video Section -->

	
	<!-- Explore Section -->
	 <?php include('partials/explore_more.php'); ?>
	<!-- End Explore Section -->
	
	<!-- Instagram Section -->
	<section class="instagram-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<div class="profile"><span class="fa fa-globe"></span> Welcome to spcica </div>
			</div>
			
		</div>
		
		<div class="instagram-carousel owl-carousel owl-theme">
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-1.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-2.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-3.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-4.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-5.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-6.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-1.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-2.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-3.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-4.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-5.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="images/resource/instagram-6.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>
	<!-- End Instagram Section -->
	
<?php include('footer.php'); ?>

