<?php
namespace MailInOne\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;

/**
 * Class ContentController
 * @package MailInOne\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @param LibraryCallContract $libCall
	 * @param Request $request
	 * @return string
	 */
	public function sayHello(
		Twig $twig,
		LibraryCallContract $libCall,
		Request $request
	)
	{

		$packagistResult =
			$libCall->call(
				'MailInOne::guzzle_connector',
				['packagist_query' => $request->get('search')]
			);
		return $twig->render('MailInOne::content.hello', $packagistResult);
	}
}
