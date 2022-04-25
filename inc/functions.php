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
