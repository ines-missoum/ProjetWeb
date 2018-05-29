<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SUT-Inscription</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() ?>ace-master/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	

<body class="login-layout" >


		<div class="main-container"  >
			<div class="main-content" >
				<div  class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1 class= "white"> Share<span class="green bolder">Ur</span>Talent</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">

								<div id="signup-box" class="signup-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-leaf green"></i>
												Inscription
											</h4>

											<div class="space-6"></div>
											<h5> Entez les informations: </h5>

											<?php echo form_open('Utilisateur/inscription'); ?>
												<fieldset>
													

													<label class="block clearfix">
															<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Identifiant" value="<?php echo set_value('username') ?>" required />
															<i class="ace-icon fa fa-user"></i>

															<h6 style="color:red;"><?php echo form_error('username');?></h6>
															</span>
														
													</label>

													<label class="block clearfix">
															<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Mot de passe"  required/>
															<i class="ace-icon fa fa-lock"></i>
															</span>
														
													</label>

													<label class="block clearfix">
															<span class="block input-icon input-icon-right">
															<input type="password" name="passconf" class="form-control" placeholder="Confirmer le mot de passe" required/>
															<i class="ace-icon fa fa-retweet"></i>
															<h6 style="color:red;" ><?php echo form_error('passconf');?></h6>
															</span>
													</label>

													<label class="block clearfix">
															<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required />
															<i class="ace-icon fa fa-envelope"></i>
															</span>
													</label>

													<label class="block clearfix">
														
															<input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php echo set_value('nom') ?>" required/>
															
															
													</label>

													<label class="block clearfix">
														
															<input type="text" name="prenom" class="form-control" placeholder="Prenom" value="<?php echo set_value('prenom') ?>" required/>
															
													</label>

													<label class="block clearfix">
														
															<input type="text" name="ville" class="form-control" placeholder="Ville" value="<?php echo set_value('ville') ?>" required/>

													</label>

													

													<div class="clearfix">


														<input type="submit" value="S'inscrire" class="width-35 pull-right btn btn-sm btn-success"/>

													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="<?php echo base_url() ?>Utilisateur/page_connexion" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Connexion
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

	
		
	</body>
</html>