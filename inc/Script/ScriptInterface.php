<?php
/**
 * ScriptInterface interface file.
 *
 * @package RichAber\PluginBoilerplate\Script
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Script;

use RichAber\PluginBoilerplate\Asset\AssetInterface;

/**
 * Interface ScriptInterface
 *
 * @link  https://developer.wordpress.org/reference/functions/wp_register_script/
 *
 * @since 0.1.0-dev
 */
interface ScriptInterface extends AssetInterface {
	/**
	 * Get whether to enqueue the script in the footer, or in the head.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return bool
	 */
	public function get_in_footer(): bool;
}
