<?php

namespace app\Controllers;

class Controller {

	public function view($route, $data = []) {

		// Destructurar el array de datos
		extract($data);

		// Saber si existe el archivo de vista
		if (file_exists("../resources/views/{$route}.php")){
			ob_start();
			include "../resources/views/{$route}.php";
			$content = ob_get_clean();
			return $content;
		} else {
			return "El archivo de vista {$route}.php no existe";
		}
	}

}
