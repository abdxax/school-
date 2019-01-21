<?php
/**
 * 
 */
class ConnectDB 
{
	protected $con;

	function __construct($local,$user,$pass,$dbname)
	{
		$this->con=new PDO("mysql:host=".$local.";dbname=".$dbname."",$user,$pass);
		# code...
	}
}