<?php

if (!defined('ABSPATH')) {
    exit;
}

class Eco_Filter_Config
{

    private static array $defaults = [

        'categories' => true,
        'price'      => false,
        'stock'      => false,
        'counts'     => true,
        'ajax'       => false,

    ];

    public static function get(): array
    {
        return wp_parse_args(
            get_option(
                'eco_filter_sidebar_options',
                []
            ),
            self::$defaults
        );
    }

    public static function enabled(string $module): bool
    {
        $options = self::get();

        return !empty($options[$module]);
    }

}