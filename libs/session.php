<?php
/**
* 
*/
class Session 
{
    // to open session to work with it
	public static function init(){
		@session_start();
	}
	// put variable in session 
	public static function set($key,$value){
     $_SESSION[$key]=$value;
	}
	// get variable from session by his key
	public static function get($key){
		if(isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	//  to destroy session after we use it
	public static function destroy(){
		session_destroy();
	}


}


?>