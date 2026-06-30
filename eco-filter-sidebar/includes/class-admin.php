<?php

if (!defined('ABSPATH')) {
    exit;
}

class Eco_Filter_Admin
{

    public static function init()
    {
        add_action('admin_menu', [__CLASS__, 'menu']);
        add_action('admin_init', [__CLASS__, 'register_settings']);
    }

    public static function menu()
    {
        add_submenu_page(
            'woocommerce',
            'Eco Filter Sidebar',
            'Eco Filter Sidebar',
            'manage_options',
            'eco-filter-sidebar',
            [__CLASS__, 'page']
        );
    }

    public static function register_settings()
    {
        register_setting(
            'eco_filter_sidebar',
            'eco_filter_sidebar_options'
        );
    }

    public static function page()
    {
        $options = get_option(
            'eco_filter_sidebar_options',
            []
        );

        include ECO_FILTER_PATH . 'templates/admin-page.php';
    }

}