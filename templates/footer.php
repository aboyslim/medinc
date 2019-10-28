<?php if(!is_search() )  : ?>
	<?php if( have_rows('home_page_boxes') ): ?>
		<div class="container">
			<div class="row my-4 text-white">
				<!-- HOME BOX -->
				<?php while( have_rows('home_page_boxes') ): the_row(); ?>
					<div class="col-md-12 col-lg-4">
						<div class=" row no-gutters text-center home-box  d-flex align-items-center justify-content-center">
							<!-- ICON -->
							<div class="col-lg-12">
							<img src="<?php echo the_sub_field('box_icon'); ?>">
							</div>

							<div class="col-lg-12">
							<!-- SUBHEAD -->
							<h3 class="text-white"><?php the_sub_field('box_subhead'); ?></h3>
							</div>

							<div class="col-lg-12">
							<!-- DESCRIPTION -->
							<?php the_sub_field('box_description'); ?>
							</div>

							<div class="col-lg-12">
							<!-- BUTTON TEXT & LINK -->
							<a href="<?php echo the_sub_field('box_button_link'); ?>"><input type="button" value="<?php echo the_sub_field('box_button_text'); ?>" ></a>
							</div>
						</div><!-- home-box -->
					</div><!-- col -->
				<?php endwhile; ?>
			</div><!-- row -->
		</div><!-- container -->
	<?php endif; ?>


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
		<div id="img-grid" class="">
			<div class="container">
				<div class="row text-white">
					<div class="col-lg-12">
						<?php if( have_rows('image_grid') ): ?>
							<div class="row">
								<?php while( have_rows('image_grid') ): the_row(); ?>
									<div class="col-md-4 ">
										<div class="card card-inverse">
										  <img class="card-img" src="<?php echo the_sub_field('product_image'); ?>" alt="Card image">
										  <div class="row no-gutters card-img-overlay pt-5">
											  	<div class="col-lg-12 card-title text-center">
													<h4 class=""><?php the_sub_field('image_title'); ?></h4>
												</div>

										<!-- COUNT NUMBER OF ROWS IN LINKS REPEATER -->
										   <?php if( have_rows('links') ):
											   	$linkscount = 0;
											   	while( have_rows('links') ): the_row();
											   		if(get_sub_field('link')){$linkscount++;}
											   	endwhile;
											   	endif; ?>

											<!-- Display links on condition of 2 or more links -->
											<?php if( have_rows('links') ): ?>
												<?php while( have_rows('links') ): the_row(); ?>
													<?php if( $linkscount > 2 ): ?>
															<div class="col-lg-6 d-flex align-content-center justify-content-center">
														<?php else : ?>
															<div class="col-lg-12 d-flex align-content-center justify-content-center">
														<?php endif; ?>

														<?php
															if(get_sub_field('link_icon') == 'bulb') {$linkicon = 'bulb';}
															elseif(get_sub_field('link_icon') == 'gear') {$linkicon = 'gear';}
															else {$linkicon = '';}
														?>
																<a id="<?php echo $linkicon; ?>" class="card-text d-flex justify-content-center" href="<?php echo the_sub_field('link'); ?>" target="_blank" ><small class="text-white"><?php the_sub_field('link_title'); ?></small></a>
												   			</div>
													<?php endwhile; ?>
										   	<?php endif; ?>
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

<?php endif ;?>


<!-- EDUCATION -->
<?php
	$counter = 0;
	if( have_rows('labs') ):
 ?>
