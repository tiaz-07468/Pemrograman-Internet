<?php 
	require_once "../lib/function.php";
	if($_GET['p']==null ||$_GET['p']=="addAdmin" ){
		$res=array("nama"=>"","tempat"=>"","tanggal"=>"","alamat"=>"","telepon"=>"","email"=>"", "kdpos"=>"");
		$kop=$con->DataKoperasi();
	}else{

		$res=$con->getDataAnggota($_GET['id']);
	}
?>  

  <script src="inc/assets/js/jquery.min.js"></script>
  <script src="inc/assets/js/bootstrap.min.js"></script>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
							<h2 class="section-heading">Administrator Baru</h2>
                    </div>
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
		    <div class="col-md-6">
		    	<form action="index.php?p=insertProses1" method="post" enctype="multipart/form-data">
			      	<!-- Data Detail Anggota -->		    		
		    		<div class="judul-form">
		    			<span class="judul-form">Data Admin</span>
		    			<hr />
		    		</div>
			      <div class="form-group">
			        <select name="idKop" class="form-control">
			              <option value="option1">-----Koperasi----</option>
			        	<?php 
			        	foreach ($kop as $data) {
			              echo "<option value=$data[id]>$data[nama]</option>";
			          }
			          ?>
			        </select>
			      </div>
			      <div class="form-group">
			          <input type="text" class="form-control" name="name" placeholder="Nama" value="<?php echo $res['nama'] ?>" required data-validation-required-message="Isikan Nama Lengkap">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" value="<?php echo $res['tempat'] ?>" required data-validation-required-message="Isikan Tempat">
			      </div>
			      <div class="form-group">
			        <input type="date" class="form-control" name="tanggal" value="<?php echo $res['tanggal'] ?>">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $res['alamat'] ?>" required data-validation-required-message="Isikan Alamat">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $res['telepon'] ?>" required data-validation-required-message="Isikan Nomor Telepon">
			      </div>
			      <div class="form-group">
			        <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $res['email'] ?>" required data-validation-required-message="Isikan Alamat E-mail">
			      </div>
			      <div class="form-group">
			        <input type="text" class="form-control" name="kdpos" placeholder="Kode Pos" value="<?php echo $res['kdpos'] ?>" required data-validation-required-message="Isikan Kode Pos">
			      </div>
			      <div class="form-group">
			        <select name="Agama" class="form-control">
			              <option value="option1">----Agama----</option>
			              <option value="Islam">Islam</option>
			              <option value="Kristen">Kristen</option>
			              <option value="Katolik">Katolik</option>
			              <option value="Hindu">Hindu</option>
			              <option value="Budha">Budha</option>
			        </select>
			      </div>
			      <div class="form-group" value="<?php echo $res['sex'] ?>">
			        <input type="radio" name="sex" value="Perempuan" checked>Perempuan
			        <input type="radio" name="sex" value="Laki-laki"> Laki-laki
			      </div>
			      <div class="form-group">
			        <input type="file" name="gambar" id="foto">
			      </div>
			      	<?php
						if($_GET['p']=="addAdmin" ){
					        echo"<input type=hidden name=sts value=input>";
					        echo "<div class=judul-form>
				    					Admin Login
					    			<hr />
						    		</div>
										  <div class=form-group>
								         	 <input type=text class=form-control name=username placeholder=Username required data-validation-required-message=Isikan Username>
									      </div>
									      <div class=form-group>
									        <input type=password class=form-control name=password placeholder=Password required data-validation-required-message=Isikan Password>
									      </div>";					        
					     }elseif($_GET['p']=="editAdmin" ){
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