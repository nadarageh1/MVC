<?php
/**
* 
*/
class Login_Model extends Model
{
		function __construct()
		{
			parent::__construct();
		}
           // action that when submit login take it
		public function run(){
           // take id to work with it in all website
			$sth =$this->db->prepare("select id,role from users 
				where name=:name and password=:password;");
			// define what is :name 
			// and what is :password
			$sth->execute(array(
				':name'     =>  $_POST['name'],
                ':password' =>  Hash::create("md5",$_POST['password'],HASH_PASSWORD_KEY)
			 ));
			$data =$sth->fetch();
          // decide how meny row in this app
			$count = $sth->rowCount();
			// count > 0 
			//that mean there are users in this app
			if($count > 0){
		    Session::init();
		    // role to put to every person 
		    // special permission 
		    Session::set('role',$data['role']);
            Session::set("loggedIn",true);
            // header => redirect
            header('location:../dashboard');
      
			}
			else{
             // show an error
			header('location:../login');
				
			}

		}
	
}

?>