<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */
get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="body-content-wrapper wrapper-fluid container-fluid" id="index-wrapper">


<?php get_sidebar( 'application' ); ?>
<?php get_sidebar( 'opportunities' ); ?>  
<?php get_sidebar( 'testimonials' ); ?>
<?php get_sidebar( 'divisions' ); ?>
   
</div>

<?php get_footer(); ?> 



