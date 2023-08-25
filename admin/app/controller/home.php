<?php	
	class Home{
		
		public $view;
		
		public function home(){
			
			$this->view = "home/home";

		}

		public function planos(){
			
			$this->view = "home/planos";

		}

		public function pedidos(){
			
			$this->view = "home/pedidos";

		}
		
	}
?>