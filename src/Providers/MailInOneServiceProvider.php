<?php
namespace MailInOne\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class MailInOneServiceProvider
 * @package MailInOne\Providers
 */
class MailInOneServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(MailInOneRouteServiceProvider::class);
	}
}
