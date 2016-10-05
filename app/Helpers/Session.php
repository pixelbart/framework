<?php
/**
 * Simple Sessions Class
 *
 * @author  Pixelbart <me@pixelbart.de>
 * @version 1.0
 */
namespace Helpers;

class Session
{
	protected static $key;
	protected static $name;
	
	/**
	 * Start Session
	 */
	public static function start()
	{
		session_start();
	}	
	
	/**
	 * Get Session
	 *
	 * @param string $name
	 * @return string $result
	 */
	public static function get($name)
	{		
		$result = $_SESSION[$name];		
		return $result;
	}	
	
	/**
	 * Set a Session
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
	 * Destroy all Sessions
	 */
	public static function destroy()
	{
		session_destroy();
		$_SESSION = array();		
	}
	
	/**
	 * Check if Session $name exists
	 * If not go to header location $url
	 *
	 * @param string $name
	 * @param string $url
	 */
	public static function check($name, $url)
	{		
		if(!isset($_SESSION[$name])) {
			header("Location: {$url});
			exit;			
		}		
	}
} // end Class Session
