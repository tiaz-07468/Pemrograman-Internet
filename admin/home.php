 <?php 
    require_once "../lib/function.php";
    
    if(!isset($_GET['h'])){
        $page=1;
        $res=$con->TampilPengumuman();
    }else{
        $page=$_GET['h'];
        $res=$con->TampilPengumuman();
    }
 ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Halaman Dashboard</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
             <!-- /. PAGE INNER  -->
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h4>Pengumuman</h4></center>
                            </div>
                            <div class="panel-body">
                            <?php foreach ($res as $data) { ?>
                                    <a href="index.php?p=detailPengumuman&id=<?php echo $data['id'] ?>" >
                                    <?php echo $data['judul']; ?>
                                    </a>
                                    <?php
                                        if($_COOKIE['status']=='Super Admin'){
                                    ?>
                                        <a href="index.php?p=editPengumuman&id=<?php echo $data['id'] ?>"><i class="fa fa-fw fa-pencil"></i>Edit</a>
                                        <a href="index.php?p=hapusPengumuman&id=<?php echo $data['id'] ?>"><i class="glyphicon glyphicon-remove"></i>Hapus</a>
                                    <?php }?>                                
                                <br />
                                <?php }?>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>