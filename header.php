<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
 // defined( 'ABSPATH' ) || exit;

 $container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php // do_action( 'wp_body_open' ); ?>

<section>

        <!-- ******************* The Navbar Area ******************* -->
<!--
            <header class="masthead mb-auto"  style="background: linear-gradient( rgba(12, 84, 136, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url(<?php // echo get_template_directory_uri() ?>/img/capa.jpeg); background-position: center center; background-repeat: no-repeat;background-attachment: fixed; background-size: cover; height:550px; background-color:#464646;">
                 <div class="inner">
-->
               <header class="masthead mb-auto"  style="background: linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url(<?php echo get_template_directory_uri() ?>/img/capa.jpeg); background-position: center center; background-repeat: no-repeat;background-attachment: fixed; background-size: cover; height:550px; background-color:#464646;">
                 <div class="inner">

            <nav class="navbar navbar-expand-md navbar-transparant fixed-top animated fadeIn">

            <?php if ( 'container' == $container ) : ?>
                <div class="container">
            <?php endif; ?>

                        <!-- Your site title as branding in the menu -->
                        <?php if ( ! has_custom_logo() ) { ?>

                            <?php if ( is_front_page() && is_home() ) : ?>

                                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                            <?php else : ?>

                                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                            <?php endif; ?>


                        <?php } else {?>
                        <!--    the_custom_logo(); -->
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/logo_igreja.png" width="5%"/>
                    <?php   } ?><!-- end custom logo -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                        <span class="navbar-toggler-icon">huhu </span>
                    </button>

                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                <?php if ( 'container' == $container ) : ?>
                </div><!-- .container -->
                <?php endif; ?>

                    </nav><!-- .site-navigation -->


               <div class="container" style="padding-top: 160px;">
                         <div class="row justify-content-md-center cor-paragrafo">
                              <div class="col-md-8">
                                        <div class="contents text-center" style="margin-bottom: 35px;">
                                                    <h1 class="wow fadeInDown" style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 50px;
    text-transform: uppercase; letter-spacing: 20px;" data-wow-duration="1000ms" data-wow-delay="0.3s">Seja Bem vindo</h1>
                                     </div>
                                     <div class="text-center"  style="height: 1px; border-top: 1px solid #ebebeb; display: block; position: relative; top: 1px; width: 20%; margin-left: auto;
    margin-right: auto;"></div>
                                       <div class="contents text-center" style="margin-top: 30px;">
                                                   <p class="lead  wow fadeIn cor-paragrafo" data-wow-duration="1000ms" data-wow-delay="400ms">Oremos pela nossa nação</p>
                                       </div>
                              </div>
                        </div>
               </div>

               </header>

    </section>