<div id="labs-grid" class="">
	<?php  while( have_rows('labs') ): the_row(); ?>
		<div id="lab-row" class="">
			<div class="container-fluid">
				<div id="lab" class="row text-white">
					<?php if($counter % 2 === 0) : ?>
						<div class="col-lg-6 pt-md-2 pt-lg-5">
							<div class="lab-txt">
								<h4 class=""><?php the_sub_field('lab_title'); ?></h4>
								<?php the_sub_field('lab_text'); ?>
							</div><!-- lab-txt -->
						</div><!-- col -->

						<div id="lab-img" class="col-lg-6" style="background-image: url(<?php echo the_sub_field('lab_image'); ?>); background-size: cover;background-position: center center;">
						</div><!-- col -->

					<?php else: ?>
						<div class="col-lg-6 push-lg-6 pt-md-2 pt-lg-5">
							<div class="lab-txt ">
								<h4 class=""><?php the_sub_field('lab_title'); ?></h4>
								<?php the_sub_field('lab_text'); ?>
							</div><!-- lab-txt -->
						</div><!-- col -->

						<div id="lab-img-even" class="col-lg-6 pull-lg-6" style="background-image: url(<?php echo the_sub_field('lab_image'); ?>); background-size: cover;background-position: center center;">
						</div><!-- col -->
					<?php endif; ?>
				</div><!-- row -->
			</div> <!--container -->
		</div>	<!--labs-row-->
	<?php
		$counter++;
		endwhile; ?>
</div><!-- labs-grid -->
<?php

	endif;
?>



<!-- AWARD LOGOS -->
<?php if( have_rows('award_logos') ): ?>
	<div class="container">
		<div class="row my-4 d-flex justify-content-center">
			<?php while( have_rows('award_logos') ): the_row(); ?>
				<div class="col-lg-2 text-center">
					<img src="<?php echo the_sub_field('award_logo'); ?>">
				</div><!- col -->
			<?php endwhile; ?>
		</div>
	</div>

	<!-- VIDEO -->
	<div id="bg_container">
	  <iframe id="bg" src="<?php echo the_field('page_video_link'); ?>" frameborder="0"></iframe>
	</div>
<?php endif; ?>




<?php if( have_rows('resources') ): ?>
	<div id="res-grid">
		<?php while( have_rows('resources') ): the_row(); ?>
			<div class="res-row">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 pad-sm pb-sm-4 d-flex justify-content-center align-items-center">
							<img src="<?php echo the_sub_field('resource_logo'); ?>">
						</div><!-- col -->

						<div class="col-lg-6 text-sm-center">
							<h4><?php the_sub_field('resource_title'); ?></h4>
							<?php the_sub_field('resource_description'); ?>
							<br>
							<a href="<?php echo the_sub_field('resource_link'); ?>" target="_blank"><input type="button" value="Visit Site" ></a>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!- res-row -->
		<?php endwhile; ?>
	</div>
<?php endif; ?>




<!-- CAREERS PAGE -->
<?php if (is_page('careers')) : ?>
	<!-- TOP BAR -->
	<div  id="jobs-top-bar" class="text-center">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-12">
					<!-- DESCRIPTION -->
					<?php the_field('apply_now_text'); ?>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!--fields-->
	<!-- TOP BAR -->
<?php endif; ?>


<!-- JOBS LIST  -->
<?php if( have_rows('jobs') ): ?>
	<div id="jobs-accrd" class="">
		<div class="container">
			<div class="row">
				<?php while( have_rows('jobs') ): the_row(); ?>
					<div class="col-lg-12 my-3 bord-btm">
						<a class="accrd-toggle" data-toggle="collapse" href="#<?php echo the_sub_field('job_id'); ?>" aria-expanded="false" aria-controls="<?php echo the_sub_field('job_id'); ?>"><h3><img id="arrow" src="<?php echo get_template_directory_uri(); ?>/dist/images/accrd-closed.png">&nbsp;<?php the_sub_field('job_title'); ?></h3></a>

						<div class="collapse" id="<?php echo the_sub_field('job_id'); ?>">
							<div class="card card-block">
								<div id="print-pdf">
									<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
									<div class="pdf-link">
										<a href="<?php echo the_sub_field('job_pdf'); ?>" target="_blank"><img src="<?php echo home_url(); ?>/wp-content/uploads/2017/07/download-icon.png">DOWNLOAD PDF</a>
									</div>
								</div>
									<?php the_sub_field('job_description'); ?>
									<?php if( get_sub_field('internship') == 'no' ): ?>
										<a class="" href="<?php echo the_sub_field('job_application'); ?>" target="_blank"><input class="" type="button" value="Download Application" ></a>
										<a class="" href="<?php echo the_sub_field('job_application_link'); ?>" target="_blank"><input class="" type="button" value="Apply Now" ></a>
									<?php else : ?>
										<a class="" href="<?php echo the_sub_field('job_application_link'); ?>" target="_blank"><input class="" type="button" value="Apply Now" ></a>
									<?php endif; ?>
