<?php

include('header.php');
    
if( (isset($_GET['cid'])) && ($_GET['cid'] !== null) ){
$cid = $_GET['cid'];
$recipe_query = mysqli_query($con,"SELECT * FROM recipes where category_id=$cid");
}else{
 $recipe_query = mysqli_query($con,"SELECT * FROM recipes");   
}
    
    ?>

 <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/10.jpg)">
    	<div class="auto-container">
			<h1>Our Recipes</h1>
        </div>
    </section>
    <!--End Page Title-->


	<!-- Popular Recipes Section -->
	<section class="popular-recipes-section style-three">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<h2> Recipes</h2>
						
					</div>
				
				</div>
			</div>
		</div>
		<div class="outer-container">
			
			<div class="row clearfix">
				
			<?php while( $recipe = mysqli_fetch_array($recipe_query) ) { ?>
				<!-- Recipes Block -->
				<div class="recipes-block style-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="single-recipe.php?rid=<?= $recipe['id']; ?>"><img src="uploads/recipes/<?= $recipe['image']; ?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="author-image"><img src="uploads/recipes/<?= $recipe['image']; ?>" alt="" /></div>
							<div class="category"><b>Auhor : <?= $loader->recipeAuthor($recipe['user_id']); ?></b></div>
							<h4><a href="single-recipe.php?rid=<?= $recipe['id']; ?>"><?= $recipe['name']; ?></a></h4>
							<div class="text"><?= $recipe['description']; ?> </div>
							<ul class="post-meta">
							
								<li><span class="icon flaticon-clock-3"></span> <?= $recipe['preparation_time']; ?></li>
								<li><span class="icon flaticon-business-and-finance"></span><?= $recipe['servings']; ?> People</li>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
				
			
				
			</div>
			
		</div>
	</section>
	<!-- End Popular Recipes Section -->
	
	<!-- Call To Action Section -->
    <?php include('partials/call_to_section.php'); ?>
	<!-- End Call To Action Section -->

    <?php include('footer.php') ?>