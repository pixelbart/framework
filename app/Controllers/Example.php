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
use Helpers\Session as Session;
use Helpers\Template as Template;
use Helpers\FormBuilder as FormBuilder;

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
		// Set Title
		$data['title'] = 'Example';
		
		// Set HTML Body Class
		$data['body_class'] = 'class="example"';
		
		// Get nothing from the Examples Model
        	$data['examples'] = Examples::getExamples();
		
		// Include Template File header.php
		Template::render('header', $data);
		
		// Include View example/index.php
		View::render('example/index', $data);
		
		// Include Template File footer.php
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
		// Check if SESSION $name is set
		// If not go to header location $url
		Session::check($name, $url);
		
		// Set Title
		$data['title'] = 'Login';
		
		// Set HTML Body Class
		$data['body_class'] = 'class="login"';
		
		// Include Template File header.php
		Template::render('header', $data);
		
		// Include View example/login.php	
		View::render('example/login', $data);
		
		// Include Template File footer.php
		Template::render('footer', $data);
	}
} // end Class Session
