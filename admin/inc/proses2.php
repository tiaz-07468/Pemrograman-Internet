        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
					<?php

							include_once "../lib/function.php";

							if(!isset($_POST['sts'])){
								$_POST['sts']="";
							}else{
								if($_POST['sts']=="input"){
									$con->InsertSimpanan($_POST['nmrAnggota'], $_POST['tanggal'], $_POST['jnsSimpan'], $_POST['jumlah']);
									$status="Input Simpanan";
								}elseif($_POST['sts']=="edit"){
									$con->UpdateSimpanan($_POST['id'],$_POST['nmrAnggota'], $_POST['tanggal'], $_POST['jnsSimpan'], $_POST['jumlah']);
									$status="Edit Simpanan";
								}
							}
							if($_GET['p']=="hapusSimpan"){
								$con->DeleteSimpanan($_GET['id']);
									$status="Hapus Simpanan";
							}
					?>



            </div>
             <h2>Berhasil <?php echo $status; ?> </h2>   
        </div>              

			<script type="text/javascript">
				window.location.assign("index.php?p=tSimpanan")
			</script>
