<?php

namespace app\Controllers;

use app\Models\Contact;

class HomeController extends Controller {

	public function index() {

		$contactModel = new Contact();

		return $contactModel->delete(13);

		return $this->view('home', [
			'title' => 'Home Page',
			'description' => 'Esta es la página de inicio'
		]);

	}
}
