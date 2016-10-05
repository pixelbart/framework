<?php
/**
 * Session Class
 *
 * @author  Pixelbart
 */
namespace Helpers;

class Session
{
	protected static $key;
	protected static $name;
	
	/**
	 * Start the sessions
	 */
	public static function start()
	{
		session_start();
	}	
	
	/**
	 * Get Session
	 *
	 * @param string $name
	 * @return string
	 */
	public static function get($name)
	{		
		$result = $_SESSION[$name];		
		return $result;
	}	
	
	/**
	 * Put Session
	 *
	 * @param string $name
	 * @param string $key
	 */
	public static function put($name, $key)
	{
		self::$name = $name;
		self::$key  = $key;
				
		$_SESSION[self::$name] = self::$key;
	}
	
	/**
	 * Destroys all Sessions
	 */
	public static function destroy()
	{
		session_destroy();
		$_SESSION = array();		
	}
	
	/**
	 * Check if Session "token" is set 
	 * If not, go to BASE_URL/login
	 */
	public static function check()
	{
		$base = BASE_URL;
		
		if(!isset($_SESSION['token'])) {
			header("Location: {$base}login");
			exit;			
		}		
	}
}
