<?php
include "connection.php";
	class fungsiku extends Connection {
		function authLog($user,$pass){
			$stmt = $this->DBH->prepare('select * from addAnggota where username = ?');
			$stmt->execute(array($user));
			$user = $stmt->fetch(PDO::FETCH_OBJ);		

			if($user != null && md5($pass) == $user->password){
			    header('location:index.php');
			    // $_SESSION['userlogin'] = 'login';
			        setcookie('nama', $user->nama, time()+(3600));
			        setcookie('status', $user->status, time()+(3600));
			        setcookie('id', $user->id, time()+(3600));
			    	if($user->status=="Admin"){
				        setcookie('koperasi', $user->idKop, time()+(3600));

			    	}
			} else {
			    header('location:login.php?err=error');
			}
		}

		function InsertDataAnggota($name, $tempat, $tanggal, $alamat, $telepon, $email, $kdpos, $Agama, $sex, $foto,$user,$pass,$sts,$kop){
			$stmt = $this->DBH->prepare('insert into addAnggota values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			$stmt->execute(array($name, $tempat, $tanggal, $alamat, $telepon, $email, $kdpos, $Agama, $sex,$foto,$user,$pass,$sts,$kop));
		}

		function InsertKoperasi($id,$name, $tanggal, $alamat, $telepon, $email, $kdpos, $Jns, $foto){
			$stmt = $this->DBH->prepare('insert into tkoperasi values(?,?,?,?,?,?,?,?,?)');
			$stmt->execute(array($id,$name,  $alamat,$tanggal, $email, $telepon, $kdpos, $Jns,$foto));
		}

		function getData($id){
			$stmt = $this->DBH->prepare('select * from addAnggota where id=?');
			$stmt->execute(array($id));
			return $stmt->fetch();
		}

		function getAnggota($sts){
			$stmt = $this->DBH->prepare('select * from addAnggota where status=?');
			$stmt->execute(array($sts));
			return $stmt;
		}

		function DataKoperasi(){
			$stmt = $this->DBH->query('select * from tKoperasi');
			return $stmt;
		}

		function getDataKoperasi($id){
			$stmt = $this->DBH->prepare('select * from tKoperasi where id=?');
			$stmt->execute(array($id));
			return $stmt->fetch();
		}

		function getPageData($p,$sts){
			$page=5;
			$s=5 * (trim(htmlentities($p))-1);
			$stmt = $this->DBH->prepare('select * from addAnggota where status= :sts LIMIT :limit, :perpage');
			$stmt->bindParam(':sts', $sts, PDO::PARAM_INT);
			$stmt->bindParam(':perpage', $page, PDO::PARAM_INT);
			$stmt->bindParam(':limit', $s, PDO::PARAM_INT);			
			$stmt->execute();
			return $stmt;
		}
		function getPageDKop($p,$sts,$kop){
			$page=5;
			$s=5 * (trim(htmlentities($p))-1);
			$stmt = $this->DBH->prepare('select * from addAnggota where status= :sts and idKop= :koper LIMIT :limit, :perpage');
			$stmt->bindParam(':sts', $sts, PDO::PARAM_INT);
			$stmt->bindParam(':koper', $kop, PDO::PARAM_INT);
			$stmt->bindParam(':perpage', $page, PDO::PARAM_INT);
			$stmt->bindParam(':limit', $s, PDO::PARAM_INT);			
			$stmt->execute();
			return $stmt;
		}
		function UpdateData($id,$name, $tempat, $tanggal, $alamat, $telepon, $email, $kdpos, $Agama, $sex, $foto){
			$stmt = $this->DBH->prepare('update addAnggota set nama=?, tempat=?, tanggal=?, alamat=?, telepon=?, email=?, kdpos=?, agama=?, sex=?, foto=? where id=?');
			$stmt->execute(array($name, $tempat, $tanggal, $alamat, $telepon, $email, $kdpos, $Agama, $sex,$foto,$id));

		}
		function UpdateDataK($id,$name, $alamat, $tanggal, $email, $telpon, $kdpos, $jenis, $foto){
			$stmt = $this->DBH->prepare('update tkoperasi set nama=?, alamat=?, tanggal=?, email=?, telpon=?, kdpos=?, jenis=?, foto=? where id=?');
			$stmt->execute(array($name, $alamat, $tanggal,$email, $telpon, $kdpos,$jenis, $foto,$id));

		}
		function DeleteData($id){
			$stmt = $this->DBH->prepare('delete from addAnggota where id=?');
        	$stmt->execute(array($id));
		}
		function DeleteDataK($id){
			$stmt = $this->DBH->prepare('delete from tKoperasi where id=?');
        	$stmt->execute(array($id));
		}
		function Tampil(){
			$stmt = $this->DBH->query('select * from addAnggota');
			return $stmt;
		}
		function TampilKoperasi(){
			$stmt = $this->DBH->query('select * from tKoperasi');
			return $stmt;
		}
		function countData(){
			$stmt = $this->DBH->query('select count(id) as rows from addAnggota where status="Anggota"')->fetch(PDO::FETCH_OBJ);
			return $stmt->rows;
		}
		function countData1(){
			$stmt = $this->DBH->query('select count(id) as rows from addAnggota where status="Admin"');
			$stmt->bindParam(':kode', $kode, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}

		function countK($kode){
			$stmt = $this->DBH->prepare("select count(*) from tKoperasi where id like '%?%' ");
//			$stmt->bindParam(':kode', $kode, PDO::PARAM_INT);
			$stmt->execute(array($kode));
			return $stmt->fetch();
		}

		function countSp($kode){
			$stmt = $this->DBH->prepare('select count(*) from simpanan where id like :kode ');
			$stmt->bindParam(':kode', $kode, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}

		function countKop(){
			$stmt = $this->DBH->prepare('select count(*) from tKoperasi');
			$stmt->execute();
			return $stmt->fetch();
		}
		function countSim(){
			$stmt = $this->DBH->prepare('select count(*) from simpanan');
			$stmt->execute();
			return $stmt->fetch();
		}

	
	/// Fungsi untuk CRUD Pengumuman
		function InsertPengumuman($judul, $isi,$author,$date){
			$stmt = $this->DBH->prepare('insert into pengumuman values(null,?,?,?,?)');
			$stmt->execute(array($judul, $isi,$author,$date));
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

		function UpdatePengumuman($id, $judul, $isi,$author,$tgl){
			$stmt = $this->DBH->prepare('update pengumuman set judul=?, isi=?, author=?, date=? where id=?');
			$stmt->execute(array($judul, $isi,$author,$tgl, $id));
		}

		function DeletePengumuman($id){
			$stmt = $this->DBH->prepare('delete from pengumuman where id=?');
        	$stmt->execute(array($id));
		}

	/// Fungsi untuk CRUD Pinjaman
		function InsertPinjaman($noAnggota, $tanggal, $lamaPinjaman, $jumlah,$angsur){
			$stmt = $this->DBH->prepare('insert into pinjaman values(null,?,?,?,?,?)');
			$stmt->execute(array($tanggal, $lamaPinjaman, $jumlah,$angsur,$noAnggota));
		}

		function TampilPinjaman(){
			$stmt = $this->DBH->query('select * from pinjaman');
			return $stmt;
		}

		function TampilPinjamanAng($id){
			$stmt = $this->DBH->prepare('select * from pinjaman where idAnggota=?');
			$stmt->execute(array($id));
			return $stmt;
		}

		function EditPinjaman($noAnggota){
			$stmt = $this->DBH->prepare('select * from pinjaman where noAnggota=?');
			$stmt->execute(array($noAnggota));
			return $stmt->fetch();
		}

		function UpdatePinjaman($noAnggota, $tanggal, $lamaPinjaman, $jumlah){
			$stmt = $this->DBH->prepare('update pinjaman set tanggal=?, lamaPinjaman=?, jumlah=? where noAnggota=?');
			$stmt->execute(array($tanggal, $lamaPinjaman, $jumlah, $noAnggota));
		}

		function DeletePinjaman($id){
			$stmt = $this->DBH->prepare('delete from pinjaman where id=?');
        	$stmt->execute(array($id));
		}

		function SumPinjaman(){
			$stmt = $this->DBH->prepare('select sum(jumlah) as total from pinjaman');
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}

		function SumPinjamanAng($nmrAnggota){
			$stmt = $this->DBH->prepare('select sum(jumlah) as total from pinjaman where idAnggota= :nomor');
			$stmt->bindParam(':nomor',$nmrAnggota, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}

	//Fungsi untuk CRUD Simpanan
		function InsertSimpanan($nmrAnggota, $tanggal, $jnsSimpan, $jumlah){
			$stmt = $this->DBH->prepare('insert into simpanan values(null,?,?,?,?)');
			$stmt->execute(array($tanggal, $jnsSimpan, $jumlah,$nmrAnggota));
		}

		function TampilSimpanan($jenis,$id){
			if($id==null){
				$stmt = $this->DBH->prepare('select * from simpanan where jnsSimpanan=?');
				$stmt->execute(array($jenis));
			}else{
				$stmt = $this->DBH->prepare('select * from simpanan where idAnggota= ? and jnsSimpanan=?');
				$stmt->execute(array($id,$jenis));

			}
			return $stmt;
		}

		function EditSimpanan($id){
			$stmt = $this->DBH->prepare('select * from simpanan where id=?');
			$stmt->execute(array($id));
			return $stmt->fetch();
		}

		function UpdateSimpanan($id,$nmrAnggota, $tanggal, $jnsSimpan, $jumlah){
			$stmt = $this->DBH->prepare('update simpanan set tanggal=?, jnsSimpanan=?, jumlah=?, nmrAnggota=? where id=?');
			$stmt->execute(array($tanggal, $jnsSimpan, $jumlah, $nmrAnggota,$id));
		}

		function DeleteSimpanan($id){
			$stmt = $this->DBH->prepare('delete from simpanan where id=?');
        	$stmt->execute(array($id));
		}

		function SumSimpanan($jenis,$id){
			if($id==null){
				$stmt = $this->DBH->prepare('select sum(jumlah) as total from simpanan where jnsSimpanan=?');
				$stmt->execute(array($jenis));
			}else{
				$stmt = $this->DBH->prepare('select sum(jumlah) as total from simpanan where idAnggota=? jnsSimpanan=?');
				$stmt->execute(array($id,$jenis));
			}
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		function SumSimpananAll(){
				$stmt = $this->DBH->prepare('select sum(jumlah) as total from simpanan');
				$stmt->execute();
				return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		//fungsi proudk
		function InsertProduk($kop, $isi, $gambar){
			$stmt = $this->DBH->prepare('insert into produk values(null,?,?,?)');
			$stmt->execute(array($kop, $isi, $gambar));
		}

		function TampilProduk(){
			$stmt = $this->DBH->query('select * from produk');
			return $stmt;
		}



	}
	    $con = new fungsiku();

?>