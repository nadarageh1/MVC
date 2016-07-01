<?php

/**
* 
*/
class Error extends Controller
{
	
	function __construct()
	{
    parent::__construct();
	}
    // index to default run 
	public function index(){
	$this->view->msg="this file dosn't exist";
	$this->view->render("error/index");

	}
}
?>