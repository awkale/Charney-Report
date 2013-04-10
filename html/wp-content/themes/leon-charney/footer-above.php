<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Main Widget Template
 *
 *
 * @file           prefooter.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<div id="footer-above" class="clearfix">
        <hr>
        <div class="grid col-300 homewidget">
			<?php get_sidebar('footer-left'); ?>
        </div>
        
        <div class="grid col-300 homewidget">
			<?php get_sidebar('footer-center'); ?>
		</div>
        
        <div class="grid col-300 fit homewidget">
			<?php get_sidebar('footer-right'); ?>
        </div>
</div>
