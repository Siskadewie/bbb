<?php

include "app/koneksi.php";

class category extends koneksi {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$id = $_POST['id'];
		$nama = $_POST['name'];
		$text = $_POST['teks'];
		

		$sql = "INSERT INTO category (id,  name, teks) VALUES
			(:id, :name, :teks)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":name", $nama);
		$stmt->bindParam(":teks", $text);
		
		$stmt->execute();

		return false;
	}

	public function tampil() {
		$sql = "SELECT * FROM category";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}
		return $data;
	}

	

public function edit ($id)
	{
		$sql = "SELECT * FROM category WHERE id=:id";
		$stmt= $this->db->prepare ($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
$row = $stmt->fetch();
return $row;
	}


	public function update ()
	{
		$id = $_POST['id'];
		$nama = $_POST['name'];
		$text = $_POST['teks'];
		

		$sql = "INSERT INTO category (id,  name, teks) VALUES
			(:id, :name, :teks)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":name", $nama);
		$stmt->bindParam(":teks", $text);
		
		$stmt->execute();

return false;
	}

public function delete($id)
{
	$sql = "DELETE * FROM category WHERE id=:id";
		$stmt= $this->db->prepare ($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

return false;
}
}