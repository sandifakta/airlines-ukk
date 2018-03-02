<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function cek_user($username, $pass)
	{
		$qry = $this->db->query("select * from user where username='$username' and password='$pass'");
		return $qry;
	}	
}