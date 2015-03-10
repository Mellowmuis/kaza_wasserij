<?php
/*
Template Name: Profiel
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
				<div class="u-gridCol12 second-content">
					<div id="map_canvas"></div>
					<div class="u-gridCol12 marg">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
								<div class="Content-entry">
									<div class="Content-text">

										<div class="u-gridRow">		
												
											<div class="adress u-gridCol4">
												<div class="adress-info">
													<b>Kaza Wasserij</b>
													<p>H.J.E. Wenckebachweg 6 v3</p>
													<p>1096 AN Amsterdam</p>
													<p>Email: info@kaza-wasserij.nl</p>
													<p>Tel: 020-6942755</p>
												</div>
						
											</div>					
											<div class="u-gridCol8 contact-border">
												<div class="adress-info"
												<p class="contact-page-p"><b>Heeft u nog vragen? Neem dan hieronder contact met ons op.</b> </p>
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
				</div>
			</div>
		</div>

	<!--</div>-->
	<div class="gradient">

<?php get_footer(); ?>
