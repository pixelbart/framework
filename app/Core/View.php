<?php
/**
 * View
 *
 * @author  Pixelbart
 * @version 1.0
 */
namespace App\Core;

/**
 * View class to load template and views files.
 */
class View
{	
	/**
     * Include template file.
     */
	public static function render($path, $data = false, $error = false)
	{
		require BASE_DIR . "/app/Views/$path.php";
	}	
}
