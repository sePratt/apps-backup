<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper footer" id="wrapper-footer">

	<div class="container-fluid ">

		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="row align-items-center ">
						<div class="offset-md-1 col-12 col-md-5 col-xl-6">
							<div class="row justify-content-center justify-content-md-start">
							<a class="logo-link" href="http://dawsoncareers.com/">			
							<img alt="logo" class="company-logo img-fluid" src="<?php echo get_bloginfo('template_url') ?>/images/dawson-logo-white.png"/>				
</a>
</div>
						</div>
						<div class="col-md-5 col-xl-4 col-10 offset-1 offset-md-0 ">
							<div class="row align-items-center mission-buttons">
							<img alt="job-placements" class="footer-button img-fluid col-4 " src="<?php echo get_bloginfo('template_url') ?>/images/job-placement.png"/>
							<img alt="management-solutions" class="footer-button img-fluid col-4" src="<?php echo get_bloginfo('template_url') ?>/images/management-solutions.png"/>
							<img alt="community-dev" class="footer-button img-fluid col-4" src="<?php echo get_bloginfo('template_url') ?>/images/community-workforce-dev.png"/>
						</div>
</div>
					</div>
					<div class="row justify-content-center">
						<div class="site-info text-center">
							COPYRIGHT © 2018, DECAPUA ENTERPRISES (DBA DAWSON). ALL RIGHTS RESERVED.	
						</div><!-- .site-info -->
					</div>
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<?php wp_footer(); ?>

</body>

</html>

