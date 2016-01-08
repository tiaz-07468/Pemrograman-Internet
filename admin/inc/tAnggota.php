<?php 
    require_once "../lib/function.php";
 	if($_COOKIE['status']=="Super Admin"){
	 	if(!isset($_GET['h'])){
	 		$page=1;
	 	}else{
	 		$page=$_GET['h'];
	 	}
		 	$res=$con->getPageData($page,"Anggota");
	 }else if($_COOKIE['status']=="Admin"){	 	
	 	if(!isset($_GET['h'])){
	 		$page=1;
	 	}else{
	 		$page=$_GET['h'];
	 	}
	 		$koperasi = $_COOKIE['koperasi'];
		 	$res=$con->getPageDKop($page,"Anggota",$_COOKIE['koperasi']);
	 }
 ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel Anggota</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
			<div class="table-responsive">   
			<h4><a href="index.php?p=addAnggota"><i class="fa fa-plus"></i>Tambah Anggota</a></h4>
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
						<td><a href="index.php?p=editAnggota&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td><a href="index.php?p=hapusAnggota&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-remove"></span></a></td>
						<td><a href="index.php?p=detailAnggota&id=<?php echo $data['id'];?>"><span class="fa fa-folder-open"></span></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
				$baris=$con->countData();
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
