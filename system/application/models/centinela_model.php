<?php
  	class Centinela_Model extends Model
	{
		function Centinela_Model()
		{
			parent::Model();
		}
		
		function check_user($nick = "", $clave = "")
		{
			$query = $this->db->where('username', $nick);
			$query = $this->db->where('password', $clave);
			$query = $this->db->get('users_robot');
			return $query;
		}
		
	}
?>