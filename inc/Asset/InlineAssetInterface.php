<?php
/**
 * InlineAssetInterface interface file.
 *
 * @package RichAber\PluginBoilerplate\Asset
 * @since 0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Asset;

use RichAber\PluginBoilerplate\HookableInterface;

/**
 * Interface InlineAssetInterface
 *
 * @since 0.1.0-dev
 */
interface InlineAssetInterface extends HookableInterface {
	/**
	 * Get the handle of the asset to add this inline data to.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_handle(): string;

	/**
	 * Get the inline data to add to the asset.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_data(): string;

	/**
	 * Add the inline data to the registered asset.
	 *
	 * @return void
	 */
	public function add(): void;
}
