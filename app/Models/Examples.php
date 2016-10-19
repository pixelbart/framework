<?php
/**
 * Examples Model
 *
 * @author  Pixelbart
 * @version 1.0
 */
namespace App\Models;

use App\Core\Model;

class Examples extends Model
{	
	/**
	 * Constructor
	 * Construct the parent model -> mysqli
	 */
	public function __construct()
	{
		parent::__construct();	
	}
	
	/**
	 * Get something from your mysql table
	 *
	 * @return array/string (array if ok string if not ok)
	 */
	public function get()
	{
		// Query
		$example_query = "SELECT example FROM examples";
		
		// Get results from query
		$results = $this->db->query($example_query);
		
		// If query is ok return results
		if($results == true) {					
			$return = $results->fetch_assoc();
		}
		
		// If not show error 
		else {
			$return = sprintf("Error: %s\n", $this->db->error);
		}
		
		// Close Connection
		$this->db->close();
		
		// Return results or error
		return $return;
	}
} // end Class Examples
