<?php
/**
 * PluginFactory class file.
 *
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate;

/**
 * Class PluginFactory
 *
 * Responsible for creating a shared instance of the main Plugin object.
 *
 * @since 0.1.0-dev
 */
class PluginFactory {

	/**
	 * Create and return a shared instance of the Plugin.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return Plugin The shared plugin instance.
	 */
	public static function create(): Plugin {
		/**
		 * The static instance to share, else null.
		 *
		 * @since 0.1.0-dev
		 *
		 * @var null|Plugin $plugin
		 */
		static $plugin = null;

		if ( null !== $plugin ) {
			return $plugin;
		}

		$plugin = new Plugin();

		return $plugin;
	}
}
