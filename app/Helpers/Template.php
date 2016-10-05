<?php
/**
 * Template Helper Class
 *
 * @author  Pixelbart
 * @version 1.0
 */
namespace Helpers;

class Template
{
	public static $dir = TEMPLATE_DIR;
	
	/** 
	 * Require the Template Dir
	 *
	 * @param string $path
	 * @param array|string|function $data
	 * @param array|string|function $error
	 */
	public static function render($path, $data = false, $error = false)
	{		
		require self::$dir . "$path.php";		
	}	
}
