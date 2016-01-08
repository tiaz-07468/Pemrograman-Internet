<?php
include "connection.php";
	class fungsi extends Connection {
		function InsertPengumuman($judul, $isi){
			$stmt = $this->DBH->prepare('insert into pengumuman values(null,?,?)');
			$stmt->execute(array($judul, $isi));
		}

		function TampilPengumuman(){
			$stmt = $this->DBH->query('select * from pengumuman');
			return $stmt;
		}

		function EditPengumuman($id){
			$stmt = $this->DBH->prepare('select * from pengumuman where id=?');
			$stmt->execute(array($id));
			return $stmt->fetch();
		}

		function UpdatePengumuman($id, $judul, $isi){
			$stmt = $this->DBH->prepare('update pengumuman set judul=?, isi=? where id=?');
			$stmt->execute(array($judul, $isi, $id));
		}

		function DeletePengumuman($id){
			$stmt = $this->DBH->prepare('delete from pengumuman where id=?');
        	$stmt->execute(array($id));
		}

	}

	$con = new fungsi();
?>