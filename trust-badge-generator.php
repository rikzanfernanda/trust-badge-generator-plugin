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

    wp_register_script('trust-badge-generator-image', plugin_dir_url(__FILE__) . 'trust-badge-generator-foto.js?cache-breaker=' . time());
    wp_enqueue_script('trust-badge-generator-image');

    wp_register_script('trust-badge-generator', plugin_dir_url(__FILE__) . 'trust-badge-generator.js?cache-breaker=' . time());
    wp_enqueue_script('trust-badge-generator');

    return "
        <div id='trust_badge_generator'>
            <div class='text-center'>
                <button id='btn-generate' class='bg-primary btn-rounded'>Click Here To Generate A Trust Badge</button>
                <input type='hidden' id='geturl' value='".plugin_dir_url(__FILE__)."'>
            </div>
            <div class='trust_badge_generator-modal hidden'>
                <div class='trust_badge_generator-modal-wrapper'>
                    <div class='header'>
                        <h4>Trust Badge Generator</h4>
                        <button class='close'></button>
                    </div>
                    <div class='body'>
                        <div class='tab-1'>
                            <p class='text-center'>Click and choose a style first:</p>
                            <div class='img-preview text-center'>
                                <div>
                                    <button id='load01pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/01-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load02pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/02-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load03pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/03-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load04pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/04-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load05pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/05-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load06pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/06-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load07pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/07-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load08pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/08-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load09pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/09-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load10pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/10-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load11pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/11-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load12pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/12-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load13pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/13-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load14pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/14-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load15pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/15-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load16pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/16-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load17pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/17-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load18pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/18-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load19pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/19-preview.png' width='350px'></button>
                                </div>
                                <div>
                                    <button id='load20pngfile'><img src='". plugin_dir_url(__FILE__) ."previewimage/20-preview.png' width='350px'></button>
                                </div>
                            </div>
                        </div>
                        <div class='tab-2 hidden'>
                            <p class='text-center'>Click and choose a style first:</p>
                            <input type='color' id='colorpick'>
                            <div class='img-container'>
                                <img id='foto-image' class='image' width='600px' />
                            </div>
                        </div>
                        <div class='btn-wrapper hidden'>
                            <button id='btnPrev' class='btn-rounded'>Previous</button>
                            <button id='btnDownload' class='hidden bg-primary btn-rounded'>Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
});
