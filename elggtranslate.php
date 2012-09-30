<?php
/*
Plugin Name: Name Of The Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: GPL2
*/

require_once(plugin_dir_path(__FILE__) . 'route.php');

class ElggTranslatePlugin extends GP_Plugin {
    var $id = 'elggtranslate';

    function __construct() {
        parent::__construct();
        $this->add_action('init');
        $this->add_action('index');
        $this->add_action('gp_app_name');
        $this->add_filter('gp_tools');
        GP::$router->add_tool('elgg-import', array('ElggTranslateRoute', 'elgg_import'));
        GP::$router->add_tool('elgg-export', array('ElggTranslateRoute', 'elgg_export'));
        $bump = '20120930';
        wp_register_script('elggtranslate_tools', plugin_dir_url(__FILE__) . 'js/tools.js', array('common'), $bump);
    }

    function init() {
        if ( $this->get_option('loaded') != 'yes' ) {
            // set up default format to Elgg
            gp_update_option('default_format', 'elgg');
            // flag that plugin has been loaded already
            $this->update_option('loaded', 'yes');
        }
    }

    function index() {
        include plugin_dir_path(__FILE__) . 'templates/index.php';
    }

    function gp_app_name() {
        return 'ElggTranslate';
    }

    function gp_tools($config) {
        // always assume that other plugins might be using the same section, so just add to it
        $config[__('Elgg Tools')][] = array(
            'title' => __('Elgg Import'),
            'description' => __('Create a set of GlotPress projects from an Elgg language pack'),
            'link' => 'elgg-import',
            'admin_only' => true,
        );
        $config[__('Elgg Tools')][] = array(
            'title' => __('Elgg Export'),
            'description' => __('Create a language pack from a set of GlotPress projects for Elgg'),
            'link' => 'elgg-export',
            'admin_only' => false,
        );
        return $config;
    }

}

new ElggTranslatePlugin();