<?php

/**
* 
*/
class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	
	}
		// index to default run 
		public function index(){
		$this->view->render('index/index');
     }
       public function details(){
       		$this->view->render('index/index');

       }
	

}

?>