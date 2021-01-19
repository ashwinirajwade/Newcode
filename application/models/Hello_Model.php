<?php
class Hello_Model extends CI_Model 
{
	
	function displayrecords()
	{
		$query=$this->db->query("select * from users");
		return $query->result();
	}
}
