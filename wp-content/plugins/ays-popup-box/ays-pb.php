<?php
ob_start();
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://ays-pro.com/
 * @since             1.0.0
 * @package           Ays_Pb
 *
 * @wordpress-plugin
 * Plugin Name:       Popup Box
 * Plugin URI:        http://ays-pro.com/wordpress/popup-box
 * Description:       Pop up anything you want! Create informative and promotional popups all in one plugin. Boost your website traffic with eye-catching popups. 
 * Version:           4.2.2
 * Author:            Popup Box Team
 * Author URI:        http://ays-pro.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ays-popup-box
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
    
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AYS_PB_NAME_VERSION', '4.2.2' );
define( 'AYS_PB_NAME', 'ays-pb' );

if( ! defined( 'AYS_PB_ADMIN_URL' ) ) {
    define( 'AYS_PB_ADMIN_URL', plugin_dir_url(__FILE__ ) . 'admin' );
}


if( ! defined( 'AYS_PB_PUBLIC_URL' ) ) {
    define( 'AYS_PB_PUBLIC_URL', plugin_dir_url(__FILE__ ) . 'public' );
}

if( ! defined( 'AYS_PB_BASENAME' ) )
    define( 'AYS_PB_BASENAME', plugin_basename( __FILE__ ) );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ays-pb-activator.php
 */
function activate_ays_pb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ays-pb-activator.php';
	Ays_Pb_Activator::ays_pb_db_check();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ays-pb-deactivator.php
 */
function deactivate_ays_pb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ays-pb-deactivator.php';
	Ays_Pb_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ays_pb' );
register_deactivation_hook( __FILE__, 'deactivate_ays_pb' );

add_action( 'plugins_loaded', 'activate_ays_pb' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ays-pb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ays_pb() {

    add_action( 'admin_notices', 'general_ays_pb_admin_notice' );
	$plugin = new Ays_Pb();
	$plugin->run();

}


function general_ays_pb_admin_notice(){
    if ( isset($_GET['page']) && strpos($_GET['page'], AYS_PB_NAME) !== false ) {
        ?>
             <div class="ays-notice-banner ays-pb-notice">
                <div class="navigation-bar">
                    <div id="navigation-container">
                        <!-- <a class="logo-container" href="https://ays-pro.com/" target="_blank">
                            <img class="logo" src="<?php //echo AYS_PB_ADMIN_URL . '/images/ays_pro.png'; ?>" alt="AYS Pro logo" title="AYS Pro logo"/>
                        </a> -->
                        <div class="logo-container">
                            <a href="https://ays-pro.com/wordpress/popup-box" target="_blank">
                                <img  class="popup-box-logo" src="<?php echo esc_attr(AYS_PB_ADMIN_URL) . '/images/icons/icon-popup-128x128.png'; ?>" alt="Popup Box" title="Popup Box"/>
                            </a>
                            <div>
                                <a href="https://ays-pro.com/wordpress/popup-box?utm_source=dashboard&utm_medium=popup-free&utm_campaign=popup-top-banner-upgrade-button" target="_blank" class="popup-box-upgrade-to-pro">
                                    <img src="<?php echo AYS_PB_ADMIN_URL . '/images/icons/lightning.svg' ?>" class="popup-box-upgrade-green-icon">
                                    <img src="<?php echo AYS_PB_ADMIN_URL . '/images/icons/lightning-white.svg' ?>" class="popup-box-upgrade-white-icon" style="display: none">
                                    <span><?php echo __( "Upgrade", "ays-popup-box" ); ?></span>
                                </a>
                                <div style="font-size: 11px;margin-top: 3px;">(<?php echo __( "One-time payment", "ays-popup-box" ); ?>)</div>
                            </div>
                        </div>
                        <ul id="menu">
                            <li class="modile-ddmenu-lg"><a class="ays-btn" href="https://ays-demo.com/popup-box-plugin-free-demo/" target="_blank">Demo</a></li>
                            <li class="modile-ddmenu-lg"><a class="ays-btn" href="https://wordpress.org/support/plugin/ays-popup-box" target="_blank">Free Support</a></li>
                            <li class="modile-ddmenu-xs make_a_suggestion take_survay"><a class="ays-btn" href="https://ays-demo.com/popup-box-plugin-survey/" target="_blank">Make a Suggestion</a></li>
                            <li class="modile-ddmenu-lg"><a class="ays-btn" href="https://wordpress.org/support/plugin/ays-popup-box" target="_blank">Contact us</a></li>
                            <li class="modile-ddmenu-md">
                                <a class="toggle_ddmenu" href="javascript:void(0);"><img src="<?php echo AYS_PB_ADMIN_URL . "/images/icons/ellipsis.svg" ?>"></a>
                                <ul class="ddmenu" data-expanded="false">
                                    <li><a class="ays-btn" href="https://ays-pro.com/wordpress-popup-box-plugin-user-manual" target="_blank">Documentation</a></li>
                                    <li><a class="ays-btn" href="https://ays-demo.com/popup-box-plugin-free-demo/" target="_blank">Demo</a></li>
                                   <li><a class="ays-btn" href="https://wordpress.org/support/plugin/ays-popup-box" target="_blank">Free Support</a></li>
                                    <li><a class="ays-btn" href="https://wordpress.org/support/plugin/ays-popup-box" target="_blank">Contact us</a></li>
                                </ul>
                            </li>
                            <li class="modile-ddmenu-sm">
                            <a class="toggle_ddmenu" href="javascript:void(0);"><img src="<?php echo AYS_PB_ADMIN_URL . "/images/icons/ellipsis.svg" ?>"></a>
                            <ul class="ddmenu" data-expanded="false">
                                <li><a class="ays-btn" href="https://ays-pro.com/wordpress-popup-box-plugin-user-manual" target="_blank">Documentation</a></li>
                                <li><a class="ays-btn" href="https://ays-demo.com/popup-box-plugin-free-demo/" target="_blank">Demo</a></li>
                                <li><a class="ays-btn" href="https://wordpress.org/support/plugin/ays-popup-box" target="_blank">Free Support</a></li>
                                <li class="make_a_suggestion"><a class="ays-btn" href="https://ays-demo.com/popup-box-plugin-survey/" target="_blank">Make a Suggestion</a></li>
                                <li><a class="ays-btn" href="https://wordpress.org/support/plugin/ays-popup-box" target="_blank">Contact us</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                </div>
             </div>

             <!-- Ask a question box start -->
        <div class="ays_ask_question_content">
            <div class="ays_ask_question_content_inner">
                <a href="https://wordpress.org/support/plugin/ays-popup-box/" class="ays_pb_question_link" target="_blank">
                    <span class="ays-ask-question-content-inner-question-mark-text">?</span>
                    <span class="ays-ask-question-content-inner-hidden-text">Ask a question</span>
                </a>
            </div>
        </div>
        <!-- Ask a question box end -->

        <?php

    }
}

run_ays_pb();