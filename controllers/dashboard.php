<?php

/**
* 
*/
class Dashboard extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		Session::init();
		$logged =Session::get("loggedIn");
		if($logged == false){
			// if login false 
			//return to login page
		 Session::destroy();
         header('location:../login');
         exit;
		}
      
        //put into js array of file
	   $this->view->js = array('dashboard/js/default.js');
		
	}
	// index to default run 
	 public function index(){
     $this->view->render('dashboard/index');

    }
    //to user logout
    public function logout(){
    	Session::destroy();
    	header('location:'.URL.'login');
         exit;
    }
    // to work with ajax
    public function xhrInsert(){
          // model that work with database 
        // so all functions that work with 
        //database must be there
    	 $this->model->xhrInsert();
    	
    
    }
    public function xhrGetInserting(){
        // model that work with database 
        // so all functions that work with 
        //database must be there
    	$this->model->xhrGetInserting();
    }
    public function xhrDeleteListing(){
        // model that work with database 
        // so all functions that work with 
        //database must be there
       $this->model->xhrDeleteListing();
    }
 
}

?>