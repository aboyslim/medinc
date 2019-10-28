<?php if (is_front_page()) : ?>
	<?php if( have_rows('home_page_boxes') ): ?>
		<div class="container">
			<div class="row my-4 text-white">
				<!-- HOME BOX -->
				<?php while( have_rows('home_page_boxes') ): the_row(); ?>
					<div class="col-md-4">
						<div class="text-center home-box">
							<!-- ICON -->
							<img src="<?php echo the_sub_field('box_icon'); ?>">
							
							<!-- SUBHEAD -->			
							<h3 class="text-white"><?php the_sub_field('box_subhead'); ?></h3>
							
							<!-- DESCRIPTION -->
							<?php the_sub_field('box_description'); ?>
							
							<!-- BUTTON TEXT & LINK -->
							<a href="<?php echo the_sub_field('box_button_link'); ?>"><input type="button" value="<?php echo the_sub_field('box_button_text'); ?>" ></a>
							
						</div><!-- home-box -->
					</div><!-- col -->
				<?php endwhile; ?>	
			</div><!-- row -->	
		</div><!-- container -->
	<?php endif; ?>
<?php endif ;?>


<?php if (is_page('products')) : ?>

	<!-- TOP BAR -->
	<div  id="provider-fields" class="text-center">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-12">
					<!-- DESCRIPTION -->
					<?php the_field('top_bar_description'); ?>
						
					<!-- FIELDS -->
					<?php if( have_rows('arthrex_fields') ): ?>
						<ul>
						<?php while( have_rows('arthrex_fields') ): the_row(); ?>
							<li><?php the_sub_field('arthrex_field'); ?></li>
						<?php endwhile; ?>							
						</ul>
					<?php endif; ?>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!--fields-->
	<!-- TOP BAR -->
			
			
	<!-- IMAGE GRID -->
		<div id="img-grid" class="text-center">
			<div class="container">
				<div class="row text-white">
					<div class="col-lg-12">
						<?php if( have_rows('image_grid') ): ?>
							<div class="row">
								<?php while( have_rows('image_grid') ): the_row(); ?>
									<div class="col-md-4 ">
										<div class="card card-inverse">
										  <img class="card-img" src="<?php echo the_sub_field('product_image'); ?>" alt="Card image">
										  <div class="card-img-overlay">
										    <h4 class="card-title"><?php the_sub_field('image_title'); ?></h4>
										    <a class="card-text" href="<?php echo the_sub_field('link_1_link'); ?>" target="_blank" ><small class="text-white"><?php the_sub_field('link_1_title'); ?></small></a>
										    <br>
										    <a class="card-text" href="<?php echo the_sub_field('link_1_link'); ?>" target="_blank" ><small class="text-white"><?php the_sub_field('link_2_title'); ?></small></a>
										  </div><!-- card-img-overlay -->
										</div> <!-- card -->
									</div><!-- col -->
								<?php endwhile; ?>
							</div><!-- row -->
						<?php endif; ?>
					</div><!-- col -->
				</div><!-- row -->
			</div> <!--container -->
		</div>	<!--img-grid-->		
	<!-- IMAGE GRID -->		


	<!-- BOTTOM BAR -->
		<div id="btm-bar" class="text-center" style="background-image: url(<?php echo the_field('bottom_banner'); ?>); background-size: cover;">
			<div class="container">
				<div class="row text-white">
					<div class="col-lg-12">
						<h3 class="text-white"><?php the_field('bottom_banner_title'); ?></h3>
						<?php the_field('bottom_banner_description'); ?>
						<a href="<?php echo the_field('bottom_banner_button_link'); ?>"><input type="button" value="<?php echo the_field('bottom_banner_button_text'); ?>" ></a>
					</div><!-- col -->
				</div><!-- row -->
			</div> <!--container -->
		</div>	<!--btm-bar-->		
	<!-- BOTTOM BAR-->	
<?php endif ;?>


<?php if (is_page('arthrex')) : ?>
	<div id="abt-banner" class="text-center" style="background-image: url(<?php echo the_field('abt_bottom_banner_image'); ?>); background-size: cover;">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-12">
					<img src="<?php echo the_field('bottom_banner_logo'); ?>" >
					<h3 class="text-white"><?php the_field('bottom_banner_subhead'); ?></h3>
					<?php the_field('abt_bottom_banner_description'); ?>
					<a href="<?php echo the_field('abt_bottom_banner_button_link'); ?>"><input type="button" value="<?php echo the_field('abt_bottom_banner_button_text'); ?>" ></a>
				</div><!- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- abt-banner -->	
<?php endif; ?>




<?php if (is_page('education')) : ?>
	<div id="labs" class="">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-12">
					text
				</div><!- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- labs -->	
<?php endif; ?>




<?php if (is_page('medinc')) : ?>
	<div id="abt-banner" class="text-center" style="background-image: url(<?php echo the_field('abt_bottom_banner_image'); ?>); background-size: cover;">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-12">
					<img src="<?php echo the_field('bottom_banner_logo'); ?>" >
					<h3 class="text-white"><?php the_field('bottom_banner_subhead'); ?></h3>
					<?php the_field('abt_bottom_banner_description'); ?>
					<a href="<?php echo the_field('abt_bottom_banner_button_link'); ?>"><input type="button" value="<?php echo the_field('abt_bottom_banner_button_text'); ?>" ></a>
				</div><!- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- abt-banner -->	
<?php endif; ?>

<?php if (is_page('careers')) : ?>

	<div id="careers-banner" class="" style="background-image: url(<?php echo the_field('careers_bottom_banner_image'); ?>); background-size: cover;">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-12">
					<h3 class="text-white"><?php the_field('careers_bottom_banner_subhead'); ?></h3>
					<?php the_field('careers_bottom_banner_description'); ?>					
				</div><!- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- careers-banner -->		
	
	<div id="disclaimer" class="">
		<div class="container">			
			<div class="row d-flex align-items-center">
				<div class="col-lg-8">
					<em><?php the_field('careers_disclaimer'); ?></em>
				</div><!- col -->
				
				<?php if( have_rows('bottom_banner_awards') ): ?>
					<?php while( have_rows('bottom_banner_awards') ): the_row(); ?>
						<div class="col-lg-2 text-center">
							<img src="<?php echo the_sub_field('award_image'); ?>">
						</div><!- col -->
					<?php endwhile; ?>	
				<?php endif; ?>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- disclaimer-awards-->
<?php endif; ?>




<footer id="ftr" class="content-info">
  <div class="container">
    <!-- <?php dynamic_sidebar('sidebar-footer'); ?> -->
    <div class="row">
      <div class="col-lg-12 text-center text-white">
        <?php the_field('footer_text', 'option'); ?>
      </div>
    </div>
  </div>


  <script src="<?php echo get_template_directory_uri(); ?>/bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
	  	jQuery(document).ready(function(){
		  jQuery('.bxslider').bxSlider({
			  mode: 'fade',
			  captions: false,
			  auto: true,
			  autoStart: true,
			  controls: false,
			  pause: 5500,
			  speed: 1000,
			  pager: false
			});
		});
	</script>

  <script type="text/javascript">
	jQuery(document).ready(function(){
	  jQuery('.bxslider').bxSlider();
	});
	</script>

</footer>
