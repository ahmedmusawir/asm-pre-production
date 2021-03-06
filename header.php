<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyberize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--=====================================
=            FONTAWESOME PRO            =
======================================-->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/2018/02/Moose-32.png"> -->
    <!-- <script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script> -->


    <!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

    <!--====  Base Tag  ====-->

    <?php the_field('before_ending_head_tag_default', 'option'); ?>

    <!--====  Custom Conversion Tag  ====-->


    <?php the_field('before_ending_head_tag'); ?>

    <!--====  End of CUSTOM ANALYTICS TAGS  ====-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

    <!--====  Base Tag  ====-->

    <?php the_field('after_top_body_tag_default', 'option'); ?>

    <!--====  Custom Conversion Tag  ====-->

    <?php the_field('after_top_body_tag'); ?>

    <!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

    <!--======================================================
=           ASM - GLOBAL DROPDOWN MENU            =
=======================================================-->

    <?php get_template_part( '_cyberize-modules/asm-dropdown-nav' ); ?>

    <!--====  End of ASM - GLOBAL DROPDOWN MENU  ====-->

    <div id="page" class="site">

        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'cyberize' ); ?></a>

        <style>
        /* #header-asm {
      max-width: 1920px !important;
      margin: auto !important;
      border: 0.3rem dotted red;
    } */
        </style>

        <header id="header-asm" class="site-header">

            <!-- Moose_Framework_2 NAVIGATION GOES HERE -->

            <section class="main-navigation">
                <div id="main-navbar-asm" class="main-navbar navbar fixed-top">
                    <a class="navbar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src=" <?php the_field('site_logo', 'option') ?>" class="img-fluid" alt="">
                    </a>
                    <!-- THE HEADER SEACH FORM  -->
                    <div id="header-search" class="mr-auto">
                        <?php //get_search_form(); ?>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <label>
                                <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                                <input type="search" class="search-field"
                                    placeholder="&#xf002; &nbsp; Search athletes or universities"
                                    value="<?php echo get_search_query() ?>" name="s"
                                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            </label>
                            <input type="submit" class="search-submit"
                                value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                        </form>
                    </div>
                    <!-- THE HEADER SEACH FORM END -->

                    <!-- THE HEADER MENU   -->
                    <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1', // Defined when registering the menu
						'menu_id'        => 'primary-menu',
						'container'			 => 'div',
						'container_class' => 'main-nav pr-4',  	
						'menu_class'     => 'mx-auto', //CENTER ALIGN
						// 'menu_class'     => 'ml-auto', //RIGHT ALIGN
						// 'menu_class'     => 'mr-auto', //LEFT ALIGN
					) );
				 ?>
                </div>

            </section> <!-- main-navigation Ends -->

            <!-- Moose_Framework_2 NAVIGATION ENDS HERE -->

        </header><!-- #masthead -->

        <div id="content" class="site-content">