<?php
/**
 * AssetInterface interface file.
 *
 * @package RichAber\PluginBoilerplate\Asset
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Asset;

use RichAber\PluginBoilerplate\HookableInterface;

/**
 * Interface AssetInterface
 *
 * @since 0.1.0-dev
 */
interface AssetInterface extends HookableInterface {
	/**
	 * Get the handle of the asset.
	 *
	 * Should be unique.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_handle(): string;

	/**
	 * Get the full URL of the asset.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string|bool
	 */
	public function get_src();

	/**
	 * Get an array of registered asset handles this asset depends on.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return mixed[]
	 */
	public function get_deps(): array;

	/**
	 * Get the string specifying asset version number.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string|bool|null
	 */
	public function get_ver();

	/**
	 * Register this asset.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function register(): void;

	/**
	 * Enqueue this asset.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return void
	 */
	public function enqueue(): void;
}
