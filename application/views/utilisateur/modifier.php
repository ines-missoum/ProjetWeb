											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-cog"></i>
																Modifier
															</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Modifier votre profil
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Vous pouvez mettre à jour vos informations personnelles
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
																	
												<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<form class="form-horizontal" role="form" method ="post" action ="valid_modif">

												<span class="profile-picture">
													<img id="avatar" src="<?php echo base_url() ?>ace-master/assets/images/avatars/user-profil.png" class="editable img-responsive" alt="Alex's Avatar"  />

												</span>

												<div class="space-4"></div>

												<?php foreach ($utilisateur as $item ){?>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															
														
															<span class="white"><?php echo $item->nom_utilisateur ?>
																
															</span>
														</a>

														
													</div>
												</div>
											</div>

										</div>

										<div class="col-xs-12 col-sm-9">

											<div class="center">

												<span class="btn btn-app btn-sm btn-yellow no-hover">
													<!--<i class="ace-icon fa fa-star">-->
													<span class="ace-icon fa fa-star"> </span>
													<span class="line-height-1 smaller-90"> <?php echo $item->nb_points ?></span>
												</span>

											</div>

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Nom </div>

													<div class="profile-info-value">
														<span class="editable" ><input type="text" name="nom" class="col-xs-10 col-sm-5" value="<?php echo $item->nom ?>" />
															<h6 style="color:red;" ><?php echo form_error('nom');?></h6></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Prenom </div>

													<div class="profile-info-value">
														<span class="editable" ><input type="text" name="prenom" class="col-xs-10 col-sm-5" value="<?php echo $item->prenom ?>" />
															<h6 style="color:red;" ><?php echo form_error('prenom');?></h6></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> @<i class="ace-icon fa fa-envelope"></i> </div>

													<div class="profile-info-value">
														
														<span class="editable" ><input type="email" name="email" class="col-xs-10 col-sm-5" value="<?php echo $item->email ?>" />
														<h6 style="color:red;" ><?php echo form_error('email');?></h6></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Ville </div>

													<div class="profile-info-value">
														
														<span class="editable" ><input type="text" name="ville" class="col-xs-10 col-sm-5" value="<?php echo $item->ville ?>" />
															<h6 style="color:red;" ><?php echo form_error('ville');?></h6></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Description </div>

													<div class="profile-info-value">
														<span class="editable" ><input type="text"  name="a_propos" class="col-xs-10 col-sm-5" value="<?php echo $item->a_propos ?>" /></span>
													</div>
												</div>

												

												
											</div>

											<div class="space-20"></div>

											</div>

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<div class="center">
												
												
												<button type="submit" class="btn btn-sm btn-primary btn-white btn-round btn-success">
													<i class="ace-icon fa fa-check bigger-150 middle green"></i>
													<span class="bigger-110">Valider les modifications</span>

												</button>
											
											</div>

										</form>
										</div>
										<a href="<?php echo base_url() ?>Utilisateur/profil">
									
										<button type="" class="btn btn-sm btn-primary btn-white btn-round">
													<i class="icon-on-left ace-icon fa fa-arrow-left"></i>
													<span class="bigger-110">Retour</span>
												</button>

										</a>
									</div>

									<?php 
													}

															?>
								

											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->

											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->