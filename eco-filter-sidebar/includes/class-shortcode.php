<?php

if (!defined('ABSPATH')) {
    exit;
}

class Eco_Filter_Shortcode
{
    public static function init()
    {
        add_shortcode(
            'eco_filters',
            [__CLASS__, 'render']
        );
    }

    public static function render()
    {
        ob_start();

        Eco_Filter_Render::render();

        return ob_get_clean();
    }
}