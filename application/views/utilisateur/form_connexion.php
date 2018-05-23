<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Connexion</title><!--a changer !!!!!!!!!!!!!!!!!!!!!!!!!-->

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
								<h1 class= "white"> ShareUrTalent</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												
												Svp entrez vos identifiants
											</h4>

											<div class="space-6"></div>

											<?php echo form_open('utilisateur/verif_connexion'); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Identifiant" value="<?php echo set_value('username') ?>" required />
														
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Mot de passe" value="<?php echo set_value('password') ?>" required/>
															
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<!--<button type="button" class="width-35 pull-right btn btn-sm btn-primary">-->
														<input type="submit" value="Se connecter" class="width-35 pull-right btn btn-sm btn-primary"/>
															
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="oubli_mdp"  class="forgot-password-link">
													
													Mot de passe oublié
												</a>
											</div>

											<div>
												<a href="inscription"  class="user-signup-link">
													Je veux m'inscrire
													
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery-2.1.4.min.js"></script>

	</body>
</html>