<?php include('header.php');

if (isset($_GET['rid']) && $_GET['rid'] !== null) {
    $recipe_id = $_GET['rid'];
    $recipe_query = mysqli_query($con, "SELECT * FROM recipes WHERE `id` = $recipe_id");
    $recipe = mysqli_fetch_array($recipe_query);

    if ($recipe <= 0) {
        $link = $loader->getLink('my-recipes.php');
        echo "<script>alert('Recipe does not exist'); window.location.href='" . $link . "'</script>";
        exit();
    }
} else {
    $link = $loader->getLink('my-recipes.php');
    echo "<script>alert('Recipe does not exist'); window.location.href='" . $link . "'</script>";
    exit();
}



?>

 <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/10.jpg)">
    	<div class="auto-container">
			<h1>Recipe - <?= $recipe['name']; ?></h1>
        </div>
    </section>
    <!--End Page Title-->
	
	
	  <?php
                        
                         $date = $recipe['created_at'];
                    // Convert the date string into the desired format
                    $formatted_day = date('d', strtotime($date));
                    $formatted_month = date('F', strtotime($date));
                    $formatted_year = date('Y', strtotime($date));
                        
                        
                        ?>
                        
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container recipes-details-area">
    	<div class="auto-container">
        	<div class="row clearfix">
				<!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                	<div class="recipe-detail">
						<div class="inner-box">
							<div class="image">
								<img src="uploads/recipes/<?= $recipe['image']; ?>" alt="" />
							</div>
							<div class="content" style="background-image:url()">
								<div class="author-image">
									<img src="" alt="" />
								</div>
							
								<h2><?= $recipe['name']; ?></h2>
								<div class="post"><?= $formatted_month.' '.$formatted_day ?>, <?= $formatted_year?> <span>By : <?= $loader->recipeAuthor($recipe['user_id']); ?></span></div>
							
								<div class="text"><?= $recipe['description']; ?></div>
								<ul class="post-meta">
							
									<li><span class="icon flaticon-clock-3"></span><?= $recipe['preparation_time']; ?></li>
									<li><span class="icon flaticon-business-and-finance"></span><?= $recipe['servings']; ?> People</li>
								
								</ul>
							</div>
						
							
							<div class="row clearfix">
							
								<div class="column col-lg-12">

									<div class="my-tab">
										<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
										  <li class="nav-item">
										    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">More Details</a>
										  </li>
										 
										</ul>
										<div class="tab-content" id="pills-tabContent">
										  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										  		<div class="row">
										  	
										  			<div class="col-lg-6">
										  		
														<div class="ingredients-block">
															<div class="block-inner">
																<h4>Ingredients</h4>
															<?= $recipe['ingredients']; ?>
																
															</div>
														</div>
									
														<!-- Nutrition Block -->
														
										  			</div>
										  			<div class="col-lg-6">
										  				<!-- Ingredients Block -->
														<div class="ingredients-block">
															<div class="block-inner">
																<h4>Directions</h4>
															 <?= $recipe['instructions']; ?>
															 
															</div>
														</div>
										  			</div>	
										  		</div>
										  </div>
									
										</div>
									</div>
								</div>
							
							</div>

							
						
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- Explore Section -->
	 <?php include('partials/explore_more.php'); ?>
	<!-- End Explore Section -->

    <?php include('footer.php'); ?>