<?php
  include_once "../lib/function.php";
  if($_GET['p']==null || $_GET['p']=="addProduk" ){
    $res=array("kop"=>"","isi"=>"");
  }else{
    $res=$con->EditProduk($_GET['id']);
  }
?>

  <div id="page-wrapper" >
      <div id="page-inner">
          <div class="row">
              <div class="col-md-12">
               <h2>Tambah Produk</h2>   
              </div>
          </div>              
           <!-- /. ROW  -->
            <hr />
       <!-- /. PAGE INNER  -->
        <div class="col-md-6">
            <form action="index.php?p=insertProduk" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <?php
                $kop=$con->DataKoperasi();
                    echo '<select name="kop" class="form-control">
                          <option value="">--- Pilih Koperasi ---</option>';
                   foreach ($kop as $koperasi) {
                   ?>
                          <option value="<?php echo $koperasi['id'];?>"><?php echo $koperasi['nama'];?></option>
                   <?php
                    }
                    echo '</select>';
                    ?>
              </div>
              <div class="form-group">
                  <textarea class="form-control" rows="6" name="isi" placeholder="Keterangan Produk"  value="<?php echo $res['isi'] ?>" required data-validation-required-message="Isikan Pengumuman"><?php echo $res['isi']; ?></textarea>
              </div>
              <div class="form-group">
			        <input type="file" name="gambar" id="foto">
			      </div>
              <div class="col-lg-12 text-center">
                <?php
                if($_GET['p']=="addProduk"){
                      echo "<input type=hidden name=sts value=input>";                  
                }else{
                  echo "<input type=hidden name=sts value=edit>";                    
                  echo "<input type=hidden name=id value=$res[id]>";                    
                }?>
                      <button type="submit" class="btn btn-danger">Simpan</button>
              </div>
            </form>
        </div>
      </div>
  </div>