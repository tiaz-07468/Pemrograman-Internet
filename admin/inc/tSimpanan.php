<?php 
    require_once "../lib/function.php";
    
    if(!isset($_GET['h'])){
        $page=1;
    }else{
        $page=$_GET['h'];
    }
 ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Simpanan</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
            <div class="table-responsive">   
            <h4><a href="index.php?p=addSimpanan"><i class="fa fa-plus"></i> Tambah Simpanan</a></h4>
            <br />
            </div>
            <form action="index.php?p=tSimpanan" method="POST">
            <div class="col-md-3">
            <div class="form-group">
                <select name="simpan" class="form-control" >
                      <option value="">--- Pilih Simpanan ---</option>
                      <option value="Simpanan Wajib">Simpanan Wajib</option>
                      <option value="Simpanan Pokok">Simpanan Pokok</option>
                      <option value="Simpanan Sukarela">Simpanan Sukarela</option>
                </select>
            </div>
        </div>
            <div class="col-md-4">
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Tampilkan</button>
            </div>
            </div>
            </form>
            <?php
                if(!isset($_POST['simpan'])){
                    $_POST['simpan']="";
                    echo " ";
                }else{
                        $jenis=$_POST['simpan'];
                    if($_COOKIE['status']=="Admin"){
                        $res=$con->TampilSimpanan($jenis,null);
                    }else if($_COOKIE['status']=="Anggota"){
                        $id=$_COOKIE['id'];
                        $res=$con->TampilSimpanan($jenis,$id);

                    }
            ?>
            <div class="table-responsive">   

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nomor Anggota</th>
                    <th>Tanggal</th>
                    <th>Jenis Simpanan</th>
                    <th>Id Anggota</th>
                    <th>Jumlah</th>
                    <?php
                        if($_COOKIE['status']=="Admin"){
                    ?>
                    <th colspan="2">Aksi</th>
                    <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($res as $data) {
                ?>
                <tr>
                    <td><?php echo "SPN-".$data['id'];?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['jnsSimpanan'];?></td>
                    <td><?php echo "MBR-".$data['idAnggota'];?></td>
                    <td><?php echo $data['jumlah'];?></td>
                    <?php
                        if($_COOKIE['status']=="Admin"){
                    ?>
                    <td><a href="index.php?p=editSimpan&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="index.php?p=hapusSimpan&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                    <?php } ?>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="4">TOTAL</td>
                    <td>
                        <?php
                        if(!isset($_POST['simpan'])){
                            $_POST['simpan']="";
                        }else{
                            $jenis=$_POST['simpan'];
                            if($_COOKIE['status']=="Admin"){
                                $jumlah = $con->SumSimpanan($jenis,null);
                            }else{
                                $id=$_COOKIE['id'];
                                $jumlah = $con->SumSimpanan($jenis,$id);
                            }
//                                    print_r($jumlah);
                            if($jumlah['total']==null){
                                echo "0";
                            }else{
                                echo $jumlah['total'];
                            }
                        }
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php
                 $baris=$con->countSim();
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
             }
            ?>
             <!-- /. PAGE INNER  -->
            </div>  
        </div>
