<?php
/**
 * Container Factory class file.
 *
 * @package RichAber\PluginBoilerplate\Container
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Container;

use RichAber\PluginBoilerplate\Plugin;
use RichAber\PluginBoilerplateDependencies\DI\Container;
use RichAber\PluginBoilerplateDependencies\DI\ContainerBuilder;
use RichAber\PluginBoilerplateDependencies\Psr\Container\ContainerInterface;

/**
 * Class Factory
 *
 * Responsible for creating a shared instance of the main Container object.
 *
 * @since 0.1.0-dev
 */
class ContainerFactory {

	/**
	 * Create and return a shared instance of the ContainerInterface.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return ContainerInterface The shared ContainerInterface instance.
	 */
	public static function create(): ContainerInterface {
		/**
		 * The static instance to share, else null.
		 *
		 * @since 0.1.0-dev
		 *
		 * @var null|ContainerInterface $container
		 */
		static $container = null;

		if ( null !== $container ) {
			return $container;
		}

		$builder = new ContainerBuilder();
		$builder->useAutowiring( true );
		$builder->useAnnotations( false );
		$builder->ignorePhpDocErrors( true );

		// Read the Config from this directory.
		$builder->addDefinitions(
			include PLUGINBOILERPLATE_DIR . 'inc/Config/Container.php'
		);

		$container = $builder->build();

		return $container;
	}
}
