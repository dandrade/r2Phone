<?php
	class Campaings extends Controller
	{
		function Campaings()
		{
			parent::Controller();
			$this->load->model("Core_Model");
		}
		
		function index()
		{
			$this->header(true);
			
			$datos["campaings"] = $this->Core_Model->getAll("vicidial_lists");
			$datos["campaing_selected"] = $this->Core_Model->getRow("robot");
			
			$this->load->view("ui/campaings/campaings", $datos);
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