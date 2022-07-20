<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/va_head_tittle.php'); ?>
</head>

<body>
	<?php $this->load->view('admin/_partials/va_navbar_header.php'); ?>

	<div class="container">
		<!-- <h1>Login</h1>
		<p>Masuk ke Dashboard</p> -->

		<?php if($this->session->flashdata('message_login_error')): ?>
			<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>
		
		<main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Silahkan Login</h3></div>
                            <div class="card-body">
							
                                <form action="" method="post" style="max-width: 600px;">
                                    <div class="form-floating mb-3">
										<input class="form-control" type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
										placeholder="Your username or email" value="<?= set_value('username') ?>" required />
										<div class="invalid-feedback">
											<?= form_error('username') ?>
										</div>
										<label for="name">Email/Username*</label>
									<!--
										<input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
										<label for="inputEmail">Email/Username*</label>
									-->
                                    </div>
                                    <div class="form-floating mb-3">
										<input class="form-control" type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
											placeholder="Enter your password" value="<?= set_value('password') ?>" required />
										<div class="invalid-feedback">
											<?= form_error('password') ?>
										</div>
										<label for="password">Password*</label>										
									<!--
										<input class="form-control" id="inputPassword" type="password" placeholder="Password" />
										<label for="inputPassword">Password*</label>
									-->
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Simpan Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Lupa password?</a>
										<input class="btn btn-primary" type="submit" class="button button-primary" value="Login">
                                    </div>
                                </form>

                            </div>

							<div class="card-footer text-center py-3">
								<div class="small">
									UAS-Pemrograman-WEB-Andhi.Prasetyo-C20010004</br>
									(CodeIgniter3.1.13 & StartBootstrap)															
								</div>
							</div>
							
							<!-- PENDAFTARAN AKUN BARU BELUM DIPERLUKAN DI PROGRAM INI
							<div class="card-footer text-center py-3">
                                <div class="small">
									<a href="register.html">Need an account? Sign up!</a>
								</div>
                            </div>
							-->

                        </div>
						
						</br></br> 
						<!--ini untuk membuat jarak antara form login
						dengan footer agar tidak saling menempel-->
						
                    </div>
                </div>
            </div>
        </main>

<!-- YANG DISINI MASIH MEPET SAMA BAWAH, CARIKAN SOLUSINYA-->

	</div>

	<?php $this->load->view('admin/_partials/va_footer.php'); ?>

</body>

</html>