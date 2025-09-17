<?php
/**
 * Plugin Name: Woo Multilang Multicurrency
 * Description: Adds multilingual product support and multicurrency switching in WooCommerce.
 * Version: 1.0.0
 * Author: Niraliben Jani
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-currency-switcher.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-language-handler.php';

class WooMultilangMulticurrency {
    public function __construct() {
        new WC_Currency_Switcher();
        new WC_Language_Handler();
    }
}

new WooMultilangMulticurrency();
