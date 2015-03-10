<?php
/*
Template Name: Homepage-test
*/
?>
<?php get_header(); ?>
	
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol12 box-radius">
					<h4>WELKOM BIJ KAZA WASSERIJ & STOMERIJ</h4>
				</div>
			</div>
			<div class="u-gridRow">

		 				<div class="Slider">

							<?php

								$args = array(
									'post_type' => 'slides',
									'posts_per_page'=>999
								);
								$slides = new WP_Query( $args );
								$num = count($slides);
								$counter = 0;
								if( $slides->have_posts() ) {
									while( $slides->have_posts() ) {
										$slides->the_post();
										$counter++;
										?>
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
											  $image_url = $image[0];
										?>
										
										<img class="border-img" src="<?php echo $image_url; ?>" >

										<?php
									}
								}
							?>
						</div>
					
			</div>
		</div>
	<!--</div>-->
	<div class="gradient">
		<div class="u-gridContainer">
			<div class="u-gridRow"> 
				<div class="u-gridCol12 main"> 
					<p>Sinds 1975 is Kaza wasserij & stomerij actief op het gebied van wassen, chemisch reinigen en linnenverhuur. In de laatste jaren hebben wij onze 
						dienstverlening uitgebreid met bedrijfskleding, persoonlijke beveiligingsmiddelen en installaties voor bedrijfshygiëne.
					</p>
				</div>
			</div>
			<div class="u-gridRow">
				<div class="u-gridCol12">
					<div class="box-radius2">
						<h5>DIENSTEN</h5>
						<div class="diensten">
							<a href="/diensten">
								<div class="icon-wrapper">
									<div class="icon">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wasmachine.png"/>
										
									</div>
									<p>PARTICULIEREN</p>
								</div>
							</a>
							<a href="/diensten">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bed.png"/>
									
								</div>
								<p>HOTELS</p>
							</div>
							</a>
							<a href="/diensten">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tafel.png"/>
									
								</div>
								<p>RESTAURANTS</p>
							</div>
							</a>
							<a href="/diensten">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kleding.png"/>
									
								</div>
								<p>BEDRIJFSKLEDING</p>
							</div>
							</a>
							<a href="/diensten">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/verhuur.png"/>
									
								</div>	
								<p>VERHUUR</p>
							</div>
							</a>			
						</div>
					</div>
				</div>
			</div>
				<div class="u-gridRow">

				</div>
		</div>
<?php get_footer(); ?>
