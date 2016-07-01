<?php
/**
* 
*/
class Help extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
   // index to default run 
	public function index(){
	  $this->view->render("help/index");

	}
	public function other($org =false){
		
		require'models/help_model.php';
		$model= new Help_Model();
		$this->view->blah=$model->blah();
	}

}


?>