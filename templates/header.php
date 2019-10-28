<header class="banner">
  <div class="container">
	  <div class="row">
		<!-- LOGO -->
		<div class="col-md-6 col-lg-4 d-flex align-items-center">
		  <a class="" href="<?php echo home_url(); ?>" rel="nofollow">
			  <img src="<?php echo get_field('site_logo', 'option'); ?>" class="logo" alt="MedInc"></a>
		</div>
		<!-- LOGO -->
		
		<! -- RIGHT SIDE -->
		<div class="col-md-12 col-lg-8 ">
			<!-- EMPLOYEE LOGIN/SEARCH ROW -->
			<div id="top-nav" class="row justify-content-md-end no-gutters">
				<div id="emp-log" class="col-md-12 col-lg-3 mt-md-2 mt-lg-0">
					<a class="emp-portal" href="<?php echo get_field('employee_login_link', 'option'); ?>" target="_blank"><?php the_field('employee_login_text', 'option'); ?></a>
					
				<!-- MOBILE MENU-->
				<div class="navbar-toggleable-lg hidden-xl-up">
				  <div class="navbar-light">
				  	<button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#mobilemenu" aria-controls="mobilemenu" aria-expanded="false" aria-label="Toggle navigation">
				  	<span class="navbar-toggler-icon"></span>
				  	</button>
				  </div>

				  <div class="collapse navbar-collapse" id="mobilemenu">
				  <?php if (has_nav_menu('primary_navigation')) :
					  	wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav justify-content-between']);
					endif; ?>		
				  </div>
				</div><!-- MENU ROW -->

					
				</div>
				
				<div class="col col-lg-1 hidden-md-down">
					<?php get_search_form(); ?>
				</div>
				
				
			</div><!-- EMPLOYEE LOGIN/SEARCH ROW -->	
			 			 
			<!-- MENU ROW --> 			 		  	
			<div class="row no-gutters float-right  mb-sm-2 mb-xl-0">
				<div class="col-lg-12">
					<nav class="navbar navbar-toggleable-lg hidden-md-down">
					  
					  <div class="" id="navbarNavDropdown">
						  <?php if (has_nav_menu('primary_navigation')) :
								  	wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav justify-content-between']);
						endif; ?>		
					  </div>
					</nav>
				</div>
			</div><!-- MENU ROW -->
     	</div><! -- RIGHT SIDE -->
  </div>
</header>

<!-- HOME SLIDER -->
<?php if ( is_front_page() ) : ?>
    <div class="slideshow-wrapper">
	  <?php if( have_rows('slides') ): ?>
	  <!-- START BXSLIDER -->
	  <div class="bx-wrapper" style="max-width: 100%;">
		  <div class="ban-bg-home">
					<div class="container">
						<div class="row text-white">
							<div class="col-lg-6">
								<div class="bnrtxt">
									<h2><?php the_field('slider_text'); ?></h2>
								</div><!-- bnrtxt -->
							</div><!-- col -->
							<div class="col-lg-6"></div>
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- ban-bg-->

		  <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative;">
			  
			  	<ul class="bxslider" style="width: auto; position: relative;padding-left: 0;">
				  	<?php while( have_rows('slides') ): the_row(); ?>
				  <li style="float: none; list-style: outside none none; position: absolute; width: 100%; z-index: 50; display: block;" aria-hidden="false">
				  	
				  	<img class="slider img-fluid" src="<?php the_sub_field('slide'); ?>" alt="">				  
				  </li>
					<?php endwhile; ?>        						    							 
			    </ul>
			</div>
		</div>
	<?php endif; ?>
   	</div>
   
<? else : ?>
		<!-- PAGE BANNERS -->
		<?php if (!is_page_template( 'template-dashboard.php' ) ): ?>
			<?php if(is_404() || is_search() ): ?>
				<div style="background: url('<?php echo get_template_directory_uri(); ?>/dist/images/arthrex-banner.png'); background-size: cover;">
			<?php else : ?>
				<div style="background: url(<?php if(get_field('top_banner_image')) { ?><?php the_field('top_banner_image'); ?><?php } ?>); background-size: cover;">
			<?php endif; ?>
					<div class="page-banner d-flex align-items-center justify-content-center">
						<?php if(is_page()): ?>
						<div class="ban-bg">
							<div class="container">
								<div class="row text-white">
									<div class="col-lg-6">
										<div class="bnrtxt">
											<h2><?php the_field('top_banner_text'); ?></h2>
										</div><!-- bnrtxt -->
									</div><!-- col -->
									<div class="col-lg-6"></div>
								</div><!-- row -->
							</div><!-- container -->
						</div><!-- ban-bg-->
						<?php endif; ?>
					</div><!-- page banner -->
				</div><!-- style div -->
			<?php endif; ?>
<?php endif; ?>


<?php if (is_page('arthrex')) : ?>
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<img src="<?php echo the_field('page_logo'); ?>">
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
<?php endif; ?>