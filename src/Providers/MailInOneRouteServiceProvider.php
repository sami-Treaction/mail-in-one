<?php
namespace MailInOne\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class MailInOneRouteServiceProvider
 * @package MailInOne\Providers
 */
class MailInOneRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'MailInOne\Controllers\ContentController@sayHello');
	}

}
