<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php

if ( function_exists('wp_body_open') ) {
	wp_body_open();
}

?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'haaski-minimal' ); ?></a>

<?php do_action( 'savana_lite_mobile_menu' ); ?>

<div id="overlay-body"></div>

<div id="wrapper">

	<header id="header-wrapper" >
  
        <?php if ( savana_lite_setting('haaski_minimal_enable_topbar_section', 'on') == 'on' ) : ?>

            <div id="topbar-section">

                <div class="container">

                        <div class="row">
                            
                            <?php if ( haaski_minimal_show_newsticker_whole_website() && savana_lite_setting('haaski_minimal_enable_news_ticker', 'on') == 'on' ) : ?>

                                <div class="col-md-6 topbar_newsticker">

                                    <?php get_template_part('core/templates/news-ticker'); ?>
                                
                                </div>

                            <?php endif;?>

                            <?php if ( savana_lite_setting('haaski_minimal_enable_topbar_socials', 'on') == 'on' ) : ?>

                                <div class="col-md-6 topbar_socials">

                                    <?php do_action( 'savana_lite_socials' ); ?>

                                </div>

                            <?php endif;?>

                        </div>

                </div>

            </div>

        <?php endif;?>

        <div id="header" class="header-menu">

            <div class="container">

                <div class="row hd-flex">

                    <div id="primary-menu-wrapper" class="hd-flex-col-2 col-md-4" >

                        <button class="menu-toggle" aria-controls="mainmenu" aria-expanded="false" type="button">
                            <span aria-hidden="true"><?php esc_html_e( 'Menu', 'haaski-minimal' ); ?></span>
                            <span class="dashicons" aria-hidden="true"></span>
                        </button>

                        <nav id="primary-menu" class="header-menu" >

                            <?php

                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container' => 'false'
                                ));

                            ?>

                        </nav>

                    </div>

                    <div class="hd-flex-col-10 col-md-4" >

                        <div id="logo">

                            <?php

                                if ( function_exists( 'the_custom_logo' ) && get_theme_mod( 'custom_logo' ) ) {

                                    the_custom_logo();

                                } else {

                                    echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';

                                        echo esc_html(get_bloginfo('name'));
                                        echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';

                                    echo '</a>';

                                }

                            ?>

                        </div>

                    </div>
                        
                    <div id="secondary-menu-wrapper" class="header-menu-col col-md-4" >
                        
                        <?php if ( has_nav_menu( 'secondary-menu' ) ) : ?>
                        
                            <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false" type="button">
                                <span aria-hidden="true"><?php esc_html_e( 'Menu', 'haaski-minimal' ); ?></span>
                                <span class="dashicons" aria-hidden="true"></span>
                            </button>

                            <nav id="secondary-menu" class="header-menu" >

                                <?php

                                    wp_nav_menu( array(
                                        'theme_location' => 'secondary-menu',
                                        'container' => 'false'
                                    ));

                                ?>

                            </nav>
                        
                        <?php endif; ?>
                        
                    </div>

                </div>

                <div class="mobile-navigation-button">

                    <a class="mobile-navigation" href="#modal-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>

                </div>

            </div>

        </div>

	</header>