<?php
class FuncionesComponent extends Component {


	public function generatePermalink ($url) {
		//$url = utf8_decode($url);
		
		//Rememplazar caracteres especiales latinos
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'ü');
		$repl = array('a', 'e', 'i', 'o', 'u', 'n', 'u');
		$url = str_replace ($find, $repl, $url);
		
		$find = array('Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü');
		$url = str_replace ($find, $repl, $url);
		
		$url = strtolower($url);//minusculas
	
		// Añadir guiones
		$find = array(' ', '&', '\r\n', '\n', '+'); 
		$url = str_replace ($find, '-', $url);
	
		// Eliminar y Reemplazar demás caracteres especiales
		$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
		$repl = array('', '-', '');
		$url = preg_replace ($find, $repl, $url);
	
		return $url;
	}


}