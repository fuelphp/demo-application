<?php
/**
 * @package    demo-application
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * This is the route configuration for this FuelPHP application.
 * It contains configuration which is for this application only.
 */

/**
 * Variables passed:
 * $router - This applications Router instance
 *
 * You can finish the routing configuration by returning a Fuel v1.x style
 * route array, which will be parsed and converted to v2 route definitions
 */

// homepage route
$router->all('/', 'welcome/index', 'root');

$router->all('test', function() { return \Response::forge('html', \View::forge('welcome/index')); });

// named GET route with a parameter
$router->get('hello/{name}', 'welcome/hello', 'hello');

/*
 * We support old v1.x style routes too!
 */
return array(
	'_404_'   => 'welcome/404',    // The main 404 route
);
