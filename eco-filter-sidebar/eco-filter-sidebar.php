<?php
/**
 * Plugin Name: Eco Filter Sidebar
 * Plugin URI: https://econaturprodukt.ru
 * Description: Боковой фильтр WooCommerce для ЭкоНатурПродукт.
 * Version: 0.6.0
 * Author: ЭкоНатурПродукт
 * Requires Plugins: woocommerce
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ECO_FILTER_VERSION', '0.6.0');
define('ECO_FILTER_PATH', plugin_dir_path(__FILE__));
define('ECO_FILTER_URL', plugin_dir_url(__FILE__));

require_once ECO_FILTER_PATH . 'includes/class-loader.php';

Eco_Filter_Loader::init();