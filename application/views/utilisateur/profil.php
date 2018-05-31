											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-user"></i>
																Mon profil
															</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Mes données
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Accédez à toutes vos informations personnelles et modifiez les
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
																	
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" src="<?php echo base_url() ?>ace-master/assets/images/avatars/user-profil.png" class="editable img-responsive" alt="Alex's Avatar"  />
												</span>

												<div class="space-4"></div>

												<?php foreach ($utilisateur as $item ){?>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															
														
															<span class="white"><?php echo $item->nom_utilisateur ?></span>
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
														<span class="editable" ><?php echo $item->nom ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Prenom </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->prenom ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> @<i class="ace-icon fa fa-envelope"></i> </div>

													<div class="profile-info-value">
														
														<span class="editable" ><?php echo $item->email ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Ville </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" ><?php echo $item->ville ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Description </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->a_propos ?></span>
													</div>
												</div>

												

												
											</div>

											<div class="space-20"></div>

											</div>

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<div class="center">
												<a href="<?php echo base_url() ?>Utilisateur/modifier">
												<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
													<i class="ace-icon fa fa-cog bigger-150 middle orange2"></i>
													<span class="bigger-110">Modifier</span>

													<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
												</button>
											</a>
											</div>
										</div>

									</div>

									<?php 
													}

															?>
								

											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->