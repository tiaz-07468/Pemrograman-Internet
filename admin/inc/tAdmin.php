<?php 
 	require_once "../lib/function.php";
 	if(!isset($_GET['h'])){
 		$page=1;
	 	$res=$con->getPageData($page,"Admin");
 	}else{
 		$page=$_GET['h'];
	 	$res=$con->getPageData($page,"Admin");
 	}
 ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel Administrator</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
			<div class="table-responsive">   
			<h4><a href="index.php?p=addAdmin"><i class="fa fa-plus"></i>Tambah Admin</a></h4>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>E-mail</th>
						<th>Jenis Kelamin</th>
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
						<td><?php echo $data['telepon'];?></td>
						<td><?php echo $data['email'];?></td>
						<td><?php echo $data['sex'];?></td>
						<td><a href="index.php?p=editAdmin&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td><a href="index.php?p=hapusAdmin&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-remove"></span></a></td>
						<td><a href="index.php?p=detailAdmin&id=<?php echo $data['id'];?>"><span class="fa fa-folder-open"></span></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
				 $baris = $con->countData1();
				 $baris = ceil((int)$baris/5);
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