<!--
									<div class="collapse" id="applyform">
										<?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
									</div>
-->
							</div>
						</div>
					</div><!-- col -->
				<?php endwhile; ?>
			</div><!-- row -->
		</div> <!--container -->
	</div>	<!--jobs-accrd-->
<?php endif; ?>
<!-- JOBS LIST -->
<!-- CAREERS PAGE -->





<!-- CONTACT PAGE -->

<?php if (is_page('contact')) : ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="true"]'); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<!-- LOCATIONS -->
<?php if( have_rows('locations') ): ?>
	<div id="loc-boxes" class="">
		<div class="container">
			<div class="row">
				<?php while( have_rows('locations') ): the_row(); ?>
					<div class="col-lg-12 my-3">
						<div class="row loc-box d-flex align-items-center justify-content-center">
							<div class="col-lg-8 map-box">
								<?php the_sub_field('office_map'); ?>
							</div><!-- col -->

							<div class="col-lg-4 loc-txt">
								<h4><?php the_sub_field('office'); ?></h4><br />
								<?php the_sub_field('office_address'); ?><br>
								<?php the_sub_field('office_city_state_zip'); ?><br>
								<a href="mailto:<?php echo the_sub_field('office_email'); ?>"><?php the_sub_field('office_email'); ?></a><br>
								Phone: <a href="tel:1-<?php the_sub_field('office_phone'); ?>"><?php the_sub_field('office_phone'); ?></a><br>
								Fax: <?php the_sub_field('office_fax'); ?>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- col -->
				<?php endwhile; ?>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- loc-boxes -->
<?php endif; ?>
<!-- LOCATIONS -->
<!-- CONTACT PAGE -->

<?php endif; ?><!-- IF NOT SEARCH PAGE -->

<!-- TEAM GALLERY -->
<?php if( get_field('gallery_shortcode') ): ?>
<div class=" bg-gry">
	<h3 class="text-center text-uppercase pt-4"><?php the_field('gallery_header'); ?></h3>
	<div class="container">
		<div class="col-lg-12 mt-2 py-4">
				<?php echo do_shortcode(get_field('gallery_shortcode')); ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if ( is_page_template( 'template-custom.php' ) ) : ?>

	<?php if(get_field('bottom_banner_image') || get_field('bottom_banner_logo') || get_field('bottom_banner_text') || get_field('bottom_banner_button_text')) : ?>
		<div id="btm-banner" class="text-center" style="<?php if(get_field('bottom_banner_image')){ ?> background-image: url(<?php echo the_field('bottom_banner_image'); ?>); background-size: cover; <?php } ?>">
				<div class="container">
					<div class="row text-white">
						<div class="col-lg-12">
							<!-- LOGO -->
							<?php if(get_field('bottom_banner_logo')){ ?>
								<img src="<?php echo the_field('bottom_banner_logo'); ?>" >
							<?php } ?>

							<!-- TEXT -->
							<?php if(get_field('bottom_banner_text')){ ?>
								<div class="<?php if(!get_field('bottom_banner_image')){?>text-black<?php } ?>">
									<?php the_field('bottom_banner_text'); ?>
								</div>
							<?php } ?>

							<!-- BUTTON -->
							<?php if(get_field('bottom_banner_button_text')){ ?>
								<a href="<?php echo the_field('bottom_banner_button_link'); ?>"><input type="button" value="<?php echo the_field('bottom_banner_button_text'); ?>" ></a>
							<?php } ?>
						</div><!- col -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- btm-banner -->
	<?php endif; ?>

	<?php if (is_page('careers')) : ?>

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


<?php endif; ?>


