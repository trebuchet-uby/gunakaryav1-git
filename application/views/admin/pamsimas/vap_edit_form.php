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
			
                <main> <!--
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
					
<!--EDIT FORM TARUH SINI -->

					<div id="content-wrapper">

						<div class="container-fluid">
							<?php $this->load->view("admin/_partials/va_breadcrumb.php") ?>
							<?php if ($this->session->flashdata('success')): ?>
							
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('success'); ?>
							</div>
							
							<?php endif; ?>
							
							<p><h4 class="mt-4 bg-info">Update Data Pelanggan</h4></p>

				<!-- Card  -->
							<div class="card mb-3">
								<div class="card-header">
									<a href="<?php echo site_url('admin/pamsimas/') ?>">
										<i class="fas fa-arrow-left"></i>
										Kembali
									</a>
								</div>
								
								<div class="card-body">

									<form action="" method="post" enctype="multipart/form-data">
										<!-- Note: atribut action dikosongkan, 
										artinya action-nya akan diproses 
										oleh controller tempat vuew ini digunakan. 
										Yakni index.php/admin/pamsimas/edit/ID --->

										<input type="hidden" name="id" value="<?php echo $pamsimas->id_pelanggan?>" />

										<div class="form-group">
											<label for="name">Nama Pelanggan *</label>
											<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
												type="text" name="nama" placeholder="Nama Pelanggan" value="<?php echo $pamsimas->nama ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('nama') ?>
											</div>
										</div>

										<div class="form-group">
											</br>
											<label for="name">Alamat *</label>
											<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
												type="text" name="alamat" min="0" placeholder="Alamat Pelanggan" value="<?php echo $pamsimas->alamat ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('alamat') ?>
											</div>
										</div>
										
										<div class="form-group">
											</br>
											<label for="name">NIK *</label>
											<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
												type="number" name="nik" min="0" placeholder="Nomor Induk Kependudukan" value="<?php echo $pamsimas->nik ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('nik') ?>
											</div>
										</div>

										<div class="form-group">
											</br>
											<label for="name">Jenis Langganan</label>
											<input class="form-control <?php echo form_error('langganan') ? 'is-invalid':'' ?>"
												type="text" name="langganan" placeholder="Jenis Langganan" value="<?php echo $pamsimas->langganan ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('langganan') ?>
											</div>
										</div>

									</br><input class="btn btn-primary" type="submit" name="btn" value="Save" />
							
									</form> <!--action="" method="post" enctype="multipart/form-data"-->
								</div> <!--class="card-body"-->

								<div class="card-footer small text-muted">
									* wajib diisi
								</div>

							</div> <!--class="card mb-3"-->
<!--EDIT FORM TARUH ATASNYA  -->
						</div> <!--class="container-fluid"-->
					</div> <!--id="content-wrapper"-->
					<?php $this->load->view("admin/_partials/va_footer.php") ?>
				</main>
			</div>
        </div>
    
    <?php $this->load->view("admin/_partials/va_scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/va_modal.php") ?>
    <?php $this->load->view("admin/_partials/va_js_link.php") ?>

    </body>

</html>
