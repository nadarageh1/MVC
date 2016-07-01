<?php

/**
* 
*/
class Login extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	// index to default run 
	 public function index(){
	 	echo  Hash::create("md5","nada1234",HASH_PASSWORD_KEY);
     $this->view->render('login/index');

    }
    // function call it when submit form 
    public function run(){
    	$this->model->run();
    }
}

?>