<?php
session_start();

use \BLOG\core\Autoloader,
	\BLOG\core\Engine,
	\BLOG\core\Backend;

define('ROOT_PATH', dirname( dirname( __FILE__ ) ) . '/');
define('CORE_PATH', ROOT_PATH . 'core/');
define('TEMP_PATH', ROOT_PATH . 'temp/');
define('SYSTEM_PATH', ROOT_PATH . 'system/');
define('CONFIG_PATH', SYSTEM_PATH . 'configuration/');
define('THEMES_PATH', SYSTEM_PATH . 'themes/');
define('THEMES_REL_PATH', 'system/themes/');
define('PLUGINS_PATH', SYSTEM_PATH . 'plugins/');
define('VIEW_PATH', CORE_PATH . 'View/');

if (file_exists(CONFIG_PATH . 'Install.php')) {
	require_once CONFIG_PATH . 'Install.php';
} else {
	require_once CORE_PATH . 'Autoloader.php';

	$autoloader = new Autoloader('BLOG');
	$autoloader->register();

	$settings = array(
		'theme' => 'default'
	);

	if (defined('BACKEND')) {
		define('BACKEND_CORE_PATH', dirname( dirname( __FILE__ ) ) . '/backend/');
		$backend = new Backend($settings);
	} else {
		$blog = new Engine($settings);
	}
}
