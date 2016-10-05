<?php
/**
 * Model Class
 *
 * @author  Pixeblart
 * @version 0.1
 */
namespace App\Core;

use \mysqli as mysqli;

/**
 * Core Model Class
 */
abstract class Model
{	
	protected $host = DB_HOST;
	protected $name = DB_NAME;
	protected $user = DB_USER;
	protected $pass = DB_PASS;
	protected $char = DB_CHARSET;
	
	protected $db;

	/**
	 * On run make an instance of the PDO class.
	 */
	public function __construct()
	{
		$this->db = $this->connect();
	}
	
	/**
	 * Connect to mysqli
	 */
	public function connect()
	{
		$mysqli = new mysqli($this->host, $this->user, $this->pass, $this->name);
		
		if ($mysqli->db->connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		}
		
		return $mysqli;
	}
}
