<?php
    include_once "../lib/function.php";
    if($_COOKIE['status']=="Admin"){
          $res=$con->TampilPinjaman();
    }else{
      $id=$_COOKIE['id'];
      $res=$con->TampilPinjamanAng($id);
  }
?>

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                 <h2>Tabel Pinjaman</h2>   
                </div>
            </div>              
             <!-- /. ROW  -->
            <hr />
            <div class="table-responsive">   
                <h4><a href="index.php?p=addPinjaman"><i class="fa fa-plus"></i>Tambah Pinjaman</a></h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nomor Anggota</th>
                        <th>Tanggal</th>
                        <th>Lama Peminjaman</th>
                        <th>id Anggota</th>
                        <th>Jumlah</th>
                        <th>Angsuran</th>
                        <?php if($_COOKIE['status']=="Admin"){ ?>
                        <th colspan="2">Aksi</th>
                        <?php } ?>
                    </tr>
                    <?php 
                        foreach ($res as $data) {
                    ?>
                    <tr>
                        <td><?php echo "PJM-".$data['id'];?></td>
                        <td><?php echo $data['tanggal'];?></td>
                        <td><?php echo $data['lamaPinjaman'];?></td>
                        <td><?php echo "MBR-".$data['idAnggota'];?></td>
                        <td><?php echo $data['jumlah'];?></td>
                        <td><?php echo $data['totAngsur']."/bln";?></td>
                        <?php if($_COOKIE['status']=="Admin"){ ?>
                        <td>
                            <a href="index.php?p=editPinjam&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                        <td>
                            <a href="index.php?p=hapusPinjam&id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-remove"></span></a>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                    <tr>
                            <td colspan="4">TOTAL</td>
                            <td colspan="4">
                                <?php
                                if($_COOKIE['status']=="Admin"){
                                    $jumlah = $con->SumPinjaman();
                                }else{
                                    $jumlah = $con->SumPinjamanAng($id);
//                                    print_r($jumlah);
                                }
                                    if($jumlah['total']<=0){
                                        echo "0";
                                    }else{
                                        echo $jumlah['total'];
                                    }
                                ?>
                            </td>
                        </tr>
                </thead>
            </table>
            </div>
         <!-- /. PAGE INNER  -->
        </div>
    </div>