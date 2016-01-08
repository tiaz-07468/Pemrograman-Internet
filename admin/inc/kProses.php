<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
<?php
include_once "../lib/function.php";
 
if(!isset($_POST['sts'])){
	$_POST['sts']="";
}else if(isset($_POST['sts'])){

	if($_POST['Jenis']=="Simpan Pinjam"){
		$num=$con->countK("KSP");
		$num=(int)$num;
		if($num<=0){
			$num=1;
		}else{
			$num++;
		}
		$kode="KSP-".$num;
	}else if($_POST['Jenis']=="Jasa"){
		$num=$con->countK("KJS");
		$num=(int)$num;
		if($num<=0){
			$num=1;
		}else{
			$num++;
		}
		$kode="KJS-".$num;

	}else if($_POST['Jenis']=="Simpan Pinjam dan Jasa"){
		$num=$con->countK("KSJ");
		$num=(int)$num;
		if($num<=0){
			$num=1;
		}else{
			$num++;
		}
		$kode="KSJ-".$num;

	}
	$fileName = $_FILES['gambar']['name'];  
	$fileSize = $_FILES['gambar']['size'];  
	$fileError = $_FILES['gambar']['error'];  
	if($_POST['sts']=="input"){
		 if($fileSize > 0 || $fileError == 0){  
			$con->InsertKoperasi($kode,$_POST['name'], $_POST['tanggal'], $_POST['alamat'], $_POST['telepon'], $_POST['email'], $_POST['kdpos'], $_POST['Jenis'], $fileName);
		 	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'inc/photo/'.$fileName);  
		}else{  
			 echo "Gagal mengupload file: ".$fileError;  
		 }
		$status="Input Data";
	}elseif($_POST['sts']=="edit"){
		 if($fileSize > 0 || $fileError == 0){  
			$data=$con->getDataKoperasi($_POST['id']);
		 	$link='inc/photo/'.$data['foto'];
		 	unlink($link);	
			$con->UpdateDataK($_POST['id'],$_POST['name'], $_POST['alamat'], $_POST['tanggal'], $_POST['email'], $_POST['telepon'], $_POST['kdpos'], $_POST['Jenis'], $fileName);
		 	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'inc/photo/'.$fileName);  
		}else{  
			 echo "Gagal mengupload file: ".$fileError;  
			 }
		
		$status="Edit Data";
	}
}
if($_GET['p']=="hapusKoperasi"){

		$data=$con->getDataKoperasi($_GET['id']);
	 	$link='inc/photo/'.$data['foto'];
	 	unlink($link);		
		$con->DeleteDataK($_GET['id']);
		$status="Hapus Data";
}
?>

             <h2>Berhasil <?php echo $num; ?> </h2>   
            </div>
        </div>              

			<script type="text/javascript">
				window.location.assign("index.php?p=tKoperasi")
			</script>

