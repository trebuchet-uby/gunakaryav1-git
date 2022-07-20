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
							
							<p><h4 class="mt-4 bg-warning">Edit / Ubah Data Produk</h4></p>

				<!-- Card  -->
							<div class="card mb-3">
								<div class="card-header">
									<a href="<?php echo site_url('admin/products/') ?>">
										<i class="fas fa-arrow-left"></i>
										Kembali
									</a>
								</div>
								
								<div class="card-body">

									<form action="" method="post" enctype="multipart/form-data">
										<!-- Note: atribut action dikosongkan, 
										artinya action-nya akan diproses 
										oleh controller tempat vuew ini digunakan. 
										Yakni index.php/admin/products/edit/ID --->

										<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

										<div class="form-group">
											<label for="name">Nama Produk *</label>
											<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
												type="text" name="name" placeholder="Nama Produk" value="<?php echo $product->name ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('name') ?>
											</div>
										</div>

										<div class="form-group">
											</br>
											<label for="price">Harga Produk</label>
											<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
												type="number" name="price" min="0" placeholder="Harga Produk" value="<?php echo $product->price ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('price') ?>
											</div>
										</div>

										<div class="form-group">
											</br>
											<label for="name">Photo Produk</label><br>
											<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
												type="file" name="image" />
											<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('image') ?>
											</div>
										</div>
										
										<div class="form-group">
											</br>
											<label for="name">Deskripsi Produk *</label>
											<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
												name="description" placeholder="Deskripsi produk..."><?php echo $product->description ?></textarea>
											<div class="invalid-feedback">
												<?php echo form_error('description') ?>
											</div>
										</div>

										<input class="btn btn-primary" type="submit" name="btn" value="Save" />
							
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
