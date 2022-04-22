<?php
/**
 * PHP-Scoper config.
 *
 * @package RichAber\PluginBoilerplate
 * @since   0.1.0-dev
 */

use Isolated\Symfony\Component\Finder\Finder;

return [
	'prefix'                  => 'RichAber\\PluginBoilerplateDependencies',
	'finders'                 => [
		Finder::create()
			  ->files()
			  ->ignoreVCS( true )
			  ->notName( '/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.(json|lock)/' )
			  ->exclude(
				  [
					  'doc',
					  'test',
					  'test_old',
					  'tests',
					  'Tests',
					  'vendor-bin',
				  ]
			  )
			  ->path( '#^monolog/#' )
			  ->path( '#^opis/#' )
			  ->path( '#^php-di/#' )
			  ->path( '#^psr/#' )
			  ->path( '#^segmentio/#' )
			  ->path( '#^typisttech/#' )
			  ->path( '#^wptrt/#' )
			  ->in( 'vendor' ),
	],
	// list<string>
	'exclude-files'           => [
		'vendor/composer/InstalledVersions.php',
		'vendor/php-di/php-di/src/Compiler/Template.php',
	],
	'expose-global-constants' => true,
	'expose-global-classes'   => true,
	'expose-global-functions' => true,
];
