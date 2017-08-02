<?php
/*
 * Plugin Name: AS Sitemap
 * Plugin URI: https://github.com/shatimes/as-sitemap
 * Description: Simple html sitemap for your website
 * Version: 0.2.2
 * Author: Sullivan ATATRI
 * Author URI:
 * Text Domain: as-sitemap
 * Domain Path: /languages/
 * Depends: Timber
 * Namespace : AS_Sitemap
 * License: GPL v3
 */
require_once('Sitemap.php');

new AS_Sitemap\Sitemap();

register_activation_hook( __FILE__, array( 'AS_Sitemap\Sitemap', 'on_plugin_activation' ) );
?>
