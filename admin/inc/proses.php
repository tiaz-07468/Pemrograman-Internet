<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
<?php
include_once "../lib/function.php";
 
if(!isset($_POST['sts'])){
	$_POST['sts']="";
}else if(isset($_POST['sts'])){
 $fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
	if($_POST['sts']=="input"){
		 if($fileSize > 0 || $fileError == 0){  
			
			$con->InsertDataAnggota($_POST['name'], $_POST['tempat'], $_POST['tanggal'], $_POST['alamat'], $_POST['telepon'], $_POST['email'], $_POST['kdpos'], $_POST['Agama'], $_POST['sex'], $fileName, $_POST['username'], md5($_POST['password']),"Anggota",$_POST['idKop']);
		 	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'inc/photo/'.$fileName);  
		}else{  
			 echo "Gagal mengupload file: ".$fileError;  
		 }
		$status="Input Data";
	}elseif($_POST['sts']=="edit"){
		 if($fileSize > 0 || $fileError == 0){  
			
			$data=$con->getData($_POST['id']);
		 	$link='inc/photo/'.$data['foto'];
		 	unlink($link);	
			$con->UpdateData($_POST['id'],$_POST['name'], $_POST['tempat'], $_POST['tanggal'], $_POST['alamat'], $_POST['telepon'], $_POST['email'], $_POST['kdpos'], $_POST['Agama'], $_POST['sex'],$fileName);
		 	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'inc/photo/'.$fileName);  
		}else{  
			 echo "Gagal mengupload file: ".$fileError;  
		 }
		
		$status="Edit Data";
	}
}
if($_GET['p']=="hapusAnggota"){
		$data=$con->getData($_GET['id']);
	 	$link='inc/photo/'.$data['foto'];
	 	unlink($link);		
		$con->DeleteData($_GET['id']);
		$status="Hapus Data";
}
?>

             <h2>Berhasil <?php echo $status; ?> </h2>   
            </div>
        </div>              

			<script type="text/javascript">
				window.location.assign("index.php?p=tAnggota")
			</script>

