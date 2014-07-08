<?php
/*
 * This file bootstraps the test environment.
 */
namespace BungaMata\Test;

error_reporting(E_ALL | E_STRICT);

// register silently failing autoloader
spl_autoload_register(function ($class) {
	if(0 === strpos($class, 'BungaMata\Test\\')) {
		$path = __DIR__.'/../../'.strtr($class, '\\', '/').'.php';
		if(is_file($path) && is_readable($path)) {
			/** @noinspection PhpIncludeInspection */
			require_once $path;
		}
	}

	return true;
});

require_once __DIR__."/../../../vendor/autoload.php";
