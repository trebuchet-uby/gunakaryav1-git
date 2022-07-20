<!DOCTYPE html>
<html lang="en">

    <head>
		<!--partial = head-->
        <?php $this->load->view("admin/_partials/va_head_tittle.php") ?>
    </head>

    <body class="sb-nav-fixed">

        <!--partial = navbar-->
        <?php $this->load->view("admin/_partials/va_navbar_header.php") ?>
  
        <div id="layoutSidenav">
		
		<!--partial = sidebar-->
		<?php $this->load->view("admin/_partials/va_sidebar_kiri.php") ?>

<!-- SISI LEMBAR KERJA BESAR --> 

            <div id="layoutSidenav_content">
			
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Gunakarya V1.0</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
								Selamat datang Prototype Aplikasi Perdana BUMDes Gunakarya </br>
								Sumbung, Cepogo, Boyolali, Jawa Tengah 57362
							</li>
                        </ol>
						
						<!--KARTU KANAN KIRI -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">BUMDes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" 
                                        href="<?php echo site_url('admin/bumdeshome') ?>">
                                            Tentang BUMDes
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">PENGELOLA</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" 
                                            href="<?php echo site_url('admin/pengelola') ?>">
                                            Pengelola BUMDes
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">PAMSIMAS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" 
                                            href="<?php echo site_url('admin/pamsimas') ?>">
                                            Pelanggan Pamsimas
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">PRODUK</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" 
                                            href="<?php echo site_url('admin/products') ?>">
                                            Daftar Produk
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
							
                        </div>

<!-- CONTOH GRAFIK -->
                        <div class="row">
						
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Fluktuatif Saham
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
							
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Capaian Omset 2022
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
							
                        </div>
						
						<!--partial = contoh tabel-->
						<?php //$this->load->view("admin/_partials/va_tabel_pengurus.php") ?>

                    </div>
					
                </main>

                <?php $this->load->view("admin/_partials/va_footer.php") ?>

            </div>

        </div>
    
    <?php $this->load->view("admin/_partials/va_scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/va_modal.php") ?>
    <?php $this->load->view("admin/_partials/va_js_link.php") ?>

    </body>

</html>
