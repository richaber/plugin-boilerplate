<?php
/**
 * StyleInterface interface file.
 *
 * @package RichAber\PluginBoilerplate\Style
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Style;

use RichAber\PluginBoilerplate\Asset\AssetInterface;

/**
 * Interface StyleInterface
 *
 * @link  https://developer.wordpress.org/reference/functions/register_taxonomy/
 *
 * @since 0.1.0-dev
 */
interface StyleInterface extends AssetInterface {
	/**
	 * Get the media for which this stylesheet has been defined.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_media(): string;
}
