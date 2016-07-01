<?php
/**
* 
*/

class User_Model extends Model
{
	
	public function __construct()
	{
	// call function in parent class that is Model
	parent::__construct();
	}
	// list all data about all users
	public function userList()
	{
		$sth =$this->db->prepare("select id,name,role from users");
		$sth->execute();
		return $sth->fetchAll();
    }
    	// list all data about one user
    public function userSingleList($id){
	$sth =$this->db->prepare("select id,name,role from users where id=:id");
	$sth->execute(
        array(
        	'id'=>$id
        	));
		return $sth->fetch();
    }
    public function create($data){
    	// put into users name ,password,role
	    $sth =$this->db->prepare("insert into users
		(name,password,role)values(:name,:password,:role)");
		// define what is :name 
		// and what is :password
	    //what is role
		 $sth->execute(
         array(':name'      => $data['name'],
               ':password'  =>Hash::create("md5",$data['password'],HASH_PASSWORD_KEY),
               ':role'      =>$data['role']
    ));
    }
       public function editSave($data){
    	// put into users name ,password,role
	    $sth =$this->db->prepare("update users
		set name=:name,password=:password,role=:role where id=:id");
		// define what is :name 
		// and what is :password
	    //what is role
		 $sth->execute(
         array(
         	   'id' =>$data['id'],
         	   ':name'      => $data['name'],
               ':password'  =>Hash::create("md5",$data['password'],HASH_PASSWORD_KEY),
               ':role'      =>$data['role']
    ));
    }
    public function delete($id){
    	$sth=$this->db->prepare("delete from users where id=:id");
    	// define what is :id
    	$sth->execute(
    		  array(':id' =>$id  
    		  	));
    }
}
     
?>