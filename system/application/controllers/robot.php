<?php
	class Robot extends Controller
	{
		function Robot()
		{
			parent::Controller();
		}

		function index()
		{
			$this->load->view("ui/login");
		}
		
		function login()
		{
			$username = $this->sanitize($this->input->post("username"));
			$password = md5($this->sanitize($this->input->post("password")));
            
			$recordar = false;
			$centinela = new Centinela(false);
			
            if($centinela->login($username, $password, $recordar))
			{
				$output = '{ "success": "yes" }';
			}
			else
			{
				$output = '{ "success": "no" }';
			}
			$output = str_replace("\r", "", $output);
		    $output = str_replace("\n", "", $output);
			
			echo $output;
		}
		
		function home()
		{
			$this->header(true);
			$this->load->view("ui/home");
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