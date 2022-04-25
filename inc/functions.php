<?php
/**
 * Plugin functions file.
 *
 * This is intended to be used for "critical" functions used in the plugin bootstrap.
 *
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate;

/**
 * Internationalization (I18n).
 *
 * Sets up internationalization/localization functionality.
 *
 * @since 0.1.0-dev
 *
 * @return void
 */
function load_textdomain(): void {
	load_plugin_textdomain(
		'plugin-boilerplate',
		false,
		dirname(
			plugin_basename(
				PLUGINBOILERPLATE_FILE
			)
		) . '/languages/'
	);
}

/**
 * Load inc and dependency classmaps.
 *
 * @since 0.1.0-dev
 *
 * @return void
 */
function autoload_classes(): void {
	$class_map = array_merge(
		include PLUGINBOILERPLATE_DIR . 'inc/vendor/composer/autoload_classmap.php',
		include PLUGINBOILERPLATE_DIR . 'dependencies/vendor/composer/autoload_classmap.php'
	);

	spl_autoload_register(
		function ( $class ) use ( $class_map ) {
			if (
				isset( $class_map[ $class ] )
				&& __NAMESPACE__ === substr( $class, 0, mb_strlen( __NAMESPACE__, 'UTF-8' ) )
			) {
				require_once $class_map[ $class ];
			}
		},
		true,
		true
	);
}
