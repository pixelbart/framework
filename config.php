<?php
/**
 * Simple Config File
 *
 * @author  Pixelbart
 * @version 1.0
 */

//--------------------------------------------------------------------------
// Define your Vars
//--------------------------------------------------------------------------

define('BASE_URL', ''); // URL from your site
define('BASE_LANG', 'de'); // html lang
define('BASE_CHARSET', 'utf-8'); // meta charset
  
define('TEMPLATE_NAME', 'default'); // Template Folder  
define('TEMPLATE_404', '404'); // Template File from Template Dir for 404

//--------------------------------------------------------------------------
// Define Base Dir
//--------------------------------------------------------------------------

define('BASE_DIR', dirname(__FILE__));

//--------------------------------------------------------------------------
// Define Template Dir
//--------------------------------------------------------------------------

define('TEMPLATE_DIR', dirname(__FILE__) . '/app/Templates/' . TEMPLATE_NAME . '/');

//--------------------------------------------------------------------------
// Define Template Folder
//--------------------------------------------------------------------------

define('TEMPLATE_URL', BASE_URL . 'app/Templates/' . TEMPLATE_NAME . '/');
