<?php
/**
 * ExamplePostType interface file.
 *
 * @package RichAber\PluginBoilerplate\PostType
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\PostType;

use RichAber\PluginBoilerplate\HookableInterface;

/**
 * Interface PostTypeInterface
 *
 * @link  https://developer.wordpress.org/reference/functions/register_post_type/
 *
 * @since 0.1.0-dev
 */
interface PostTypeInterface extends HookableInterface {
	/**
	 * Get the post type key.
	 *
	 * Must not exceed 20 characters and may only contain
	 * lowercase alphanumeric characters, dashes, and underscores.
	 *
	 * @see   sanitize_key().
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_slug(): string;

	/**
	 * Get the array arguments for registering this post type.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return array<mixed>
	 */
	public function get_args(): array;

	/**
	 * Register the post type.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function init(): void;
}
