<?php

include_once "../lib/function.php";
 $fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
   
if(isset($_POST['sts'])){
	if($_POST['sts']=="input"){
		if($fileSize>0 || $fileError ==0){
			$con->InsertProduk($_POST['kop'], $_POST['isi'], $fileName);
		 	$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'inc/gambar/'.$fileName);  
		}else{  
			 echo "Gagal mengupload file: ".$fileError;  
		}
	$status="Input Data";
	}
}
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Berhasil <?php echo $status; ?> </h2>   
            </div>
        </div>              

			<script type="text/javascript">
				window.location.assign("index.php?p=addProduk")
			</script>
