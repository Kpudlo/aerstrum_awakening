<?php
/**
 * The Aerstrum Awakening Assistant Plugin
 *
 * AAA works for the developers of the game to implement features that were tailored made for Aerstrum Awakening
 *
 * @link              https://aerstrum.com
 * @since             1.0.0
 * @package           aerstrum_awakening
 *
 * @wordpress-plugin
 * Plugin Name:       Aerstrum Awakening Assistant
 * Plugin URI:        https://aerstrum.com
 * Description:       AAA works for the developers of the game to implement features that were tailored made for Aerstrum Awakening
 * Version:           1.0.0
 * Author:            Kevin Pudlo
 * Author URI:        https://kevinpudlo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aerstrum_awakening
 */

 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


/**
 * Main Aerstrum Awakening Class
 * 
 * "How the sun shineth so through the window..."
 * 
 * @since Awakening (1)
 */
final class awakening {

    public static function instance() {
        static $instance = null;

        if(null === $instance) {
            $instance = new awakening;
            $instance->setup_globals();
            $instance->includes();
        }

        return $instance;
    }

    private function setup_globals() {
        
        // Setup some base path and URL information
        $this->file       = __FILE__;
		$this->basename   = apply_filters( 'aaa_plugin_basename', plugin_basename( $this->file ) );
		$this->plugin_dir = apply_filters( 'aaa_plugin_dir_path', plugin_dir_path( $this->file ) );
		$this->plugin_url = apply_filters( 'aaa_plugin_dir_url',  plugin_dir_url ( $this->file ) );

		// Includes
		$this->includes_dir = apply_filters( 'aaa_includes_dir', trailingslashit( $this->plugin_dir . 'includes'  ) );
		$this->includes_url = apply_filters( 'aaa_includes_url', trailingslashit( $this->plugin_url . 'includes'  ) );
    }


    private function includes() {
        require( $this->includes_dir . 'bp-assistant/bp-group-types.php'        );
    }
}

/**
 * The main function responsible for returning the one true awakening Instance
 * to functions everywhere.
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * Example: <?php $awake = awakening(); ?>
 *
 * @return The one true awakening Instance
 */
function awakening() {
	return awakening::instance();
}

awakening();



