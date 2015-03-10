<?php
/*
Template Name: landingspage
*/
?>
<?php get_header(); ?>
	
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol12 box-radius">
					<h4><?php the_title(); ?></h4>
				</div>
			</div>
			<div class="u-gridRow">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="u-gridCol12 main-content">
					<div class="u-gridCol8">
							<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
								<div> 
									<?php the_content(); ?>
									<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
								</div>
							</article>
					</div>
					<div class="u-gridCol4 img-border-back">
						
					</div>
				</div>
				<?php endwhile; endif; ?>

			</div>
		</div>
	<!--</div>-->
	<div class="gradient">

<?php get_footer(); ?>
