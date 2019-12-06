<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Login</h3>
            <?php if (validation_errors()) : ?>
                 <div class="alert alert-danger">
                   <?php echo validation_errors(); ?>
                 </div>
             <?php endif; ?>
             <?php if($this->session->flashdata('log')): ?>
                 <div class="text-center alert alert-danger alert-dismissible" ><?php echo $this->session->flashdata('log'); ?></div>
             <?php endif; ?>
						<form action="<?php echo base_url('login'); ?>" method="post">
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text"  name="username" placeholder="Username" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password"  name="password" placeholder="Password" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Masuk">
						</form>
					</div>
					<div class="forg">
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
