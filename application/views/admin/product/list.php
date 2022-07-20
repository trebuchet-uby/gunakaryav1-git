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
						
						<h2 class="mt-4">DATA PRODUK</h2>
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

				<!-- DataTables -->
							<div class="card mb-3">
								<div class="card-header">
									<a href="<?php echo site_url('admin/products/add') ?>">
										<i class="fas fa-plus"></i> 
										Tambah data baru
									</a>
								</div>

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover" id="datatablesSimple" width="100%" cellspacing="0">
								
											<thead>
												<tr class="bg-warning" >
													<th>Nama Produk</th>
													<th>Harga Produk</th>
													<th>Photo Produk</th>
													<th>Deskripsi Produk</th>
													<th>Aksi</th>
												</tr>
											</thead>
											
											<tfoot>
												<tr class="bg-warning" >
													<th>Nama Produk</th>
													<th>Harga Produk</th>
													<th>Photo Produk</th>
													<th>Deskripsi Produk</th>
													<th>Aksi</th>
												</tr>
											</tfoot>
								
											<tbody>
												<?php foreach ($products as $product): ?>
													<tr>
														<td width="150">
															<?php echo $product->name ?>
														</td>
														<td>
															<?php echo $product->price ?>
														</td>
														<td>
															<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
														</td>
														<td class="small">
															<?php echo substr($product->description, 0, 120) ?>...
														</td>
														<td width="250">
															<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
															class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
															<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
															 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a> 
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
											
										</table> <!--class="table table-hover" id="dataTable" width="100%" cellspacing="0"-->
									</div> <!--class="table-responsive"-->
								</div> <!--class="card-body"-->
							</div> <!--class="card mb-3"-->
						</div> <!--div class="container-fluid"-->
					</div> <!--id="content-wrapper"-->
					<?php $this->load->view("admin/_partials/va_footer.php") ?>
				</main>
			</div>
        </div> <!--id="layoutSidenav"-->
    
    <?php $this->load->view("admin/_partials/va_scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/va_modal.php") ?>
    <?php $this->load->view("admin/_partials/va_js_link.php") ?>

    <script>
    function deleteConfirm(url){
	        $('#btn-delete').attr('href', url);
	        $('#deleteModal').va_modal();
        }
    </script>

    </body>

</html>
