<?php 
 	require_once "../lib/function.php";
 	
	$data=$con->getData($_GET['id']);
 ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Detail Anggota</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <?php
          				$kop=$con->getDataKoperasi($data['idKop']);	
                  ?>
			<div class="table-responsive">   
			<table class="table table-hover">
				<tdead>
					<tr>
						<td rowspan="9" width="300px"><img src="inc/photo/<?php echo $data['foto'];?>" width="300px" height="400px"/></td>
						<td width="200px">Koperasi</td>
						<td>:</td>
						<td><?php echo $kop['nama'];?></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?php echo $data['nama'];?></td>
					</tr>
					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td>:</td>
						<td><?php echo $data['tempat'].",".$data['tanggal'];?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><?php echo $data['alamat'];?></td>
					</tr>
					<tr>
						<td>Telpon</td>
						<td>:</td>
						<td><?php echo $data['telepon'];?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td><?php echo $data['email'];?></td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td>:</td>
						<td><?php echo $data['kdpos'];?></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><?php echo $data['agama'];?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><?php echo $data['sex'];?></td>
					</tr>
					<tr>
						<td colspan="4"><center><button class="btn btn-danger" onClick="history.go(-1)">Back</button></center></td>
					</tr>
				</tdead>
			</table>
             <!-- /. PAGE INNER  -->
            </div>	
        </div>
