<?php

namespace app\Controllers;

use app\Models\Contact;

class ContactsController extends Controller {

	public function index() : string {

		$model = new Contact();

		$contacts = $model->all();

		return $this->view('contacts/index', compact('contacts'));
	}

	public function create() : string {
		return $this->view('contacts/create');
	}

	public function store() {
		$data = $_POST;

		$model = new Contact();

		$model->create($data);

		return $this->redirect('/contacts');
	}

	public function show($id) {
		$model = new Contact();

		$contact = $model->find($id);

		return $this->view('contacts/show', compact('contact'));
	}

	public function edit($id) {

		$model = new Contact();
		$contact = $model->find($id);

		return $this->view('contacts/edit', compact('contact'));
	}

	public function update($id) {
		$data = $_POST;

		$model = new Contact();
		$model->update($id, $data);

		$this->redirect("/contacts/{$id}");
		
	}

	public function destroy($id) {
		return "Aquí se procesará el formulario para eliminar el contacto con el id: $id";
	}
}
