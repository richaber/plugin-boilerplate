<?php
/**
 * Plugin class file.
 *
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate;

use RichAber\PluginBoilerplate\Container\ContainerFactory;
use RichAber\PluginBoilerplateDependencies\Psr\Container\ContainerInterface;
use RichAber\PluginBoilerplateDependencies\TypistTech\WPContainedHook\Loader;

/**
 * Class Plugin
 *
 * Coordinates the actions and filters that interface with WordPress.
 *
 * @since 0.1.0-dev
 */
class Plugin {

	/**
	 * Dependency Injection Container.
	 *
	 * @since 0.1.0-dev
	 *
	 * @var ContainerInterface
	 */
	protected $container;

	/**
	 * Hook Loader.
	 *
	 * @since 0.1.0-dev
	 *
	 * @var Loader
	 */
	protected $loader;

	/**
	 * Plugin constructor.
	 *
	 * @since 0.1.0-dev
	 */
	public function __construct() {
		$this->container = ContainerFactory::create();
		$this->loader    = new Loader(
			$this->container
		);
	}

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

	/**
	 * Get the plugin's dependency injection container.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return ContainerInterface
	 */
	public function get_container(): ContainerInterface {
		return $this->container;
	}

	/**
	 * Get the plugin's hook loader.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return Loader
	 */
	public function get_loader(): Loader {
		return $this->loader;
	}
}
