<?php
	class Users extends Controller
	{
		function Users()
		{
			parent::Controller();
			$this->load->model("Core_Model");
		}
		
		function index()
		{
			$this->header(true);
			
			$datos["users"] = $this->Core_Model->getAll("users_robot");
			
			$this->load->view("ui/users/users", $datos);
		}
		
		function header($validate = false)
		{
			if($validate == true)
			{
				$this->validar_sesion();
			}
			$this->load->view("ui/header");
		}
		
		/*
			Funciones 
		*/
		function sanitize($s = "")
		{
			$s = $this->input->xss_clean($s);
			$s = trim($s);
			return $s;
		}
		
		function validar_sesion()
		{
			$centinela = new Centinela();
			if($centinela->getAuth() == true)
			{
				return true;
			}
			else
			{
				redirect("/robot/");	
			}
		}
	}
?>