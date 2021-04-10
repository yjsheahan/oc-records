<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocrecords
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site min-vh-100">
	<header id="masthead" class="site-header flex justify-between items-center w-100">
    <h1 class="ttu text-white mv0 ph3"><a href="<?php echo home_url(); ?>">OrangeCounty<span class="text-orange">Records</span></a></h1>
		<nav id="site-navigation" class="main-navigation pt3 pr3">
      <?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) ); ?>
		</nav><!-- #site-navigation -->
    <div class="pr2">
      <svg fill="#FFFFFF" viewBox="0 0 100 80" width="20" height="20">
          <rect width="100" height="10"></rect>
          <rect y="30" width="100" height="10"></rect>
          <rect y="60" width="100" height="10"></rect>
      </svg>
    </div>
	</header><!-- #masthead -->
