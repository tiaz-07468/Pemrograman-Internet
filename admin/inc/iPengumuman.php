<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
<?php
  include_once "../lib/function.php";
  if(!isset($_POST['sts'])){
  	$_POST['sts']="";
  }else{
      if($_POST['sts']=="input"){
        $sts=$_COOKIE['id'];
        $res=$con->getData($sts);
        $penulis=$res['nama'];
        $tgl=date('Y-m-d');
        $con->InsertPengumuman($_POST['judul'], $_POST['isi'],$penulis,$tgl);
        $status="Input Pengumuman";
        
      }elseif($_POST['sts']=="edit"){
        $sts=$_COOKIE['id'];
        $res=$con->getData($sts);
        $penulis=$res['nama'];
        $tgl=date('Y-m-d');
        $con->UpdatePengumuman($_POST['id'],$_POST['judul'], $_POST['isi'],$penulis,$tgl);
        $status="Edit Pengumuman";
      }
}
    if($_GET['p']=="hapusPengumuman"){
		$con->DeletePengumuman($_GET['id']);
        $status="Hapus Pengumuman";
	}

?>
             <h2>Berhasil <?php echo $status; ?> </h2>   
            </div>
        </div>              

			<script type="text/javascript">
				window.location.assign("index.php?p=home")
			</script>