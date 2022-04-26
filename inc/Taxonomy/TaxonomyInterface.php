<?php
/**
 * TaxonomyInterface interface file.
 *
 * @package RichAber\PluginBoilerplate\Taxonomy
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Taxonomy;

use RichAber\PluginBoilerplate\HookableInterface;

/**
 * Interface TaxonomyInterface
 *
 * @link  https://developer.wordpress.org/reference/functions/register_taxonomy/
 *
 * @since 0.1.0-dev
 */
interface TaxonomyInterface extends HookableInterface {
	/**
	 * Get the taxonomy key.
	 *
	 * Must not exceed 32 characters.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_slug(): string;

	/**
	 * Get the array or query string of arguments for registering this taxonomy.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return array<mixed>
	 */
	public function get_args(): array;

	/**
	 * Register the taxonomy.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function register(): void;

	/**
	 * Get the array of object types with which this taxonomy should be associated.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string[]
	 */
	public function get_object_types(): array;
}
