<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

    /**
     * WordPress Widgets start right here.
     */
    function responsive_child_widgets_init() {
		
        register_sidebar(array(
            'name' => __('Footer Left', 'responsive'),
            'description' => __('Area D - sidebar-footer-left.php', 'responsive'),
            'id' => 'footer-left',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));	
		
        register_sidebar(array(
            'name' => __('Footer Center', 'responsive'),
            'description' => __('Area E - sidebar-footer-center.php', 'responsive'),
            'id' => 'footer-center',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));	
		
		        register_sidebar(array(
            'name' => __('Footer Right', 'responsive'),
            'description' => __('Area F - sidebar-footer-right.php', 'responsive'),
            'id' => 'footer-right',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));
    }
    
    add_action('widgets_init', 'responsive_child_widgets_init');
?>