<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="map_canvas"></div>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Kaza Wasserij</p>
								<p>H.J.E. Wenckebachweg 6 v3</p>
								<p>1096 AN Amsterdam</p>
								<p>Email: info@kaza-wasserij.nl</p>
								<p>Tel: 020-6942755</p>
							</div>
							<div class="u-gridCol8">
								<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
								<?php the_content(); ?>
							
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</div>					

					</div> <!-- /gridRow -->



				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

