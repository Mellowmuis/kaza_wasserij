<?php
/*
Template Name: Content
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
					<div class="u-gridCol4">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
					    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'large' );
					    $image = $image[0]; ?>
					     <img class="img-border" src="<?php echo $image; ?>"  />
					    <?php endif; ?>
					</div>
				</div>
				<?php endwhile; endif; ?>

			</div>
		</div>
	<!--</div>-->
	<div class="gradient">

<?php get_footer(); ?>
