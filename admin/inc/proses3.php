        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
					<?php

							include_once "../lib/function.php";

							if(!isset($_POST['sts'])){
								$_POST['sts']="";
							}else{
								$angsur=ceil($_POST['jumlah']/$_POST['lamaPinjaman']);
								if($_POST['sts']=="input"){
									$con->InsertPinjaman($_POST['noAnggota'], $_POST['tanggal'], $_POST['lamaPinjaman'], $_POST['jumlah'],$angsur);
									$status="Input Pinjaman";
								}elseif($_POST['sts']=="edit"){
									$con->UpdatePinjaman($_POST['id'],$_POST['noAnggota'], $_POST['tanggal'], $_POST['lamaPinjaman'], $_POST['jumlah'],$angsur);
									$status="Edit Pinjaman";
								}
							}
							if($_GET['p']=="hapusPinjam"){
								$con->DeletePinjaman($_GET['id']);
								$status="Hapus Pinjaman";
							}
					?>



            </div>
             <h2>Berhasil <?php echo $status; ?> </h2>   
        </div>              

		<!--	<script type="text/javascript">
				window.location.assign("index.php?p=tPinjaman")
			</script>
