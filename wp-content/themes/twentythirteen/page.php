<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php 
		switch($_SERVER['REQUEST_URI']) {
			case '/plan/' :
			case '/plan' :
				get_template_part( 'content', 'plan' );
			break;
			case '/prepare/' :
			case '/prepare' :
				get_template_part( 'content', 'prepare' );
			break;
			case '/peel/' :
			case '/peel' :
				get_template_part( 'content', 'peel' );
			break;
			case '/place/' :
			case '/place' :
				get_template_part( 'content', 'place' );
			break;
			case '/contact-us/' :
			case '/contact-us' :
				get_template_part( 'content', 'contactus' );
			break;
			case '/slideshow' :
			case '/slideshow/' :
				get_template_part( 'content', 'slideshow' );
			break;
			case '/about-us' :
			case '/about-us/' :
				get_template_part( 'content', 'about-us' );
			break;
			case '/product-list/' :
			case '/product-list' :
				get_template_part( 'content', 'product-list' );
			break;
			default :
				get_template_part( 'content', 'page' );
			break;
		}
		
		?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>