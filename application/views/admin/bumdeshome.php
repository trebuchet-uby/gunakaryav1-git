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
						
						<div id="content-wrapper">

							<?php $this->load->view("admin/_partials/va_breadcrumb.php") ?>
							<?php if ($this->session->flashdata('success')): ?>
							
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('success'); ?>
							</div>
							
							<?php endif; ?>
							
						
						
						<h2 class="mt-4" align="center">
							<p>Badan Usaha Milik Desa</p>
							<p>( BUMDes )</p>
							<p>
								<img  src="<?php echo base_url('assets/img/logo_sedang.jpg')?>"
								alt="Logo BUMDes"/>
							</p>
						</h2>
						
						<div align="justify">
							<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							Ut enim ad minim veniam, quis nostrud exercitation ullamco 
							laboris nisi ut aliquip ex ea commodo consequat. 
							Duis aute irure dolor in reprehenderit in voluptate velit esse 
							cillum dolore eu fugiat nulla pariatur. 
							Excepteur sint occaecat cupidatat non proident, 
							sunt in culpa qui officia deserunt mollit anim id est laborum.	
							</p>
						</div>
						
						</div>
						
						<!--KARTU KANAN KIRI -->
						<!--................................................-->
						
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
