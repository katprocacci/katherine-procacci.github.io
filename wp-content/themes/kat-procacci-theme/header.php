<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name='viewport' content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
       <header class="site-header">
            <div class="container split">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/images/logo_test.png') ?>" alt="Katherine Procacci" class="logo-image float-left"></a> 
                <a href="<?php echo esc_url(site_url('/search')); ?>" class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
                <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
                <div class="site-header__menu group">
                    <nav class="main-navigation">
                        <div class="navbar">
                            <div class="dropdown">
                                <button class="dropbtn">
                                    <li <?php if(is_page('about-me') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-me') ?>">About Me</a></li>
                                </button>
                                <div class="dropdown-content">
                                    <a href="<?php echo site_url('/work-experience') ?>">Work Experience</a>
                                    <a href="<?php echo site_url('/education') ?>">Education</a>
                                    <a href="<?php echo site_url('/hobbies--awards') ?>">Hobbies and Awards</a>
                                </div>
                            </div>
                            <li <?php if(is_page('contact-me')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/contact-me') ?>">Contact Me</a></li>
                            <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/photography') ?>">My Photography</a></li>
                        </div>
                    </nav>

                    <div class="site-header__util">
                        <?php if(is_user_logged_in()) { ?>
                            <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small  btn--dark-orange float-left btn--with-photo">
                                <span class = "site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                                <span class = "btn__text">Log Out</span>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                            <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
                        <?php } ?>
                        <!--<a href="<?php echo esc_url(site_url('/wp-content/themes/katherine-procacci-theme/search')); ?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>-->
                    </div>
                </div>
            </div>
            
       </header>