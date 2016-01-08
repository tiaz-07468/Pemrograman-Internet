<?php 
	include_once "../lib/function.php";
	if($_GET['p']==null ||$_GET['p']=="addKoperasi" ){
		$res=array("nama"=>"","tanggal"=>"","alamat"=>"","telpon"=>"","email"=>"", "kdpos"=>"");
	}else{
		$res=$con->getDataKoperasi($_GET['id']);
	}
?>  

  <script src="inc/assets/js/jquery.min.js"></script>
  <script src="inc/assets/js/bootstrap.min.js"></script>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
							<h2 class="section-heading">Koperasi Baru</h2>
                    </div>
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
		    <div class="col-md-6">
		    	<form action="index.php?p=iKoperasi" method="post" enctype="multipart/form-data">
			      	<!-- Data Detail Anggota -->		    		
		    		<div class="judul-form">
		    			Data Koperasi
		    			<hr />
		    		</div>
		    	<?php
		    	if($_GET['p']=="editKoperasi"){
		    	?>	
			      <div class="form-group">
			          <input type="text" class="form-control" name="id" placeholder="Kode Koperasi" value="<?php echo $res['id']; ?>" disabled="disabled">
			      </div>
			      <?php } ?>
			      <div class="form-group">
			          <input type="text" class="form-control" name="name" placeholder="Nama Koperasi" value="<?php echo $res['nama'] ?>" required data-validation-required-message="Isikan Nama Lengkap">
			      </div>
			      <div class="form-group">
			        <input type="date" class="form-control" name="tanggal" value="<?php echo $res['tanggal'] ?>" placeholder="Tanggal Berdiri">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="alamat" placeholder="Alamat Koperasi" value="<?php echo $res['alamat'] ?>" required data-validation-required-message="Isikan Alamat">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $res['telpon'] ?>" required data-validation-required-message="Isikan Nomor Telepon">
			      </div>
			      <div class="form-group">
			        <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $res['email'] ?>" required data-validation-required-message="Isikan Alamat E-mail">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="kdpos" placeholder="Kode Pos" value="<?php echo $res['kdpos'] ?>" required data-validation-required-message="Isikan Kode Pos">
			      </div>
			      <div class="form-group">
			        <select name="Jenis" class="form-control">
			              <option value="option1">----Jenis Koperasi----</option>
			              <option value="Simpan Pinjam">Simpan Pinjam</option>
			              <option value="Jasa">Jasa</option>
			              <option value="Simpan Pinjam dan Jasa">Simpan Pinjam Dan Jasa</option>
			        </select>
			      </div>
			      <div class="form-group">
			        <input type="file" name="gambar" id="foto">
			      </div>
			      	<?php
						if($_GET['p']=="addKoperasi" ){
					        echo"<input type=hidden name=sts value=input>";					        
					     }elseif($_GET['p']=="editKoperasi" ){
					     	echo"<input type=hidden name=sts value=edit>";
					     	echo"<input type=hidden name=id value=$res[id]>";
					     }
			      	?>
			      	<!-- Data User login-->

					<div class="col-lg-12 text-center">
							<button type="submit" class="btn btn-danger">Submit</button>
					</div>
				</form>
       	</div>
	
		<!-- /. PAGE INNER  -->
        </div>
    </div>