											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-star"></i>
																Notes
															</li>
														</ul><!-- /.breadcrumb -->

														
													</div>
											
											<div class="page-header">
												<h1>
													Les partages que vous devez noter 
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														 Afin de vous fournir un service à la heuteur, n'oubliez pas de noter les partages auxquels vous avez assisté
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
																	
												<?php if(empty($partage)){ ?>
													<div class="center">
													<h3 style="color:cornflowerblue; ">Vous n'avez pas de partages à noter. </h3>
												</div>
												<?php }else{ ?>


												<table id="simple-table" class="table  table-bordered table-hover">					
												<thead>
												<tr>
									
													<th>Intitulé</th>
													
													<th><i class="ace-icon fa fa-calendar bigger-110 hidden-480"></i>Date</th>
													<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Heure de début</th>
													<th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Heure de fin</th>

													<th>Ville</th>
													<th class="detail-col">Note</th>
												
												</tr>
											</thead>
											<tbody>

													<?php foreach ($partage as $item ){
															
											$ref1 = site_url("Partage/detail_partage_note/$item->num_partage");  ?>

												<tr>

													

													<td><?php echo $item->intitule ?></td>

													<td><?php echo $item->daterdv ?></td>

													<td><?php echo $item->heure_deb ?></td>
													
													<td><?php echo $item->heure_fin ?></td>

													<td><?php echo $item->ville ?></td>

													<td class="center">
														<div class="action-buttons">
															<a href=<?php echo $ref1 ?> class="bigger-140 show-details-btn" title="Noter">
																<button type="" class=" btn btn-sm btn-warning">
																<i class="ace-icon fa fa-star bigger-120 center"></i></button>
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

											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->