											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-globe"></i>
																Assister à un partage
															</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Rechercher un partage
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Share<span class="pink bolder">Ur</span>Talent a tellement de talents à vous offrir ! Choisissez celui qui vous plait ! 

													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
													
													<table id="simple-table" class="table  table-bordered table-hover">					
												<thead>
												<tr>
									
													<th class="detail-col">Details</th>
													<th>Intitulé</th>
													
													<th><i class="ace-icon fa fa-calendar bigger-110 hidden-480"></i>Date</th>
													<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Heure de début</th>
													<th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Heure de fin</th>

													<th>Ville</th>

													<th>Places restantes</th>
												
												</tr>
											</thead>
											<tbody>

													<?php foreach ($partage as $item ){
															

											$ref = site_url("Partage/detail_partage/$item->num_partage"); ?>

												<tr>

													<td class="center">
														<div class="action-buttons">
															<a href=<?php echo $ref ?> class="blue bigger-140 show-details-btn" title="Show Details">
																<i class="ace-icon fa fa-angle-double-down"></i>
																<span class="sr-only">Voir le détail</span>
															</a>
														</div>
													</td>

													<td><?php echo $item->intitule ?></td>

													<td><?php echo $item->daterdv ?></td>

													<td><?php echo $item->heure_deb ?></td>
													
													<td><?php echo $item->heure_fin ?></td>

													<td><?php echo $item->ville ?></td>

													<td><?php echo $item->places_dispo ?></td>
													

												</tr>
												<?php 
													}

															?>
											</tbody>
										</table>

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