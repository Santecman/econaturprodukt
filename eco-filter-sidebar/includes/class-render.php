<?php

if (!defined('ABSPATH')) {
    exit;
}

class Eco_Filter_Render
{

    public static function render(): void
    {
        include ECO_FILTER_PATH . 'templates/sidebar.php';
    }

}