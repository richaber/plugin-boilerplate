<?php
/**
 * The plugin bootstrap file.
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Boilerplate
 * Plugin URI:        PLUGIN SITE HERE
 * Description:       PLUGIN DESCRIPTION HERE
 * Author:            YOUR NAME HERE
 * Author URI:        YOUR SITE HERE
 * Version:           0.1.0-dev
 * Requires at least: 5.7
 * Requires PHP:      7.4
 * License:           GNU General Public License v2.0
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-boilerplate
 * Domain Path:       /languages
 *
 * Core reads the first 8 KB of the bootstrap file
 * to get the "plugin headers."
 *
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate;

/**
 * Ensure this plugin bootstrap file is only run by WordPress
 * and cannot be executed through direct access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * The full path of this bootstrap file.
 *
 * Multiple WordPress plugin functions require the path to the bootstrap  __FILE__.
 *
 * @since 0.1.0-dev
 */
define(
	'PLUGINBOILERPLATE_FILE',
	__FILE__
);

/**
 * The full path to this bootstrap file's directory with trailing slash.
 *
 * Eases the inclusion of other files that ship with this plugin.
 *
 * @since 0.1.0-dev
 */
define(
	'PLUGINBOILERPLATE_DIR',
	__DIR__ . '/'
);

/**
 * The URL to this plugin directory with trailing slash.
 *
 * Eases linking to assets that ship with this plugin.
 *
 * @since 0.1.0-dev
 */
define(
	'PLUGINBOILERPLATE_PLUGIN_URL',
	plugins_url(
		'/',
		PLUGINBOILERPLATE_FILE
	)
);

/**
 * Require critical path functions.
 */
require_once PLUGINBOILERPLATE_DIR . 'inc/functions.php';

add_action(
	'init',
	__NAMESPACE__ . '\load_textdomain'
);

autoload_classes();

autoload_files();

/**
 * Create/get sharable instance of the Plugin.
 *
 * We are namespaced in this bootstrap, so global prefixing not required.
 *
 * @var Plugin
 */
$pluginboilerplate_plugin = PluginFactory::create();

/**
 * Register activation routines.
 */
register_activation_hook(
	PLUGINBOILERPLATE_FILE,
	function () use ( $pluginboilerplate_plugin ) {
		$pluginboilerplate_plugin->activate();
	}
);

/**
 * Register deactivation routines.
 */
register_deactivation_hook(
	PLUGINBOILERPLATE_FILE,
	function () use ( $pluginboilerplate_plugin ) {
		$pluginboilerplate_plugin->deactivate();
	}
);

/**
 * Register Plugin hooks with WordPress.
 */
$pluginboilerplate_plugin->run();
