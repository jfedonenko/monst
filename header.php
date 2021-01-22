<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monster
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>

    <!-- Fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    <!-- fonts.googl -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:regular,500,600,700,800,900,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
      <!-- slick -->
      <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/sass/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/sass/slick-theme.css">	
    <!-- animate -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory')?>/sass/animate.css">
        <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory')?>/sass/bootstrap-reboot.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory')?>/sass/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory')?>/sass/main.css">
    <?php wp_head(); ?>  
</head>


    <!-- Preloader: Start -->
    <div id="page-preloader">
        <div id="loading">
            <div id="loading--inner" class="loading--inner">
                <div class="loading--box upper loading--box-animate"
                    style="left: 20px; bottom: 0; animation-delay: .7s"></div>
                <div class="loading--box loading--box-animate" style="left: 32px; bottom: 0; animation-delay: .6s">
                </div>
                <div class="loading--box dbl-width loading--box-animate"
                    style="left: 44px; bottom: 0; animation-delay: .5s"></div>
                <div class="loading--box sink loading--box-animate"
                    style="left: 50px; bottom: 11px; animation-delay: .5s"></div>
                <div class="loading--box hang loading--box-animate" style="left: 44px; top: 0; animation-delay: .4s">
                </div>
                <div class="loading--box hang loading--box-animate" style="left: 56px; top: 0; animation-delay: .3s">
                </div>
                <div class="loading--box loading--box-animate" style="left: 68px; bottom: 0; animation-delay: .1s">
                </div>
                <div class="loading--box upper loading--box-animate" style="left: 68px; top: 0; animation-delay: .1s">
                </div>
                <div class="loading--box dbl-height loading--box-animate" style="left: 80px; bottom: 0;"></div>
                <div class="loading--text"><?php the_title(); ?></div>
            </div>
        </div>
    </div>
    <!-- Preloader: Finish -->

	<div class="site-container">
    

<header class="header" id="header">
    <div class="container">
        <div class="row align-items-center">
           <div class="d-none d-lg-block  col-lg-2 "> 
                <div class="header__logo">
                     <a href="<?php get_home_url() ?>" class="header__logo_links" >
                         <img src="<?php bloginfo('template_directory') ?>/img/lodo.png" alt="logo" class="logo_img">
                     </a>
                </div>
             </div>
      
            <div class="col-lg-8 ml-auto">
            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>       
            </div> 
        </div> 
        <div class="row">
                     <div class="col-12">
                     
                     <div class="branch wow fadeInUp" data-wow-duration="2s">
                     <img src="<?php bloginfo('template_directory') ?>/img/decor_top.png" alt="branch" class="branch__img">
                     </div>
                </div>
                </div>
               
            </div>
        </header>





