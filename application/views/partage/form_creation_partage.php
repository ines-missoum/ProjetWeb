											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-pencil-square-o"></i>
																Créer un partage
															</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Nouveau partage 
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Renseignez les éléments suivants et validez pour créer un nouveau partage
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
																	


											<div class="row">
											<div class="col-xs-12">
											
											<?php /*echo form_open('partage/creation_partage');*/ ?>
											<form class="form-horizontal" role="form" method ="post" action ="creation_partage">
											<fieldset>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right"> Intitulé du partage </label>

													<div class="col-sm-9">
													<input type="text" name="intitule"  placeholder="Intitulé" class="col-xs-10 col-sm-5" value="<?php echo set_value('intitule') ?>" required />
													</div>


											</div>


											<div class="form-group">		
											<label  class="col-sm-3 control-label no-padding-right">Catégorie</label>

															
															<div class="col-sm-4">
															<select name ="categorie" class="chosen-select form-control" data-placeholder="Choisissez une catégorie" required >

															<?php 
															
																foreach ($cat as $item ){
																	
																	echo "<option value = $item->num_categorie>$item->nom_categorie</option>";
																}

															?>
																

															</select>
														</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" > Nombre maximum de participants </label>

													<div class="col-sm-9">
														<input type="number" id="spinner2" name="nb_max" required />
														<div class="space-6"></div>
												
													</div>
											</div>

											

											<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" > Jour du partage </label>
														
															<div class=" col-sm-4">
																<div class="input-group">
																	<input class="form-control date-picker" name="jour" min="<?php echo mdate('%Y-%m-%d') ?>" id="id-date-picker-1" type="date" data-date-format="dd-mm-yyyy"  required />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
											</div>


											<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" > Heure de début du partage </label>
													<div class="col-sm-4">
														<div class="input-group bootstrap-timepicker">
															<input  type="time" name="h_debut" class="form-control" value="<?php echo set_value('h_debut') ?>" required />
															<span class="input-group-addon" required>
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>
													</div>
											</div>

											


											<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" > Heure de fin du partage </label>
													<div class="col-sm-4">
														<div class="input-group bootstrap-timepicker">
															<input type="time" name="h_fin"   class="form-control" value="<?php echo set_value('h_fin') ?>" min="<?php echo set_value('h_debut') ?>" required />
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>
													</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" > Lieu du partage(rue) </label>

													<div class="col-sm-9">
													<input type="text" name="rue"  placeholder="Rue" class="col-xs-10 col-sm-5" value="<?php echo set_value('rue') ?>" required />
													</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" > Lieu du partage(ville) </label>

													<div class="col-sm-9">
													<input type="text" name="ville"  placeholder="Ville" class="col-xs-10 col-sm-5" value="<?php echo set_value('ville') ?>" required />
													</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" > Décrivez en quoi consistera le partage: </label>

													<div class="col-sm-9">
													<textarea   name="description" class="col-xs-10 col-sm-5" rows="5" value="<?php echo set_value('description') ?>" required >
													</textarea>
													</div>

											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" > Vous pouvez ajouter un commentaire adressé aux participants:</label>

													<div class="col-sm-9">
													<textarea name="commentaire"  rows="3" class="col-xs-10 col-sm-5" value="<?php echo set_value('description') ?>" >
													</textarea>
													</div>

											</div>

													<div class="clearfix">
														<div class="col-sm-9">
														<button type="submit" class="width-20 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-check"></i>OK
														
														</button>	
														
													<!--</div>-->

													<div class="space-4"></div>
												</fieldset>
											</form>



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->