<!-- DASHBOARD -->
<?php if ( is_page_template( 'template-dashboard.php' ) ) : ?>
	<div class="bg-gry">
		<div class="container pt-4">
			<?php if ( $post->post_parent == '343' ) : ?>
			  <a class="" href="<?php echo home_url(); ?>/dashboard">&#171;Return to Dashboard</a>
			  <div class="float-right">
					<a class="mx-1" href="<?php echo home_url(); ?>/account">Your Account</a> |
					<a class="mx-1" href="<?php echo home_url(); ?>/logout">Logout</a>
				</div>
			<?php endif; ?>

			<?php if (is_page('dashboard')) : ?>
			  <div class="text-right">
					<a class="mx-1" href="<?php echo home_url(); ?>/account">Your Account</a> |
					<a class="mx-1" href="<?php echo home_url(); ?>/logout">Logout</a>
				</div>
			<?php endif; ?>


			<h1 class="entry-title text-center"><?php the_title(); ?></h1>

			<?php while (have_posts()) : the_post(); ?>
				<?php if(get_the_content()) : ?>
					<div class="row">
						<div class="col-lg-12 py-5">
							 <?php the_content(); ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>


			<?php if (is_page('dashboard')) : ?>
					<div class="row pt-4">
						<div class="col-lg-12">
							<?php if( have_rows('row') ): ?>
								<?php while( have_rows('row') ): the_row(); ?>
									<h2 class="text-uppercase"><?php the_sub_field('row_title'); ?></h2>
									<div class="row br-bl-btm">
										<?php if( have_rows('resources') ): ?>
											<?php while( have_rows('resources') ): the_row(); ?>
												<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 resource">
													<?php if( get_sub_field('resource_link')): ?>
														<?php if( get_sub_field('external_resource_link') == 'yes'): ?>
														<a href="<?php echo the_sub_field('resource_link'); ?>" target="_blank">
														<?php else : ?>
														<a href="<?php echo the_sub_field('resource_link'); ?>">
														<?php endif; ?>
													<?php else : ?>
														<a href="<?php echo the_sub_field('resource_file'); ?>" target="_blank">
													<?php endif; ?>
														<div class="row no-gutters text-center">
															<div class="col-lg-12 dash-icon d-flex align-items-center justify-content-center">
																<img src="<?php echo the_sub_field('resource_icon'); ?>">
															</div>
															<div class="col-lg-12 text-uppercase">
																<p><?php the_sub_field('resource_title'); ?></p>
															</div>
														</div>
													</a>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
			<?php endif; ?>

			<!-- DASHBOARD LAB FORMS  -->
			<?php if( have_rows('lab_dashboard') ): ?>
				<div id="jobs-accrd" class="p-1">
					<div class="container">
						<div class="row">
							<?php while( have_rows('lab_dashboard') ): the_row(); ?>
								<div class="col-lg-12 my-3 bord-btm">
									<?php
										$formid = str_replace(' ', '', get_sub_field('lab_header'));
									?>
									<a class="accrd-toggle" data-toggle="collapse" href="#<?php echo $formid; ?>" aria-expanded="true" aria-controls="<?php echo $formid; ?>"><h3><img id="arrow" src="<?php echo get_template_directory_uri(); ?>/dist/images/accrd-closed.png">&nbsp;<?php the_sub_field('lab_header'); ?></h3></a>
									<?php if( have_rows('lab_form') ): ?>
											<div class="collapse show" id="<?php echo $formid; ?>">
												<div class="card card-block pl-4 pt-1">
													<?php while( have_rows('lab_form') ): the_row(); ?>
														<?php if( get_sub_field('lab_form_link')): ?>
															<?php if( get_sub_field('external_lab_link') == 'yes'): ?>
																<a class="lab-form" href="<?php echo get_sub_field('lab_form_link'); ?>" target="_blank" >
															<?php else : ?>
																<a class="lab-form" href="<?php echo get_sub_field('lab_form_link'); ?>" >
															<?php endif; ?>
														<?php else : ?>
															<a class="lab-form" href="<?php echo get_sub_field('lab_form_file'); ?>" target="_blank" >
														<?php endif; ?>
																<?php the_sub_field('lab_form_title'); ?>
															</a>
													<?php endwhile; ?>
												</div>
											</div>
									<?php endif; ?>
								</div><!-- col -->
							<?php endwhile; ?>
						</div><!-- row -->
					</div> <!--container -->
				</div>	<!--jobs-accrd-->
			<?php endif; ?>
			<!-- DASHBOARD LAB FORMS  -->

			<!-- POLICIES PROCS ACCORDIONS  -->
			<?php if( have_rows('policy_procedure') ): ?>
				<div id="jobs-accrd" class="">
					<div class="container">
						<div class="row">
							<?php while( have_rows('policy_procedure') ): the_row(); ?>
								<div class="col-lg-12 my-3 bord-btm">
									<a class="accrd-toggle" data-toggle="collapse" href="#<?php echo the_sub_field('policyprocedure_id'); ?>" aria-expanded="false" aria-controls="<?php echo the_sub_field('policyprocedure_id'); ?>"><h3><img id="arrow" src="<?php echo get_template_directory_uri(); ?>/dist/images/accrd-closed.png">&nbsp;<?php the_sub_field('pp_title'); ?></h3></a>

									<div class="collapse" id="<?php echo the_sub_field('policyprocedure_id'); ?>">
										<div class="card card-block">

												<?php the_sub_field('pp_description'); ?>

										</div>
									</div>
								</div><!-- col -->
							<?php endwhile; ?>
						</div><!-- row -->
					</div> <!--container -->
				</div>	<!--jobs-accrd-->
			<?php endif; ?>
			<!-- POLICIES PROCS ACCORDIONS  -->

			<!-- NEW HIRE TRAINING -->
			<?php if( have_rows('training_module') ): ?>
				<div id="train-accrd" class="">
					<div class="container">
						<div class="row">
							<?php while( have_rows('training_module') ): the_row(); ?>
								<div class="col-lg-12 my-3 bord-btm">
									<?php
										$modid = str_replace(' ', '', get_sub_field('training_module_title'));
									?>
									<a class="accrd-toggle" data-toggle="collapse" href="#<?php echo $modid; ?>" aria-expanded="false" aria-controls="<?php echo $modid; ?>"><h2 class=""><img id="arrow" src="<?php echo get_template_directory_uri(); ?>/dist/images/accrd-closed.png">&nbsp;<?php the_sub_field('training_module_title'); ?></h2></a>

									<div class="collapse" id="<?php echo $modid; ?>">
										<div class="card card-block">
											<?php if( have_rows('unit') ): ?>
												<div id="train-accrd" class="">
													<div class="container">
														<div class="row">
															<?php while( have_rows('unit') ): the_row(); ?>
																<div class="col-lg-12 my-3">
																	<?php if(get_sub_field('syllabus')) : ?>
																	<a class="accrd-toggle" data-toggle="" href="<?php the_sub_field('syllabus_link'); ?>" aria-expanded="" aria-controls="" target="_blank"><h3 class="pb-4"><img id="arrow" src="<?php echo get_template_directory_uri(); ?>/dist/images/accrd-closed.png">&nbsp;<?php the_sub_field('syllabus'); ?></h3></a>
																	<?php endif; ?>
																	<a class="accrd-toggle" data-toggle="collapse" href="#<?php the_sub_field('unit_id'); ?>" aria-expanded="false" aria-controls="<?php the_sub_field('unit_id'); ?>"><h3><img id="arrow" src="<?php echo get_template_directory_uri(); ?>/dist/images/accrd-closed.png">&nbsp;<?php the_sub_field('unit_title'); ?></h3></a>
																	<div class="collapse" id="<?php the_sub_field('unit_id'); ?>">
																		<div class="card card-block section-links">
																			<?php if( have_rows('unit_section') ): ?>
																				<?php while( have_rows('unit_section') ): the_row(); ?>
																					<h4><?php the_sub_field('section_title'); ?></h4>
																						<?php if( have_rows('section_form') ): ?>
																							<?php while( have_rows('section_form') ): the_row(); ?>
																									<?php if( get_sub_field('section_form_link')): ?>
																										<?php if( get_sub_field('external_form_link') == 'yes'): ?>
																											<a class="lab-form" href="<?php echo get_sub_field('section_form_link'); ?>" target="_blank" >
																										<?php else : ?>
																											<a class="lab-form" href="<?php echo get_sub_field('section_form_link'); ?>" >
																										<?php endif; ?>
																									<?php else : ?>
																										<a class="lab-form" href="<?php echo get_sub_field('section_form_file'); ?>" target="_blank" >
																									<?php endif; ?>
																											<?php the_sub_field('section_form_name'); ?>
																										</a>
																							<?php endwhile; ?>
																						<?php endif; ?>
																				<?php endwhile; ?>
																			<?php endif; ?>
																		</div>
																	</div>
																</div>
															<?php endwhile; ?>
														</div>
													</div>
												</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<!-- NEW HIRE TRAINING -->

			<!-- INSURANCE PACKETS -->
			<?php if( have_rows('insurance_packet') ): ?>
			<div class="row packet">
				<?php while( have_rows('insurance_packet') ): the_row(); ?>
						<div class="col-lg-4  my-5 ">
							<?php if( get_sub_field('packet_link')): ?>
								<?php if( get_sub_field('external_packet_link') == 'yes'): ?>
									<a href="<?php echo get_sub_field('packet_link'); ?>" target="_blank">
								<?php else : ?>
									<a href="<?php echo get_sub_field('packet_link'); ?>" >
								<?php endif; ?>
							<?php else : ?>
								<a href="<?php the_sub_field('packet_file'); ?>" target="_blank">
							<?php endif; ?>
									<?php the_sub_field('packet_title'); ?>
								</a>
						</div>
				<?php endwhile; ?>
					</div>
			<?php endif; ?>
			<!-- INSURANCE PACKETS -->

			<!-- COMPANY CALENDAR -->
			<div class="row py-4">
				<div class="col-lg-12 simp-cal">
					<?php echo do_shortcode(get_field('calendar_shortcode')); ?>
				</div>
			</div>

			<?php if(is_page('register')) : ?>
				<div class="row py-4">
					<div class="col-lg-12">
						<?php echo do_shortcode('[ultimatemember form_id=619]'); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if(is_page('login')) : ?>
				<div class="row py-4">
					<div class="col-lg-12">
						<?php echo do_shortcode('[ultimatemember form_id=620]'); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if(is_page('account')) : ?>
				<div class="row py-4">
					<div class="col-lg-12">
						<?php echo do_shortcode('[ultimatemember_account]'); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if(is_page('user')) : ?>
				<div class="row py-4">
					<div class="col-lg-12">
						<?php echo do_shortcode('[ultimatemember form_id=621]'); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if(is_page('password-reset')) : ?>
				<div class="row py-4">
					<div class="col-lg-12">
						<?php echo do_shortcode('[ultimatemember_password]'); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if(is_page('members')) : ?>
				<div class="row py-4">
					<div class="col-lg-12">
						<?php echo do_shortcode('[ultimatemember form_id=622]'); ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>
