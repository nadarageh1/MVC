<?php

/**
* 
*/
class User extends Controller
{
	
	public function __construct()
	{
		parent::__construct();
		Session::init();
		$logged =Session::get("loggedIn");
        $role   =Session::get("role");
		if($logged == false || $role !="owner"){
			// if login false or $role not equal owner 
			//return to login page
		 Session::destroy();
         header('location:../login');
         exit;
		}
   
		
	}
	// index to default run 
	 public function index(){
    // put all in model in 
    //view to make users show them
        //$this->view->userList not function this is variable
        // like ->with('','') in laravel
    $this->view->userList = $this->model->userList();
      // return view in folder user 
      //file index
      //function that make all website 
      //has the same header footer and design
     $this->view->render('user/index');

    }
    public function create(){
     // store data come from form create user in array
   $data = array();
   $data['name']=$_POST['name'];
   $data['password']=$_POST['password'];
   $data['role']=$_POST['role'];
   // check in model
    $this->model->create($data);
    // to return page user again
    header("location:".URL."user");
    }

    public function edit($id){
   // fetch individual user
        // put data from model about user that id =$id in view edit
     $this->view->edit =$this->model->userSingleList($id);
        //function that make all website 
      //has the same header footer and design
     $this->view->render('user/edit');
}
    public function editSave($id){
     // store data come from form create user in array
         // to save edit
   $data = array();
   $data['id'] =$id;
   $data['name']=$_POST['name'];
   $data['password']=$_POST['password'];
   $data['role']=$_POST['role'];
   // check in model
    $this->model->editSave($data);
    
       
         // to return page user again
         header("location:".URL."user");
    }
      // to delete user
    public function delete($id){
     $this->model->delete($id);
     // to return page user again
     header("location:".URL."user");
    }
  
}

?>