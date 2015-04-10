<?php
/**
 * Bootstrap the API and autoloaders.
 *
 * @author daithi coombes <webeire@gmail.com>
 */
namespace PersonalityInsightsPHP;

/** @var Singleton Config The runtime configuration */
$singleton;


/**
 * Autoloader.
 * Anonymous function.
 * @param string The full classname with namespace.
 */
spl_autoload_register(function($class){

});
require_once('vendor/autoload.php');