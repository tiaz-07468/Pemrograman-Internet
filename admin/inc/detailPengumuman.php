 <?php 
    require_once "../lib/function.php";

        $data=$con->EditPengumuman($_GET['id']);

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
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><?php echo $data['judul']; ?></h4>
                                <h6><i class="glyphicon glyphicon-user"></i><em><?php echo $data['author'] ?></em></h6>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <?php echo $data['isi']; ?>
                                </p>
                            </div>
                            <div class="panel-heading">
                                <h6><?php echo $data['date']; ?></h6>
                            </div>

                        </div>
                        <center><button class="btn btn-danger" onClick="history.go(-1)">Back</button></center>
                    </div>
            </div>
        </div>