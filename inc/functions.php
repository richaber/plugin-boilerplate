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
	/**
	 * We won't be using the typical Composer generated autoloader,
	 * as we have a build process using PHP-Scoper to prefix vendor packages.
	 */
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

	/**
	 * During development,
	 * define PLUGINBOILERPLATE_DEV as true in your wp-config.php file,
	 * to require the typical Composer generated autoloader,
	 * so we won't have to generate the inc/autoload_classmap every time we add a class.
	 * This autoloader will not be used in the "built" production version.
	 */
	if ( defined( 'PLUGINBOILERPLATE_DEV' ) && PLUGINBOILERPLATE_DEV && is_readable( PLUGINBOILERPLATE_DIR . 'vendor/autoload.php' ) ) {
		require_once PLUGINBOILERPLATE_DIR . 'vendor/autoload.php';
	}
}

/**
 * Load dependency function files.
 *
 * @since 0.1.0-dev
 *
 * @return void
 */
function autoload_files(): void {
	/**
	 * We won't be using the typical Composer generated autoloader,
	 * as we have a build process using PHP-Scoper to prefix vendor packages.
	 * That means we need to load the vendor "function files" ourselves.
	 */
	$files = require PLUGINBOILERPLATE_DIR . 'dependencies/vendor/autoload_files.php';

	foreach ( $files as $file_identifier => $file ) {
		require_once $file;
	}
}
