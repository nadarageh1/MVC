<?php
/**
* 
*/
class Dashboard_Model extends Model
{
	
	function __construct()
	{
	// call function in parent class that is Model
	parent::__construct();
	}
	 function xhrInsert()
	{
     $text= $_POST['text'];	
    $sth= $this->db->prepare("insert into data (text) values (:text)");
    // define whate is :text and run the query
    $sth->execute(array(':text' => $text ));
    $data =  array('text' =>$text ,
    'id'=>$this->db->lastInsertId());
    echo json_encode($data);

	}
	function xhrGetInserting(){
		// select all data from table data
		$sth =$this->db->prepare("select * from data");
		// 	Returns an associative array of strings
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		// run out this query
		$sth->execute();
		$data =$sth->fetchAll();
		echo json_encode($data);
	}
	function xhrDeleteListing(){
		$id =$_POST['id'];
		$sth =$this->db->prepare('delete from data where id="'.$id.'"');
		$sth->execute();
	}
}
     
?>