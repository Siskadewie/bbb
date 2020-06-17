<?php

include "app/koneksi.php";

class post extends koneksi {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$id = $_POST['cat_id'];
		$date = $_POST['tanggal'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text = $_POST['teks'];

		$sql = "INSERT INTO post (cat_id, tanggal,  slug, title) VALUES
			(:cat_id, :tanggal, :slug, :title)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->bindParam(":tanggal", $date);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":title", $title);
		$stmt->execute();

		return false;
	}

	public function tampil() {
		$sql = "SELECT * FROM post";
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
		$sql = "SELECT * FROM post WHERE id=:id";
		$stmt= $this->db->prepare ($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
$row = $stmt->fetch();
return $row;
	}


	public function update ()
	{
		$id = $_POST['cat_id'];
		$date = $_POST['tanggal'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text = $_POST['teks'];

		$sql = "INSERT INTO post (cat_id, tanggal,  slug, title) VALUES
			(:cat_id, :tanggal, :slug, :title)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->bindParam(":tanggal", $date);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":title", $title);
		$stmt->execute();

return false;
	}

public function delete($id)
{
	$sql = "DELETE * FROM post WHERE id=:id";
		$stmt= $this->db->prepare ($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

return false;
}
}

