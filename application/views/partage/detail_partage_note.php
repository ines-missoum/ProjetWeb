											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-calendar"></i>
																Note
															</li>

															<li>A noter</li>

															<?php foreach ($partage as $item ){?>

															<li class="active">Détail du partage " <?php echo $item->intitule ?> "</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Détails 
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Avant de noter, voici toutes les informations du partage sélectionné.
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

										

											<div class="space-6"></div>

										</div>

										<div>

										<div class="col-xs-12 col-sm-6">

											<div class="width-45 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
															<span class="white"><?php echo $item->intitule ?></span>
														</div>
													</div>

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
													<div class="profile-info-name"> Date </div>

													<div class="profile-info-value">
														<span class="editable" ><?php echo $item->daterdv ?>
													</span>
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

								
											<div class="col-xs-12 col-sm-6">

											<div class="center">
												<div class="space-30"></div>
												
												

											</div>

											<div class="space-12"></div>
													<?php $ref = site_url("Note/noter/$item->num_partage"); ?>
											
													<form class="form-horizontal" role="form" method ="post" action ="<?php echo $ref ?>">

														<div class="form-group">
														<label class="col-sm-3 control-label no-padding-top" > Note : </label>
														<input type="number" id="spinner1" name="note" value="<?php echo set_value('note') ?>" required />
													</div>
														<div class="space-6"></div>

														<div class="form-group">
														<label class="col-sm-3 control-label no-padding-top" > Commentaire : </label>
														<textarea   name="commentaire_note" class="col-xs-10 col-sm-5" rows="5" value="<?php echo set_value('commentaire_note') ?>" >
													</textarea>
												</div>
													<div class="center">
														<button type="submit" class="width-15 btn btn-sm btn-warning">
														<i class="ace-icon fa fa-star"></i>NOTER
														
														</button>
													</div>
													</form>
											<div class="space-20"></div>

											</div>

									<?php 
													}

													?>		

													

												
											<div class="row">
											<div class="col-xs-12">

												<a href="<?php echo base_url() ?>Note/a_noter">
									
													<button type="" class="btn pull-left btn-sm btn-primary btn-white btn-round">
														<i class="icon-on-left ace-icon fa fa-arrow-left"></i>
														<span class="bigger-110">Retour</span>
													</button>

												</a>
											


											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->