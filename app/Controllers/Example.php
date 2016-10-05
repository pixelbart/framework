<?php
/** 
 * Example Controller
 *
 * @author  Pliester & Lang Gbr
 * @version 1.0
 */
namespace App\Controllers;

use App\Core\View;
use App\Core\Controller;

use App\Models\Examples as Examples;

use Helpers\Nanite as Nanite;
use Helpers\FormBuilder as FormBuilder;
use Helpers\Template as Template;

new Example;

class Example extends Controller
{
	
	/**	
	 * Constructor
	 *
	 * @author  Pixelbart
	 * @version 1.0
	 */
	public function __construct()
	{			
		Nanite::get('/', array( $this, 'index' ) );
		Nanite::get('/login', array( $this, 'login' ) );
	}
	
	/**
	 * Index Page (/)
	 *
	 * @author  Pixelbart
	 * @version 1.0
	 */
	public function index()
	{		
		$data['title'] = 'Example';
		
		Template::render('header', $data);	
		View::render('example/index', $data);
		Template::render('footer', $data);
	}
	
	/**
	 * Login Page (/login)
	 *
	 * @author  Pixelbart
	 * @version 1.0
	 */
	public function login()
	{		
		$data['title'] = 'Login';
		
		Template::render('header', $data);	
		View::render('example/login', $data);
		Template::render('footer', $data);
	}
}
