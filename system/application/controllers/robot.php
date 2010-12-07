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
	}
?>