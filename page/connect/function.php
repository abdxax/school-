<?php
require "DB.php";
/**
 * 
 */
class funs extends ConnectDB
{
	private $db;

	function __construct()
	{
		parent::__construct("localhost","root","","school_exam");
		$this->db=$this->con;
	}

	public function addStudent ($name,$email,$class){
		$sql=$this->db->prepare("INSERT INTO user (email,pass,role) VALUES (?,?,?)");
		if($sql->execute(array($email,"123456","2"))){
			$sql2=$this->db->prepare("INSERT INTO student (email,name,class) VALUES (?,?,?)");
			if ($sql2->execute(array($email,$name,$class))) {
				echo "DONE";
				# code...
			}
		}
	}

	public function addGroup ($name){
		$sql=$this->db->prepare("INSERT INTO _group (group_name,status) VALUES (?,?)");
		if($sql->execute(array($name,"new"))){
             echo "string";
		}
	}
}