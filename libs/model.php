<?php
/**
* 
*/
class Model
{
	// model => that work with database
	function __construct()
	{
		$this->db = new Database();
	}
}

?>