<?php 

	class registro extends Controllers{
		public function __construct()
		{
			session_start();
			// if(isset($_SESSION['login']))
			// {
			// 	header('Location: '.base_url().'/dashboard');
			// 	die();
			// }
			parent::__construct();
		}

	
		public function registro()
		{
			$data['page_tag'] = "registro - Tienda Virtual";
			$data['page_title'] = "Tienda Virtual";
			$data['page_name'] = "login";
			$data['page_functions_js'] = "functions_login.js";
			$this->views->getView($this,"registro",$data);
		}



	}