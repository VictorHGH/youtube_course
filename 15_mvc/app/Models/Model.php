<?php

namespace app\Models;

use mysqli;

class Model {
	protected $db_host = DB_HOST;
	protected $db_user = DB_USER;
	protected $db_pass = DB_PASS;
	protected $db_name = DB_NAME;

	protected $connection;
	protected $query;
	protected $table;

	public function __construct() {
		$this->connection();
	}

	public function connection() : void {

		$this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

		if ($this->connection->connect_error) {
			die('No se pudo conectar: ' . $this->connection->connect_error);
		}

	}

	public function query(string $sql, ?array $data = [], string $params = null) : self {
		if ($data){
			if($params === null){
				$params = str_repeat('s', count($data));
			}
			$stmt = $this->connection->prepare($sql);
			$stmt->bind_param($params, ...$data);
			$stmt->execute();

			$this->query = $stmt->get_result();
		} else {
			$this->query = $this->connection->query($sql);
		}
		return $this;
	}

	public function first() : ?array {
		return $this->query->fetch_assoc();
	}

	public function get() : array {
		return $this->query->fetch_all(MYSQLI_ASSOC);
	}

	// Consultas
	public function all() : array {

		// SELECT * FROM contacts
		$sql = "SELECT * FROM {$this->table}";
		return $this->query($sql)->get();
	}

	public function find(string $id) : ?array {
		$sql = "SELECT * FROM {$this->table} WHERE id = ?";
		return $this->query($sql, [$id], 'i')->first();
	}

	public function where(string $column, string $operator, string $value = null) : self {

		if ($value === null) {
			$value = $operator;
			$operator = '=';
		}

		$sql = "SELECT * FROM {$this->table} WHERE {$column} {$operator} ?";

		$this->query($sql, [$value]);

		return $this;
	}

	public function create(?array $data): ?array {
		$columns = implode(', ', array_keys($data));
		$values = array_values($data);

		$sql = "INSERT INTO {$this->table} ({$columns}) VALUES (" . str_repeat('?, ', count($values) - 1) . "?)";

		$this->query($sql, $values);

		$insert_id = $this->connection->insert_id;
		return $this->find($insert_id);
	}

	public function update( string $id, ?array $data) : ?array {
		// UPDATE table SET column1= ?, column2= ? WHERE id=1
		
		$fields = [];

		foreach ($data as $key => $value) {
			$fields[] = "{$key} = ?";
		}

		$fields = implode(', ', $fields);

		$sql = "UPDATE {$this->table} SET {$fields} WHERE id = ?";

		$values = array_values($data);
		$values[] = $id;

		$this->query($sql, $values);

		return $this->find($id);
	}

	public function delete(string $id) {
		// Delete from table where id = 1

		$sql = "DELETE FROM {$this->table} WHERE id = ?";
		$this->query($sql, [$id], 'i');
	}
}
