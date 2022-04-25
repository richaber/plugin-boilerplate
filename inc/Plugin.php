<?php
/**
 * Plugin class file.
 *
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate;

/**
 * Class Plugin
 *
 * Coordinates the actions and filters that interface with WordPress.
 *
 * @since 0.1.0-dev
 */
class Plugin {
	/**
	 * Plugin constructor.
	 *
	 * @since 0.1.0-dev
	 */
	public function __construct() {}

	/**
	 * Plugin activation routines.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function activate(): void {}

	/**
	 * Plugin deactivation routines.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function deactivate(): void {}

	/**
	 * Run the plugin.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function run(): void {}
}
