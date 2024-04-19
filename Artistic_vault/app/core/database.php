<?php

class Database
{
	private $db;

	public function __construct()
	{
		try {
			$dsn = "mysql:host=localhost;dbname=gallery_vault;";
			$username = "root";
			$password = "";

			$this->db = new PDO($dsn, $username, $password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			throw new Exception("Connection failed: " . $e->getMessage());
		}
	}


	public function read($query, $data = [])
	{
		try {
			$stm = $this->db->prepare($query);

			if (count($data) > 0) {
				$stm->execute($data);
			} else {
				$stm->execute();
			}

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			throw new Exception("Read query failed: " . $e->getMessage());
		}
	}

	public function write($query, $data = [])
	{
		try {
			$stm = $this->db->prepare($query);

			if (count($data) > 0) {
				$stm->execute($data);
			} else {
				$stm->execute();
			}

			return true;
		} catch (PDOException $e) {
			throw new Exception("Write query failed: " . $e->getMessage());
		}
	}
}


?>