<?php

if (!defined('ABSPATH')) {
    exit;
}

class EcoToolsAssets
{

    public static function init()
    {

        add_action(
            'wp_enqueue_scripts',
            [__CLASS__, 'enqueue']
        );

    }

    public static function enqueue()
    {

        wp_enqueue_style(
            'eco-tools-style',
            ECO_TOOLS_URL . 'assets/css/filter.css',
            [],
            ECO_TOOLS_VERSION
        );

        wp_enqueue_script(
            'eco-tools-script',
            ECO_TOOLS_URL . 'assets/js/filter.js',
            ['jquery'],
            ECO_TOOLS_VERSION,
            true
        );

    }

}