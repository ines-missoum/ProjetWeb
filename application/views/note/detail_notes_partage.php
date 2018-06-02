											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-list"></i>
																Historique
															</li>
															<li class="active">Partages offerts</li>
															<li class="active">Mes notes</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Souvenirs...
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Voici les notes que vous avez obtenus pour le partage selectionné.
														Prenez les commentaires en compte pour améliorer vos partages ;)
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
												
												<?php if(empty($note)){ ?>
													<div class="center">
													<h3 style="color:cornflowerblue; ">Ce partage n'a pas encore été noté . </h3></div>
												<?php }else{ ?>

												<table id="simple-table" class="table  table-bordered table-hover">					
												<thead>
												<tr>

													<th>Participant</th>
													<th>Note</th>
													<th>Commentaire</th>
												
												</tr>
											</thead>
											<tbody>

													<?php foreach ($note as $item ){?>
												<div class="center">
												<h3 style="color:cornflowerblue; ">" <?php echo $item->intitule ?> "</h3>
											    </div>
												<tr>

													<td><?php echo $item->nom_utilisateur ?></td>

													<td><?php echo $item->note ?><i class="menu-icon fa fa-star orange"></i></td>

													<td><?php echo $item->commentaire_note ?></td>
													

												</tr>
												<?php 
													}}

															?>
											</tbody>
										</table>

											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->