<?php

/*
 * Clase base de los controladores
 * 
 * Aquí definimos las propiedades y métodos comunes a todos
 * 
 */

class Controller {
	
	public function sanitize($input) {
		$search = array (
				'@<script[^>]*?>.*?</script>@si', 	// Elimina javascript
				'@<[\/\!]*?[^<>]*?>@si', 			// Elimina les etiquetes HTML
				'@<style[^>]*?>.*?</style>@siU', 	// Elimina les etiquetes d'estil
				'@<![\s\S]*?--[ \t\n\r]*>@' 		// Elimina els comentaris multi-linia
		) ;
	
		if (is_array ( $input )) {
			foreach ( $input as $var => $val ) {
				$input [$var] = $this->sanitize ( $val );
			}
		} else {
			$input = preg_replace ( $search, "", htmlspecialchars ( stripslashes ( trim ( $input ) ) ) );
			// $output = mysql_real_escape_string ( $input );
		}
		return $input;
	}
	
}