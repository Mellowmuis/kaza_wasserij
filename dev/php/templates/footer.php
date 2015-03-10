	<div class="u-gridContainer">
		<div class="logo-onder">
			<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png"></div>
		</div>
	</div>
	</div>
	<div class="Footer">
		<div class="u-gridContainer line">
			<div class="u-gridRow">
				<div class="u-gridCol3">
					<b>ADRES</b>
					<div class="white-line"></div>
					<p class="no-bottom-margin">H.J.E. Wenckebachweg 6 v3 <br> 1096 AN Amsterdam</p>
					<a href="https://www.facebook.com/pages/KAZA-Partners-BV/146694572100135?fref=ts"><img class="fb2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook2.png"></a> <div class="fb"><div class="fb-like" data-href="https://www.facebook.com/pages/KAZA-Partners-BV/146694572100135?fref=ts" data-width="100px" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div></div>
				</div>
				<div class="u-gridCol3">
					<b>CONTACT</b>
					<div class="white-line"></div>
					<p>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone2.png">020 694 27 55<br>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/print.png">020 468 45 82<br>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png">Info@kaza-wasserij.nl
					</p>
										</div>
				<div class="u-gridCol3">
					<b>APP</b>
					<div class="white-line"></div>
					<a href="/app"><img class="padding-top play-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/playstore.png"></a>
				</div>
				
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<div class="Footer-inner u-gridCol3">
					<b>SITEMAP</b>
					<div class="white-line"></div>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>

				</div>
				<?php endif; ?>
			</div>
			

		</div>

	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/accordion.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
