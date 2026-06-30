<?php

if (!defined('ABSPATH')) {
    exit;
}

class Eco_Filter_Loader
{
    public static function init()
    {
        self::includes();
        self::boot();
    }

    private static function includes()
    {
        require_once ECO_FILTER_PATH . 'includes/class-config.php';

        require_once ECO_FILTER_PATH . 'includes/class-module.php';

        require_once ECO_FILTER_PATH . 'includes/class-assets.php';

        require_once ECO_FILTER_PATH . 'includes/class-render.php';

        require_once ECO_FILTER_PATH . 'includes/class-shortcode.php';

        require_once ECO_FILTER_PATH . 'includes/class-admin.php';
    }

    private static function boot()
    {
        Eco_Filter_Assets::init();

        Eco_Filter_Shortcode::init();

        Eco_Filter_Admin::init();
    }
}