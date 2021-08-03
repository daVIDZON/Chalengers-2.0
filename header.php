<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
          <div class="container">
              <div class="first-part-header">
			  <ul class="menu__list">
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Home</a>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Pages</a>
                              <ul class="sub-menu-list">
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Single Post</a>
                                          <ul class="sub-sub-menu-list">
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #1</a>
                                             </li> 
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #2</a>
                                             </li>  
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #3</a>
                                             </li>                                                                                                                                               
                                         </ul>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Single Page</a>
                                          <ul class="sub-sub-menu-list">
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Right Sidebar</a>
                                             </li> 
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Left Sidebar</a>
                                             </li>  
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Fuel Width</a>
                                             </li>                                                                                                                                               
                                         </ul>
                                   </li>

                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Media Archive</a>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Shortcodes</a>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">404 Page</a>
                                   </li>

                              </ul>
                     </li>
                     <li class="header-menu-position">
                      <a href="http://localhost/Challengers/shop/" class="header-menu_text">Shop</a>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Calendar</a>
                     </li>
                </ul>
               </div>
               <div class="header-menu-img-block">
                  <img class="logo_img" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png">
               </div>
               <div class="second-part-header">
                  <ul class="menu__list">
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Home</a>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Pages</a>
                              <ul class="sub-menu-list">
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Single Post</a>
                                          <ul class="sub-sub-menu-list">
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #1</a>
                                             </li> 
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #2</a>
                                             </li>  
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #3</a>
                                             </li>                                                                                                                                               
                                         </ul>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Single Page</a>
                                          <ul class="sub-sub-menu-list">
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Right Sidebar</a>
                                             </li> 
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Left Sidebar</a>
                                             </li>  
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Fuel Width</a>
                                             </li>                                                                                                                                               
                                         </ul>
                                   </li>

                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Media Archive</a>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Shortcodes</a>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">404 Page</a>
                                   </li>

                              </ul>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Table</a>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Calendar</a>
                     </li>
                </ul>
               </div>
            </div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
