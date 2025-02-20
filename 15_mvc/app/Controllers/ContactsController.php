<?php

namespace app\Controllers;

use app\Models\Contact;

class ContactsController extends Controller {

	public function index() : string {

		$model = new Contact();

		$contacts = $model->all();

		return $this->view('contacts/index', compact('contacts'));
	}

	public function create() {
		return "Aquí se mostrará el formulario para crear un contacto";
	}

	public function store() {
		return "Aquí se procesará el formulario para crear un contacto";
	}

	public function show($id) {
		return "Aquí se mostrará el contacto con el id: $id";
	}

	public function edit($id) {
		return "Aquí se mostrará el formulario para editar el contacto con el id: $id";
	}

	public function update($id) {
		return "Aquí se procesará el formulario para editar el contacto con el id: $id";
	}

	public function destroy($id) {
		return "Aquí se procesará el formulario para eliminar el contacto con el id: $id";
	}
}
