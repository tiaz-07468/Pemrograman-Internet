<?php
    include_once "../lib/function.php";
    if($_GET['p']==null ||$_GET['p']=="addPinjaman" ){
        $res=array("noAnggota"=>"","tanggal"=>"","lamaPinjaman"=>"","jumlah"=>"");
    }else{
        $res=$con->EditPinjaman($_GET['id']);
    }
?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Pinjaman</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="col-md-6">
                    <form action="index.php?p=insertPinjaman" method="post">
                        <div class="form-group">
                            
                            <?php 
                                if($_GET['p']==null ||$_GET['p']=="addPinjaman" ){
                                 $a=$con->getAnggota("Anggota");
                                  echo '<select name="noAnggota" class="form-control">
                                        <option value="">--- Nomor Anggota ---</option>';
                                 foreach ($a as $anggota) {
                                 ?>
                                        <option value="<?php echo $anggota['id'];?>">MBR-<?php echo $anggota['id'];?></option>
                                 <?php
                                  }
                                  echo '</select>';
                                }else{
                                ?>
                                <input type="text" class="form-control" name="noAnggota" disabled="disabled"  placeholder="Nomer Anggota" value="MBR-<?php echo $res['id'] ?>" required data-validation-required-message="Isikan Nomer Anggota">
                                <?php
                                    }
                                ?>                    
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tanggal" value="<?php echo $res['tanggal'] ?>">
                        </div>
                        <div class="form-group">
                            <select name="lamaPinjaman" class="form-control" >
                                  <option value="">--- Lama Pinjaman ---</option>
                                  <option value="3 bulan">3 bulan</option>
                                  <option value="5 bulan">5 bulan</option>
                                  <option value="12 bulan">12 bulan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="jumlah" placeholder="Nominal" value="<?php echo $res['jumlah'] ?>" required data-validation-required-message="Isikan Nominal Pinjaman">
                        </div>
                        <div class="col-lg-12 text-center">
                            <?php
                                if($_GET['p']=="addPinjaman"){
                                    echo "<input type=hidden name=sts value=input>";                  
                                }else{
                                  echo "<input type=hidden name=sts value=edit>";                    
                                  echo "<input type=hidden name=id value=$res[id]>";                    
                            }?>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </form>
                </div>
             <!-- /. PAGE INNER  -->
            </div>
        </div>