<?php

/**
 * Shipping Policy Generator
 *
 * @package     TrustBadgeGenerator
 * @author      Henri Susanto
 * @copyright   2022 Henri Susanto
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Trust Badge Generator
 * Plugin URI:  https://github.com/susantohenri
 * Description: Wordpress plugin for generating trust badge
 * Version:     1.0.0
 * Author:      Henri Susanto
 * Author URI:  https://github.com/susantohenri
 * Text Domain: TrustBadgeGenerator
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_shortcode('trust-badge-generator', function ($atts) {
    $atts = shortcode_atts(['url' => ''], $atts);

    wp_register_style('trust-badge-generator', plugin_dir_url(__FILE__) . 'trust-badge-generator.css?cache-breaker=' . time());
    wp_enqueue_style('trust-badge-generator');

    wp_register_script('trust-badge-generator', plugin_dir_url(__FILE__) . 'trust-badge-generator.js?cache-breaker=' . time());
    wp_enqueue_script('trust-badge-generator');

    return '<div id="trust_badge_generator">
        
    </div>';
});
