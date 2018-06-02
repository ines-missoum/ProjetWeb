											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-globe"></i>
																Assister à un partage
															</li>

															<?php foreach ($partage as $item ){?>

															<li class="active">Détail du partage " <?php echo $item->intitule ?> "</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Détails 
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Avant de vous décider, voici toutes les informations du partage sélectionné.
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
																				
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="space-12"></div>
										<div class="space-12"></div>
										<div class="space-12"></div>
										
										</div>

										<div class="col-xs-12 col-sm-6">

											<div class="center">

												<span class="btn btn-app btn-sm btn-danger no-hover">
													<!--<i class="ace-icon fa fa-star">-->
													<span class="ace-icon fa fa-users"> </span>
													<span class="line-height-1 smaller-90"> encore</br><?php echo $item->places_dispo ?> places</span>
												</span>

												<span class="btn btn-app btn-sm btn-grey no-hover">
													<!--<i class="ace-icon fa fa-star">-->
													<span class="ace-icon fa fa-calendar"> </span>
													<span class="line-height-1 smaller-90"> </br><?php echo $item->daterdv ?></span>
												</span>

											</div>

											<div class="space-12"></div>
											<div class="space-12"></div>
											
											<h5 style="color:cornflowerblue; " >Informations sur le créateur du partage : </h5>
										    
											<div class="profile-user-info profile-user-info-striped">

												<div class="profile-info-row">

													<div class="profile-info-name"> Pseudo</div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->nom_utilisateur ?></span>
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

												
											</div>

											<div class="space-20"></div>

											</div>

											<div class="space-6"></div>

										</div>

										<div>

											<div class="width-45 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
															<span class="white"><?php echo $item->intitule ?></span>
														</div>
													</div>

										<div class="col-xs-12 col-sm-6">

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">

												<div class="profile-info-row">
													<div class="profile-info-name"> Catégorie</div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->nom_categorie ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Maximum </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->nb_max_personne ?> personnes</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Adresse RDV </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->adresserdv ?></span>
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
													<div class="profile-info-name"> Heure </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->heure_deb ?>
														-
														<?php echo $item->heure_fin ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Description </div>

													<div class="profile-info-value">
														
														<span class="editable" ><?php echo $item->description ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> <h5 style="color:red;">A noter </h5> </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->commentaire_partage ?></span>
													</div>
												</div>

												
											</div>

											<div class="space-20"></div>

											</div>

											<div class="space-6"></div>

										</div>

								
											<div class="center">
												<?php $ref = site_url("Utilisateur/verif_points/$item->num_partage"); ?>

												
												
											</div>

									<?php 
													}

													?>		


											

												
											<div class="row">
											<div class="col-xs-12">

												<a href="<?php echo base_url() ?>Partage/assister_partage">
												
															<button type="" class="btn btn-sm btn-primary btn-white btn-round">
																<i class="icon-on-left ace-icon fa fa-arrow-left"></i>
																<span class="bigger-110">Retour</span>
															</button>

													</a>

											<a href=<?php echo $ref ?>
											   
												<button type="button" class="btn btn-sm btn-primary btn-round">
													<i class="ace-icon fa fa-check"></i>
													<span class="bigger-110">Participer</span>

												</button>
											</a>





											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->