<!DOCTYPE html>
<html lang="en">
<!-- Begin head section -->
	<head>
<!-- Begin meta data -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="WordPress site">
		<title>April's Closet - Affordable Modern Apparel</title>
		<meta name="author" content="https://youtube.com/FollowAndrew">    
<!-- Begin stylesheets -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">        
		<link href="style.css" rel="stylesheet" type="text/css">
    	
		<!-- loads stylesheets, triggered by wp_head but linked in functions.php to my own custom enqueued stylesheets -->
		<?php 
			wp_head(); 
		?>
	</head>
<!-- End head section -->
<!-- Begin body section-->
    <body>
	 <?php
				// echo get_bloginfo('name');
			?>
        <div class="container">
<!-- Begin top alert section -->
            <div class="row gx-1">
                <div id="pmc-topalert" class="col-sm-12">Clearance! Up to 60% off select items! <a href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/product-category/products/clearance/">Shop now!</a></div>
<!-- End top alert section -->
<!-- Begin navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
<!-- Clicking logo or site name links back to site homepage -->
                        <a href="<?php
                          $url = home_url();
                          echo $url;
                          ?>
                          ">
<!-- Begin dynamic theme logo / site name -->
                          <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
                            if ( has_custom_logo() ) {
                              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                              echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                          ?>
<!-- End dynamic theme logo / site name -->
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop Apparel</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/product-category/products/womens/">Women's Apparel</a></li>
                                  <li><a class="dropdown-item" href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/product-category/products/mens/">Men's Apparel</a></li>
                                  <li><a class="dropdown-item" href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/product-category/products/accessories/">Accessories</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/product-category/products/clearance/">Clearance</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/about/">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="<?php
                                  $url = home_url();
                                  echo $url;
                                  ?>/cart/">My Cart</a>
                              </li>
                            </ul>
                            <?php aws_get_search_form( true ); ?>
                          </div>
                        </div>
                </nav>
<!-- End navbar -->
