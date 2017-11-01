<!DOCTYPE html>
<html lang="en">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Company Information</title>
	
	<!-- Favico -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/assets_from_gentelella/information-icon.png" type="image/png">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/assets_from_gentelella_ocs/build/css/custom.min.css" rel="stylesheet">
  </head>
										
											
								 <body class="login">
									<div>
									  <a class="hiddenanchor" id="signup"></a>
									  <a class="hiddenanchor" id="signin"></a>

									  <div class="login_wrapper">
										<div class="animate form login_form">
										  <section class="login_content">
										
											  <?php echo form_open("auth/login");?>
											  <h1>Login Form</h1>
											  <div>
												
												<?php echo form_input($identity, '', 'class="form-control" placeholder="Email Address" autofocus="autofocus"');//placeholder="'.$this->lang->line("email_address").'"?>
											  </div>
											  <div>
												
												<?php echo form_input($password, '', 'class="form-control" placeholder="Password"');//placeholder="'.$this->lang->line("pw").'"?>
											  </div>
											  <div>
                                                                                              <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-default submit"');?>                                                                                                                                                                                           	
                                                                                              <a class="reset_pass" href="#">Lost your password?</a>
                                                                                          </div>
                                                                                                                                                                                    
											  <div class="clearfix"></div>
                                                                                          
											  <div class="separator">
												<p class="change_link">New to site?
												  <a href="#signup" class="to_register"> Create Account </a>
												</p>

												<div class="clearfix"></div>
                                                                                          <div>
                                                                                              <a class="btn btn-default submit" href="<?php echo base_url(); ?>" >Dashboard</a>                                                                                              
                                                                                          </div>
												  <h1><i class="fa fa-info-circle"></i></h1>
												  <p>Company Information © 2017</p>
												
											  </div>
											  <?php echo form_close();?>
											
										  </section>
										</div>

										<div id="register" class="animate form registration_form">
										  <section class="login_content">
											<form>
											  <h1>Create Account</h1>
											  <div>
												<input type="text" class="form-control" placeholder="Username" required="" />
											  </div>
											  <div>
												<input type="email" class="form-control" placeholder="Email" required="" />
											  </div>
											  <div>
												<input type="password" class="form-control" placeholder="Password" required="" />
											  </div>
											  <div>
												<a class="btn btn-default submit" href="index.html">Submit</a>
											  </div>

											  <div class="clearfix"></div>

											  <div class="separator">
												<p class="change_link">Already a member ?
												  <a href="#signin" class="to_register"> Log in </a>
												</p>

												<div class="clearfix"></div>
												
												<div>
												  <h1><i class="fa fa-info-circle"></i></h1>
												  <p>Company Information © 2017</p>
												</div>
											  </div>
											</form>
										  </section>
										</div>
									  </div>
									</div>
								  </body>
										

</html>