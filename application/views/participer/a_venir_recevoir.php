											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-calendar"></i>
																A venir
															</li>
															<li class="active">Partages à recevoir</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Votre programme
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Voici les prochains partages auxquels vous devez assister.
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">

												<?php if(empty($partage)){ ?>
													<div class="center">
													<h3 style="color:cornflowerblue; ">Vous n'avez rien de programmé. </h3>

													<a href="<?php echo base_url() ?>Partage/assister_partage"
											   
												<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
													<i class="ace-icon fa fa-globe"></i>
													<span class="bigger-110">Assister à un partage</span>

													<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
												</button>
											</a>	</div>
													<?php }else{ ?>

													
												<table id="simple-table" class="table  table-bordered table-hover">					
												<thead>
												<tr>
									
													<th class="detail-col">Details</th>
													<th>Intitulé</th>
													
													<th><i class="ace-icon fa fa-calendar bigger-110 hidden-480"></i>Date</th>
													<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Heure de début</th>
													<th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Heure de fin</th>

													<th>Ville</th>
													<th class="detail-col">NE PLUS PARTICIPER</th>
												
												</tr>
											</thead>
											<tbody>
													
															<?php foreach ($partage as $item ){

											$ref1 = site_url("Partage/detail_partage_a_recevoir/$item->num_partage"); 
											$ref2 = site_url("Participer/supp_participation/$item->num_partage"); ?>
												<tr>

													<td class="center">
														<div class="action-buttons">
															<a href='<?php echo $ref1 ?>' class="blue bigger-140 show-details-btn" title="Voir le détail">
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

													<td class="center">
														<div class="action-buttons">
															<a href=<?php echo $ref2 ?> class="blue bigger-140 show-details-btn" title="Ne plus participer">
																<button class="btn btn-danger btn-sm">
																	<i class="ace-icon fa fa-trash icon-only bigger-150"></i>
																</button>
																<span class="sr-only">Ne plus participer</span>
															</a>
														</div>
													</td>


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