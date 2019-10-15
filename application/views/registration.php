<?php $this->load->view('layout/header'); ?>
	
	<section class="py-0">
	<div class="background-holder overlay overlay-1" style="background-image:url(<?php echo base_url();?>assets/images/bandung_1.jpg);"></div>
	<!--/.background-holder-->
	<div class="container">
		<div class="row text-center h-full align-items-center justify-content-center pt-5 pb-4">
			<div class="col-lg-12">
				<div class="row justify-content-center">
					<div class="col-lg mt-4 mt-lg-0">
					<div class="background-11 radius-secondary p-3 p-md-5">
						<div class="row">
							<div class="col-6">
								<h4 class="mb-3">Register Bandung Smart City</h4>
								<form class="mt-4 text-left" action="<?php echo base_url() ?>index.php/registration/register" method="POST">
									<div class="row align-items-center">
									<div class="col-6">
										<input class="form-control" type="hidden" name="to" value="username@domain.extension">
										<input class="form-control" type="text" name="first_name" placeholder="First name" aria-label="Text input with dropdown button" required>
									</div>
									<div class="col-6">
										<input class="form-control" type="text" name="last_name" placeholder="Last name" aria-label="Text input with dropdown button" required>
									</div>
									<div class="col-12 mt-4">
										<input class="form-control" type="email" name="email" placeholder="Email Address" aria-label="Text input with dropdown button" required>
									</div>
									<div class="col-12 mt-4">
										<select name="role" class="form-control color-7" id="role" aria-label="Text input with dropdown button" required>
											<option>-Role-</option>
											<option value="pubic">Public</option>
											<option value="akademisi">Akademisi</option>
											<option value="pelaku_bisnis">Pelaku Bisnis</option>
											<option value="komunitas">Komunitas</option>
											<option value="dewan_smartcity">Dewan Smartcity</option>
											<option value="pemerintahan">Pemerintahan</option>
										</select>
									</div>
									<div class="col-12 mt-4">
										<input class="form-control" name="password" id="password" type="Password" placeholder="Password" aria-label="Text input with dropdown button" required>
									</div>
									<div class="col-12 mt-4">
										<input class="form-control" type="Password" name="re_password" placeholder="Confirm Password" aria-label="Text input with dropdown button" required>
									</div>
									</div>
							</div>
							<div class="col-6 p-md-1">
								<h4 class="mb-4">Terms &amp; Conditions</h4>
								<div class="col-12 mt-3" >
									<h5 class="fs-0 color-7 text-justify mb-4">
										<ol>
										<li>Must respect fellow members in posting topics/threads or comments.</li>
										<li>Always use good words.</li>
										<li>Do not post or add attachments to things that are pornographic.</li>
										<li>Do not post or add attachments to things that smell SARA</li>
										</ol>
									</h5> 
								</div>
								<div class="align-items-center col-md-12 mb-3">
									<label class="form-check-label">
									<input class="form-check-input" type="checkbox" required>
										<span class="color-7">I agree with the terms &amp; conditions</span>
									</label>
								</div>
								<div class="row justify-content-center mt-2">
									<div class="col-md-8 mb-3">
										<button class="btn btn-info btn-block" type="submit"> Create Account</button>
									</div>
								</div>
								</form>

							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>


<?php $this->load->view('layout/footer'); ?>