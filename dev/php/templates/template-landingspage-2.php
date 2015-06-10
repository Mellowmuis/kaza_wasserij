<?php
/*
Template Name: landings-page-2
*/
?>
<?php get_header(); ?>
	
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol12 box-radius">
					
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
										<div class="slide" style="">
											<img class="border-img" src="<?php echo $image_url; ?>" />
											<div class="slider-txt-back"><h4><?php the_title(); ?></h4></div>
										</div>
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
			<div class="u-gridRow land-box"> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="u-gridCol12 main"> 
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="u-gridRow"> 
				<div class="u-gridCol12">
					<div class="box-radius2">
						<h5>DIENSTEN</h5>
						<div class="diensten">
							<a href="/diensten/#particulieren">
								<div class="icon-wrapper">
									<div class="icon"> 
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wasmachine.png"/>
										
									</div>
									<p>PARTICULIEREN</p>
								</div>
							</a>
							<a href="/diensten/#hotels">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bed.png"/>
									
								</div>
								<p>HOTELS</p>
							</div>
							</a>
							<a href="/diensten/#restaurants">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tafel.png"/>
									
								</div>
								<p>RESTAURANTS</p>
							</div>
							</a>
							<a href="/diensten#bedrijfskleding">
							<div class="icon-wrapper">
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kleding.png"/>
									
								</div>
								<p>BEDRIJFSKLEDING</p>
							</div>
							</a>
							<a href="/diensten#verhuur">
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
