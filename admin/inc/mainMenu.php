<?php
    require_once "../lib/function.php";
    $id=$_COOKIE['id'];
    $data=$con->getData($id);

?>
          <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
						<img src="inc/photo/<?php echo $data['foto']; ?>" class="user-image img-responsive"/>
						<?php echo "<h2>$_COOKIE[nama]</h2>"; ?>
					</li>
				
					<?php if ($_COOKIE['status']=='Super Admin'){ ?>
                    <li>
                        <a href="index.php?p=home"><i class="fa fa-laptop fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?p=pengumuman"><i class="fa fa-warning fa-3x"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a href="index.php?p=addProduk"><i class="fa fa-cloud fa-3x"></i> Produk</a>
                    </li>
					<li>
							<a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Admin<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.php?p=addAdmin">Tambah Admin</a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=tAdmin">Table Admin</a>
                                    </li>
                                </ul>
                            </li>	

                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Koperasi<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.php?p=addKoperasi">Tambah Koperasi</a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=tKoperasi">Daftar Koperasi</a>
                                    </li>
                                </ul>
                            </li>	
                    <?php
                        }else if ($_COOKIE['status']=='Admin'){
                     ?>
                    <li>
                        <a href="index.php?p=home"><i class="fa fa-laptop fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?p=penghasilan"><i class="fa fa-table fa-3x"></i> Penghasilan</a>
                    </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Anggota<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.php?p=addAnggota">Tambah Anggota</a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=tAnggota">Table Anggota</a>
                                    </li>
                                </ul>
                            </li>   
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Simpanan<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.php?p=addSimpanan">Tambah Simpanan</a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=tSimpanan">Table Simpanan</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Pinjaman<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.php?p=addPinjaman">Tambah Pinjaman</a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=tPinjaman">Table Pinjaman</a>
                                    </li>
                                </ul>
                            </li>            
                    <?php
                        }else if ($_COOKIE['status']=='Anggota'){
                     ?>
                    <li>
                        <a href="index.php?p=home"><i class="fa fa-laptop fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?p=penghasilan"><i class="fa fa-table fa-3x"></i> Penghasilan</a>
                    </li>
                    <li>
                        <a href="index.php?p=simpananAnggota"><i class="fa fa-table fa-3x"></i> Tabel Simpanan</a>
                    </li>
                    <li>
                        <a href="index.php?p=tPinjaman"><i class="fa fa-table fa-3x"></i> Tabel Pinjaman</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
