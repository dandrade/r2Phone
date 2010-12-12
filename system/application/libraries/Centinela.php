<?php
    if(!defined('BASEPATH'))
		exit('No direct script access allowed');
		
	class Centinela
	{
		var $_id = 0;
		var $_username = "";
		var $_password = "";
		var $_auth = false;
        
		function Centinela($auto = true)
		{
			if($auto)
			{
				$CI =& get_instance();
				if($this->login($CI->session->userdata('username'), $CI->session->userdata('password')))
				{
					$this->_id = $CI->session->userdata('id');
					$this->_username = $CI->session->userdata('username');
					$this->_password = $CI->session->userdata('password');
				}
			}
		}
		
		function getId(){return $this->_idusuarios;}
		function getUserName(){return $this->_username;}
		function getPassword(){return $this->_password;}
		function getAuth(){return $this->_auth;}
		
		function login($nick = "", $clave = "")
		{
			if(empty($nick) || empty($clave))
				return false;
				
			$CI =& get_instance();
			$CI->load->model('Centinela_Model');
			$query = $CI->Centinela_Model->check_user($nick,$clave);
			if($query->num_rows()==1)
			{
				$row = $query->row();
				
				$CI->session->set_userdata('id', $row->id);
				$this->_id = $row->id;
				$CI->session->set_userdata('username', $row->username);
				$this->_username = $row->username;
				$CI->session->set_userdata('password', $row->password);
				$this->_password = $row->password;
				$this->_auth = true;
				$CI->session->set_userdata('auth', $this->_auth);
				return true;
			}
			else
			{
				$this->_auth = false;
				$this->logout();
				
				return false;
			}
		}
		
		function logout()
		{
			$CI =& get_instance();
			$CI->session->sess_destroy();
			$this->_auth = false;
		}
		
		function check($level = "", $estricto = true)
		{
			if(!$this->_auth)
				return false;
			
			if($estricto)
			{
				if($level == $this->_level)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				if($level == $this->_level)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
	}
?>