 <?php 
    require_once "../lib/function.php";
    $jumlah = $con->SumSimpananAll();
    $jumlah2 = $con->SumPinjaman();
    $anggota = $con->countData();
//                                    print_r($jumlah);

 ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Penghasilan Koperasi</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
             <!-- /. PAGE INNER  -->
                     <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h4>Balance Simpanan</h4></center>
                            </div>
                            <div class="panel-body">
                                <center><?php echo "Rp.".$jumlah['total'].",00"; ?> </center>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h4>Balance Pinjaman</h4></center>
                            </div>
                            <div class="panel-body">
                                <center><?php echo "Rp.".$jumlah2['total'].",00"; ?> </center>
                            </div>
                        </div>
                    </div>
        
                     <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h4>SHU</h4></center>
                            </div>
                            <div class="panel-body">
                                <center>
                                <?php
                                $shu=($jumlah['total']-$jumlah2['total'])*0.1;
                                $shu=$shu/(int)$anggota;
                                    echo "Rp.".$shu.",00"; 
                                 ?> 
                             </center>
                            </div>
                        </div>
                    </div>   

                     <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h4>Saldo Koperasi</h4></center>
                            </div>
                            <div class="panel-body">
                                <center>
                                <?php
                                $saldo=($jumlah['total']-$jumlah2['total']);
                                $shu=($jumlah['total']-$jumlah2['total'])*0.1;
                                $total=$saldo-$shu;
                                    echo "Rp.".$total.",00"; 
                                 ?> 
                             </center>
                            </div>
                        </div>
                    </div>
        
            </div>
        </div>