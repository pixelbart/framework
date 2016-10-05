<?php
/**
 * Controller
 *
 * @author  Pixeblart
 * @version 1.0
 */
namespace App\Core;

use App\Core\View;

/**
 * Core controller, all other controllers extend this base controller.
 */
abstract class Controller
{	
	/**
	 * View variable to use the view class.
	 */
	public $view;

	/**
	 * On run make an instance of the config class and view class.
	 */
	public function __construct()
	{
		$this->view = new View();
	}
}
