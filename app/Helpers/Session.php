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
	
	public static function start()
	{
		session_start();
	}	
	
	public static function get($name)
	{		
		$result = $_SESSION[$name];		
		return $result;
	}	
	
	public static function put($name, $key)
	{
		self::$name = $name;
		self::$key  = $key;
				
		$_SESSION[self::$name] = self::$key;
	}
	
	public static function destroy()
	{
		session_destroy();
		$_SESSION = array();		
	}
	
	public static function check()
	{
		$base = BASE_URL;
		
		if(!isset($_SESSION['token'])) {
			header("Location: {$base}login");
			exit;			
		}		
	}
}
