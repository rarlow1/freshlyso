<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Catch_Foodmania
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JP6CL64E1V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JP6CL64E1V');
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' );  ?>
	
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'catch-foodmania' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-header-main">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

				<div class="nav-search-wrap">

					<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>

				</div>

			</div> <!-- .site-header-main -->
		</header><!-- #masthead -->

		<div class="below-site-header">

			<div class="site-overlay"><span class="screen-reader-text"><?php esc_html_e( 'Site Overlay', 'catch-foodmania' ); ?></span></div>

			<?php catch_foodmania_sections(); ?>

			<div id="content" class="site-content">
				<div class="wrapper">
