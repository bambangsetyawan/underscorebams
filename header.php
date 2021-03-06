<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscorebams
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109427552-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109427552-1');
    </script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#content"><?php esc_html_e( 'Skip to content', 'underscorebams' ); ?></a>
    <header id="masthead" class="site-header">
        <div class="site-branding">

			<?php
			if ( has_custom_logo() ) :
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   rel="home"> <img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			<?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>

        </div><!-- .site-branding -->
        <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false"></button>
        <button class="second-nav-toggle"></button>
        <div class="modal">
        </div>
        <nav class="main-navigation">
			<?php if ( ! dynamic_sidebar( 'widget-main-nav' ) ) : ?>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu'
				) );
				?>
			<?php endif; // end widget-main-nav ?>
        </nav><!-- .site-nav -->
        <div class="second-nav">
			<?php dynamic_sidebar( 'widget-second-nav' ); ?>
        </div>
    </header><!-- #masthead -->


	<?php if ( is_front_page() ): ?>
        <div class="hero">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>"
                 height="<?php echo get_custom_header()->height; ?>"
                 alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </div>
	<?php else : ?>
<!--        <div id="banner" style="height: 20px;">-->
<!---->
<!--        </div>-->
		<?php
	endif; ?>


    <div class="site-content">

