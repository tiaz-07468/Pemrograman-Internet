<?php 
 	require_once "../lib/function.php";
 	
 	if(!isset($_GET['h'])){
 		$page=1;
	 	$res=$con->TampilKoperasi();
 	}else{
 		$page=$_GET['h'];
	 	$res=$con->TampilKoperasi();
 	}
 ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Koperasi</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
			<div class="table-responsive">   
			<h4><a href="index.php?p=addKoperasi"><i class="fa fa-plus"></i>Tambah Koperasi</a></h4>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nama Koperasi</th>
						<th>Alamat Kantor</th>
						<th>Telepon</th>
						<th>E-mail</th>
						<th>Jenis Koperasi</th>
						<th colspan="3">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($res as $data) {
					?>
					<tr>
						<td><?php echo $data['nama'];?></td>
						<td><?php echo substr($data['alamat'], 0,15)."...";?></td>
						<td><?php echo $data['telpon'];?></td>
						<td><?php echo $data['email'];?></td>
						<td><?php echo $data['jenis'];?></td>
						<td><a href="index.php?p=editKoperasi&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td><a href="index.php?p=hapusKoperasi&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-remove"></span></a></td>
						<td><a href="index.php?p=detailKoperasi&id=<?php echo $data['id'];?>"><span class="fa fa-folder-open"></span></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
				 $baris = ceil((int)$con->countKop()/5);
				 if($baris<=1){
				 	echo "<span>&laquo; prev</span> | <span>next &raquo;</span>";
				 }else if($page>1 && $page<$baris){
				 	$next=$page+1;
				 	$prev=$page-1;
				 	echo "<a href=index.php?p=tAnggota&h=$next>&laquo; prev</a> | <a href=index.php?p=tAnggota&h=$next>next &raquo;</a>";				 	
				 }else if($page>=$baris){
				 	$prev=$page-1;
				 	echo "<a href=index.php?p=tAnggota&h=$prev>&laquo; prev</a> | <span>next &raquo;</span>";				 	
				 }else if($page<=1){
				 	$next=$page+1;
				 	echo "<span>&laquo; prev</span> | <a href=index.php?p=tAnggota&h=$next>next &raquo;</a>";
				 }
			?>
             <!-- /. PAGE INNER  -->
            </div>	
        </div>
