<?php 
 	include_once "../lib/function.php";
	$data=$con->getDataKoperasi($_GET['id']);
 ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Detail Koperasi</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
			<div class="table-responsive">   
			<table class="table table-hover">
				<tdead>
					<tr>
						<td rowspan="8" width="300px"><img src="inc/photo/<?php echo $data['foto'];?>" width="300px" height="400px"/></td>
						<td width="200px">Nama Koperasi</td>
						<td>:</td>
						<td><?php echo $data['nama'];?></td>
					</tr>
					<tr>
						<td>Tanggal Berdiri</td>
						<td>:</td>
						<td><?php echo $data['tanggal'];?></td>
					</tr>
					<tr>
						<td>Alamat Koperasi</td>
						<td>:</td>
						<td><?php echo $data['alamat'];?></td>
					</tr>
					<tr>
						<td>Telpon</td>
						<td>:</td>
						<td><?php echo $data['telpon'];?></td>
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
						<td>Jenis Koperasi</td>
						<td>:</td>
						<td><?php echo $data['jenis'];?></td>
					</tr>
					<tr>
						<td colspan="4"><center><button class="btn btn-danger" onClick="history.go(-1)">Back</button></center></td>
					</tr>
				</tdead>
			</table>
             <!-- /. PAGE INNER  -->
            </div>	
        </div>
