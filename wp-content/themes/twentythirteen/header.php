<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/layout.js"></script>
	<link rel="stylesheet" id="style2-os-css-css" href="/css/layout.css" type="text/css" media="all">
</head>

<body>
	<div id='header'>
		<table id='menu'>
			<tr>
				<td id='menu_inspiration_td' rowspan=4><a href='/slideshow'><img src='/images/w-01.png'/></a></td>
				<td id='menu_product_td'><a href='/product-list'><img src='/images/w-02.png'/></a></td>
				<td id='menu_about_us_td' rowspan=2 ><a href='/about-us'><img src='/images/w-04.png'/></a></td>
			</tr>
			<tr>
				<td id='menu_how_to_td' rowspan=2><a href='/#how_to_page'><img src='/images/w-03.png'/></a></td>
			</tr>
			<tr>
				<td id='menu_contact_td'><a href='/contact-us'><img src='/images/w-05.png'/></a></td>
			</tr>
		</table>	
	</div>
	
