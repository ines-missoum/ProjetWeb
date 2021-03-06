<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>ShareUrTalent</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/chosen.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>ace-master/assets/css/bootstrap-colorpicker.min.css" />

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

	<body class="skin-2" >
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo base_url() ?>Utilisateur/" class="navbar-brand">
						<small class="bolder">
							ShareUrTalent
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					
					<ul class="nav ace-nav">

						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url() ?>ace-master/assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Bienvenue</small>
									<?php echo $this->encryption->decrypt(get_cookie('cookieUtilisateur')); ?>
								</span>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li class="center">
									<a href="<?php echo base_url() ?>Utilisateur/modifier">
									<i class="ace-icon fa fa-cog"></i>

										Modifier
									</a>
								</li>

								<li class="center">
									<a href="<?php echo base_url() ?>Utilisateur/profil">
										<i class="ace-icon fa fa-user"></i>
										Mon profil
									</a>
								</li>

								<li class="divider"></li>

								<li class="center">
									<a href="<?php echo base_url() ?>Utilisateur/deconnexion">
									<i class="ace-icon fa fa-power-off"></i>

										Deconnexion
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						

						<button class="btn btn-info">
							<a href="<?php echo base_url() ?>Utilisateur/modifier">
							<i class="ace-icon fa fa-cog white"></i>
						</a>
						</button>

						<button class="btn btn-warning">
							<a href="<?php echo base_url() ?>Utilisateur/profil">
							<i class="ace-icon fa fa-user white"></i>
						</a>
						</button>

						<button class="btn btn-danger">
							<a href="<?php echo base_url() ?>Utilisateur/deconnexion">
							<i class="ace-icon fa fa-power-off white"></i>
						</a>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo base_url() ?>Utilisateur/index">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Accueil </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-calendar "></i>
							<span class="menu-text">
								A venir
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="<?php echo base_url() ?>Partage/a_venir_offrir">
									<i class="menu-icon fa fa-caret-right"></i>
									Partages à offrir
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url() ?>Participer/a_venir_recevoir"">
									<i class="menu-icon fa fa-caret-right"></i>
									Partages à recevoir
								</a>

								<b class="arrow"></b>
							</li>

						
						</ul>
					</li>

					<li class="">
						<a href="<?php echo base_url() ?>Partage/creation_partage">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Créer un partage </span>
						</a>

						<b class="arrow"></b>

						
					</li>

					<li class="">
						<a href="<?php echo base_url() ?>Partage/assister_partage">
							<i class="menu-icon fa fa-globe"></i>
							<span class="menu-text"> Assister à un partage </span>
						</a>

						
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Historique </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">


							<li class="">
								<a href="<?php echo base_url() ?>Partage/historique_offrir">
									<i class="menu-icon fa fa-caret-right"></i>
									Partages offerts
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url() ?>Participer/historique_recevoir">
									<i class="menu-icon fa fa-caret-right"></i>
									Partages reçus
								</a>

								<b class="arrow"></b>
							</li>


							
						</ul>
					</li>

					<li class="">
						<a href="<?php echo base_url() ?>Note/a_noter">
							<i class="menu-icon fa fa-star"></i>
							<span class="menu-text"> A noter </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<?php

			/*foreach ($cat as $item ){
																	
			echo $item->nom_categorie;

			}*/
			 ?>
				<?php echo $page; ?>
								
							

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120 bolder">
						Share<span class="pink">Ur</span>Talent &copy; 2018
						</span>

					</div>
				</div>
			</div>


			
		</div><!-- /.main-container -->

<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		
		<script src="<?php echo base_url() ?>ace-master/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.flot.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.flot.resize.min.js"></script>


		<script src="<?php echo base_url() ?>ace-master/assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/spinbox.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/moment.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/daterangepicker.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/autosize.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.inputlimiter.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url() ?>ace-master/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url() ?>ace-master/assets/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
			<script type="text/javascript">
			jQuery(function($) {
			
				$('#spinner2').ace_spinner({value:0,min:1,max:10,step:1, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});

				$('#spinner1').ace_spinner({value:0,min:0,max:5,step:1, btn_up_class:'btn-warning' , btn_down_class:'btn-warning'})
				
				$('.timepicker').timepicker({
					minuteStep: 1,
					showSeconds: false,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('.timepicker').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				
				
			});
		</script>
		
	</body>
</html>
