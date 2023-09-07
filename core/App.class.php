<?php

class App extends Controller{
	
	public function run(){

		$this->dispatch();
	}
	
	public function dispatch(){

		if (isset ( $_GET ['ref'] ) ) {
			$ref = $this->sanitize( $_GET ['ref'] );
			$ref = trim ( $_GET ['url'], '/' );  				
			$ref = filter_var ( $url, FILTER_SANITIZE_URL ); 	

			$controller_name = "TicketController";
			$action = "ticketGenerator";
			
			// var_dump($_GET ['ref'] );		
		} else if (isset( $_GET ['data'] )) {
			$controller_name = "XmlController";
			$action = "xmlGenerator";
		} else {
			$controller_name = "HOME";
			$action = "Show";
		}
		
		if (file_exists ( __DIR__ . "/../controllers/$controller_name.class.php" )) {
			$controller = new $controller_name(); 				
			
			if (method_exists ( $controller, $action )) {
				$controller->$action();		  				
			} else {
				$error = "La acción no existe.";				
				include __DIR__ . "/../views/error.tpl.php";
			}
		}else{
			$error = "El controlador no existe.";				
			include __DIR__ . "/../views/error.tpl.php";
		}
		
	}
}

?>