<?php endif; ?>

	<!-- PAGE LOCK -->
<!--
	<?php if( get_field('page_lock') == 'yes' ): ?>
		<div class="row">
			<div class="col-lg-12">
				<?php echo do_shortcode(get_field('page_lock')); ?>
			</div>
		</div>
	<?php endif; ?>
-->
	<!-- PAGE LOCK -->




<footer id="ftr" class="content-info">
  <div class="container">
    <div class="row">
      <div class="ftr-txt col-lg-12 text-center text-white">
        <?php the_field('footer_text', 'option'); ?>
      </div>

      <?php if(have_rows('social_media', 'option')) : ?>
      	<div class="ftr-txt col-lg-12 text-center text-white">
        	<?php while( have_rows('social_media', 'option') ): the_row(); ?>
        		<a href="<?php echo get_sub_field('social_media_link'); ?>" alt="<?php echo get_sub_field('social_media_name'); ?>" target="_blank"><img src="<?php echo get_sub_field('social_media_icon'); ?>" width="15" height"15"></a>
	        <?php endwhile; ?>
      	</div>
        <?php endif; ?>
    </div>
  </div>

<script>
	if (JQuery('.accrd-toggle').attr('aria-expanded') === "true") {
		JQuery(document).getElementById("arrow").src="../dist/images/accrd-closed.png";
  }

</script>


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
