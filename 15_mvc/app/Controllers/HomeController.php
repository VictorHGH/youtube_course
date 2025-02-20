<?php

namespace app\Controllers;

class HomeController extends Controller {

	public function index() {

		return $this->view('home', [
			'title' => 'Home Page',
			'description' => 'Esta es la página de inicio'
		]);

	}
}
