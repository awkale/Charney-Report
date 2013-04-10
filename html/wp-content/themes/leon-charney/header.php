<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=.5, maximum-scale=2.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.5.9');?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

    <?php responsive_header(); // before header hook ?>
    <div id="header">

        <?php if (has_nav_menu('top-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'top-menu',
					'theme_location'  => 'top-menu')
					);
				?>
        <?php } ?>

    <?php responsive_in_header(); // header hook ?>

	<?php if ( get_header_image() != '' ) : ?>

        <div id="logo">
            <a href="<?php echo home_url('/'); ?>"><img src="<?php header_image(); ?>" width="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> width;} else { echo HEADER_IMAGE_WIDTH;} ?>" height="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> height;} else { echo HEADER_IMAGE_HEIGHT;} ?>" alt="<?php bloginfo('name'); ?>" /></a>
        </div><!-- end of #logo -->

    <?php endif; // header image was removed ?>

    <?php if ( !get_header_image() ) : ?>

        <div id="logo">
            <span class="site-name"><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></span>
            <span class="site-description"><?php bloginfo('description'); ?></span>
        </div><!-- end of #logo -->

    <?php endif; // header image was removed (again) ?>
    	<div id="home-quote">
    	<h1>"ENLIGHTENING. ENTERTAINING. INFORMATIVE. INSIGHTFUL"</h1>
    	<h2>A Unique Current Affairs Show</h2>
        </div>
		<div id="search-box">
            <?php get_search_form(); ?>
        </div><!-- end of #search-box -->

        <div id="header-social">
        	         <?php $options = get_option('responsive_theme_options');

            // First let's check if any of this was set

                echo '<ul class="social-icons">';

                if (!empty($options['facebook_uid'])) echo '<li class="facebook-icon"><a target="_blank" href="' . $options['facebook_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/facebook-icon.png" width="24" height="24" alt="Facebook">'
                    .'</a></li>';

                if (!empty($options['twitter_uid'])) echo '<li class="twitter-icon"><a target="_blank" href="' . $options['twitter_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/twitter-icon.png" width="24" height="24" alt="Twitter">'
                    .'</a></li>';

                if (!empty($options['linkedin_uid'])) echo '<li class="linkedin-icon"><a target="_blank" href="' . $options['linkedin_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/linkedin-icon.png" width="24" height="24" alt="LinkedIn">'
                    .'</a></li>';

                if (!empty($options['youtube_uid'])) echo '<li class="youtube-icon"><a target="_blank" href="' . $options['youtube_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/youtube-icon.png" width="24" height="24" alt="YouTube">'
                    .'</a></li>';

                if (!empty($options['stumble_uid'])) echo '<li class="stumble-upon-icon"><a target="_blank" href="' . $options['stumble_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/stumble-upon-icon.png" width="24" height="24" alt="StumbleUpon">'
                    .'</a></li>';

                if (!empty($options['rss_uid'])) echo '<li class="rss-feed-icon"><a target="_blank" href="' . $options['rss_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/rss-feed-icon.png" width="24" height="24" alt="RSS Feed">'
                    .'</a></li>';

                if (!empty($options['google_plus_uid'])) echo '<li class="google-plus-icon"><a target="_blank" href="' . $options['google_plus_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/googleplus-icon.png" width="24" height="24" alt="Google Plus">'
                    .'</a></li>';

                if (!empty($options['instagram_uid'])) echo '<li class="instagram-icon"><a target="_blank" href="' . $options['instagram_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/instagram-icon.png" width="24" height="24" alt="Instagram">'
                    .'</a></li>';

                if (!empty($options['pinterest_uid'])) echo '<li class="pinterest-icon"><a target="_blank" href="' . $options['pinterest_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/pinterest-icon.png" width="24" height="24" alt="Pinterest">'
                    .'</a></li>';

                if (!empty($options['yelp_uid'])) echo '<li class="yelp-icon"><a target="_blank" href="' . $options['yelp_plus_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/yelp-icon.png" width="24" height="24" alt="Yelp!">'
                    .'</a></li>';

                if (!empty($options['vimeo_uid'])) echo '<li class="vimeo-icon"><a target="_blank" href="' . $options['vimeo_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/vimeo-icon.png" width="24" height="24" alt="Vimeo">'
                    .'</a></li>';

                if (!empty($options['foursquare_uid'])) echo '<li class="foursquare-icon"><a target="_blank" href="' . $options['foursquare_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/foursquare-icon.png" width="24" height="24" alt="foursquare">'
                    .'</a></li>';

                echo '</ul><!-- end of .social-icons -->';
         ?>
            </div>

				<?php wp_nav_menu(array(
				    'container'       => '',
					'theme_location'  => 'header-menu')
					);
				?>

            <?php if (has_nav_menu('sub-header-menu', 'responsive')) { ?>
	            <?php wp_nav_menu(array(
				    'container'       => '',
					'menu_class'      => 'sub-header-menu',
					'theme_location'  => 'sub-header-menu')
					);
				?>
            <?php } ?>

    </div><!-- end of #header -->
    <?php responsive_header_end(); // after header hook ?>

	<?php responsive_wrapper(); // before wrapper ?>
    <div id="wrapper" class="clearfix">
    <?php responsive_in_wrapper(); // wrapper hook ?>
