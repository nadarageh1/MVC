<?php
/**
* 
*/
class Controller
{
	
	function __construct()
	{
		$this->view = new View();
	}
	// function to load every model we create 
	// without any dublication 
	// or use big code
	 public function loadModel($name){
		$path = 'models/'.$name.'_model.php';
		if(file_exists($path)){
			require'models/'.$name.'_model.php';
			$modelName =$name.'_Model';
			$this->model= new $modelName();
		}
	}

}

?>