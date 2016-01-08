<?php
  include_once "../lib/function.php";
  if($_GET['p']==null || $_GET['p']=="pengumuman" ){
    $res=array("judul"=>"","isi"=>"");
  }else{
    $res=$con->EditPengumuman($_GET['id']);
  }
?>

  <div id="page-wrapper" >
      <div id="page-inner">
          <div class="row">
              <div class="col-md-12">
               <h2>Pengumuman</h2>   
              </div>
          </div>              
           <!-- /. ROW  -->
            <hr />
       <!-- /. PAGE INNER  -->
        <div class="col-md-6">
            <form action="index.php?p=insertProsesP" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $res['judul'] ?>" required data-validation-required-message="Isikan Judul">
              </div>
              <div class="form-group">
                  <textarea class="form-control" rows="6" name="isi" placeholder="Isi Pengumuman"  required data-validation-required-message="Isikan Pengumuman"><?php echo $res['isi']; ?></textarea>
              </div>
              <div class="col-lg-12 text-center">
                <?php
                if($_GET['p']=="pengumuman"){
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