<?php
/**
 * HookableInterface interface file.
 *
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

namespace RichAber\PluginBoilerplate;

use RichAber\PluginBoilerplateDependencies\TypistTech\WPContainedHook\Hooks\HookInterface;

/**
 * Interface HookableInterface
 *
 * @since 0.1.0-dev
 */
interface HookableInterface {
	/**
	 * Get hooks (Action or Filter) this class fires on.
	 *
	 * @since 0.1.0-dev
	 *
	 * @return HookInterface[]
	 */
	public static function get_hooks(): array;
}
