<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Anggota Baru</h2>
            <hr>
        </div>
    </div>

	<div class="row">
	    <div class="col-md-6">
		      <div class="form-group">
		          <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required data-validation-required-message="Isikan Nama Lengkap">
		          <p class="help-block text-danger"></p>
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="tempat" placeholder="Tempat Lahir" required data-validation-required-message="Isikan Tempat">
		    </div>
		      <div class="form-group">
		        <input type="date" class="form-control" id="tanggal">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="alamat" placeholder="Alamat" required data-validation-required-message="Isikan Alamat">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="telepon" placeholder="Telepon" required data-validation-required-message="Isikan Nomor Telepon">
		      </div>
		      <div class="form-group">
		        <input type="email" class="form-control" id="email" placeholder="E-mail" required data-validation-required-message="Isikan Alamat E-mail">
		      </div>
		      <div class="form-group">
		        <input type="text" class="form-control" id="kdpos" placeholder="Kode Pos" required data-validation-required-message="Isikan Kode Pos">
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
		      <div class="form-group">
		        <input type="radio" name="sex" value="Perempuan" checked>Perempuan
		        <input type="radio" name="sex" value="Laki-laki"> Laki-laki
		      </div>
		      <div class="form-group">
		        <input type="file" class="" id="foto">
		      </div>
       	</div>
    </div>
    <div>
    	<div class="col-lg-12 text-center">
    	<button type="submit" class="btn btn-danger">Submit</button>
    </div>
</div>

</body>
</html>
