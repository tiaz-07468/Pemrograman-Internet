<!DOCTYPE html>
<?php
// session_start();
if(isset($_COOKIE['status'])!=null && $_COOKIE['status'] == 'Super Admin' || $_COOKIE['status'] == 'Admin' || $_COOKIE['status'] == 'Anggota'){

   if (!isset($_GET['p'])) { // default initialization
    $_GET['p'] = null;
} 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GKBI | Gabungan Koperasi Batik Indonesia</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
		<!-- Menu -->

	
           <!-- /. NAV TOP  -->
		<?php
        include "inc/mainMenu.php";
		$menu=$_GET['p'];
            switch($menu){
                case 'penghasilan':
                    include "inc/penghasilan.php";
                    break;
                case 'pengumuman':
                    include "inc/addPengumuman.php";
                    break;
                case 'addAnggota':
                    include "inc/addAnggota.php";
                    break;
                case 'tAnggota':
                    include "inc/tAnggota.php";
                    break;
                case 'addAdmin':
                    include "inc/addAdmin.php";
                    break;
                case 'tAdmin':
                    include "inc/tAdmin.php";
                    break;
                case 'addSimpanan':
                    include "inc/addSimpanan.php";
                    break;
                case 'tSimpanan':
                    include "inc/tSimpanan.php";
                    break;
                case 'addPinjaman':
                    include "inc/addPinjaman.php";
                    break;
                case 'tPinjaman':
                    include "inc/tPinjaman.php";
                    break;
                case 'insertProses':
                    include "inc/proses.php";
                    break;
                case 'insertProses1':
                    include "inc/proses1.php";
                    break;
                case 'editAnggota':
                    include "inc/addAnggota.php";
                    break;
                case 'hapusAnggota':
                    include "inc/proses.php";
                    break;
                case 'detailAnggota':
                    include "inc/detailAnggota.php";
                    break;
                case 'addKoperasi':
                    include "inc/addKoperasi.php";
                    break;
                case 'tKoperasi':
                    include "inc/tKoperasi.php";
                    break;
                case 'iKoperasi':
                    include "inc/kProses.php";
                    break;
                case 'editKoperasi':
                    include "inc/addKoperasi.php";
                    break;
                case 'hapusKoperasi':
                    include "inc/kProses.php";
                    break;
                case 'detailKoperasi':
                    include "inc/dKoperasi.php";
                    break;
                case 'editAdmin':
                    include "inc/addAdmin.php";
                    break;
                case 'hapusAdmin':
                    include "inc/proses1.php";
                    break;
                case 'detailAdmin':
                    include "inc/detailAnggota.php";
                    break;
                case 'detailAdmin':
                    include "inc/detailanggota.php";
                    break;
                case 'simpananAnggota':
                    include "inc/tSimpanan.php";
                    break;
                case 'insertProsesP':
                    include "inc/iPengumuman.php";
                    break;
                case 'editPengumuman':
                    include "inc/addPengumuman.php";
                    break;
                case 'hapusPengumuman':
                    include "inc/iPengumuman.php";
                    break;
                case 'detailPengumuman':
                    include "inc/detailPengumuman.php";
                    break;
                case 'addProduk':
                    include "inc/addProduk.php";
                    break;
                case 'insertSimpan':
                    include "inc/proses2.php";
                    break;
                case 'editSimpan':
                    include "inc/addSimpanan.php";
                    break;
                case 'hapusSimpan':
                    include "inc/proses2.php";
                    break;                
                case 'insertPinjaman':
                    include "inc/proses3.php";
                    break;
                case 'editPinjaman':
                    include "inc/addPinjaman.php";
                    break;
                case 'hapusPinjam':
                    include "inc/proses3.php";
                    break;
                case 'addProduk':
                    include "inc/addProduk.php";
                    break;
                 case 'insertProduk':
                    include "inc/prosesProduk.php";
                    break;                        
                default :
                    include "home.php";
                    break;

			}
		?>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
<?php
    }else{
       header('location:login.php?err=nologin');
    }
?>