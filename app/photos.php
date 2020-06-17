<?php

include "app/koneksi.php";

class photo extends koneksi {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$id = $_POST['id'];
		$text = $_POST['teks'];

		$sql = "INSERT INTO photos (id, teks) VALUES
			(:id, :teks)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":teks", $text);

		$stmt->execute();

		return false;
	}

	public function tampil() {
		$sql = "SELECT * FROM photos";
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
		$sql = "SELECT * FROM photos WHERE id=:id";
		$stmt= $this->db->prepare ($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
$row = $stmt->fetch();
return $row;
	}


	public function update ()
	{
		$id = $_POST['id'];
		$text = $_POST['teks'];

		$sql = "INSERT INTO photos (id, teks) VALUES
			(:id, :teks)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":teks", $text);
		
		$stmt->execute();

return false;
	}

public function delete($id)
{
	$sql = "DELETE * FROM photos WHERE id=:id";
		$stmt= $this->db->prepare ($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

return false;
}
}

