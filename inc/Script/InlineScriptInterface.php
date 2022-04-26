<?php
/**
 * InlineScriptInterface interface file.
 *
 * @package RichAber\PluginBoilerplate\Script
 * @since 0.1.0-dev
 */

namespace RichAber\PluginBoilerplate\Script;

use RichAber\PluginBoilerplate\Asset\InlineAssetInterface;

/**
 * Interface InlineScriptInterface
 *
 * @since 0.1.0-dev
 */
interface InlineScriptInterface extends InlineAssetInterface {
	/**
	 * Get whether to add the inline script data before the registered script or after.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return string
	 */
	public function get_position(): string;
}
