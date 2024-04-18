<?php
include('autoloader.php');

  $cat_query = mysqli_query($con,"SELECT * FROM categories ORDER BY created_at DESC LIMIT 6");
  
  $recipe_query = mysqli_query($con,"SELECT * FROM recipes ORDER BY created_at DESC LIMIT  4");

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>spcica Food Recipe | Official Website</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10793544805"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10793544805');
</script>

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-one">
    	
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="/"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
					
                   	<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">

									<li><a href="index.php">Home</a></li>
									<li><a href="recipes.php">Recipes</a></li>
									<li><a href="recipe-categories.php">Recipe Categories</a></li>
																							
								</ul>
							</div>
							
						</nav>
						

						
						<div class="outer-box">
							<!-- Search Box -->
							<div class="search-box-outer">
								<div class="dropdown">
									<!--<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>-->
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="https://gico.io/spcica/blog.html">
													<div class="form-group">
														<input type="search" name="field-name" value="" placeholder="Search Here" required="">
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<ul class="login-info">
								<li><a href="cook/sign-in.php"><span class="icon fa fa-user"></span>Chef Login</a></li>
								<li class="recipe"><a href="cook/sign-up.php"><span class="fa fa-plus-circle"></span>&nbsp; Chef Register</a></li>
							</ul>
						</div>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->