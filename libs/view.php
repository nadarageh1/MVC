<?php
/**
* 
*/
class View
{
	
	function __construct()
	{
	
	}
	public function render($name,$noenclude =false){
		if($noenclude == true){
			 require 'views/'.$name.'.php';
		}
		else{
	  require'views/header.php';
      require 'views/'.$name.'.php';
      require'views/footer.php';
		}
	
	}
}

?>