<?php
/*
Template Name: Onzeapp
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
				<div class="u-gridCol12 main-content padding-top">
					<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
						<?php // the_content(); ?>
						<b>Bekijk nu ook de informatie van ons bedrijf vanuit de app!</b><br><br> De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

						Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 
						<br><br>
						<a href="https://play.google.com/store/apps/details?id=com.wkazawasserij">Download de app hier</a><br>
						<div><a href="https://play.google.com/store/apps/details?id=com.wkazawasserij"><img class="playstore" src="<?php echo get_stylesheet_directory_uri(); ?>/img/playstore.png" /></a></div>

						<div><img class="qr" src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr-code.png"></div>

						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</article>
					<div class="u-gridCol4">
						<img class="iphone" src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png">
					</div>
				</div>


			</div>
		</div>
	<!--</div>-->
	<div class="gradient">

<?php get_footer(); ?>
