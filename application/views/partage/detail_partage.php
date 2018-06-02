											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-star"></i>
																<a href="#">******</a>
															</li>

															<li class="active">********</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Mes notes 
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Detail du partage
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
												
																	<?php foreach ($partage as $item ){?>

												<?php echo $item->intitule;


												

												$ref = site_url("Utilisateur/verif_points/$item->num_partage"); ?>
												<?php } ?>

												
												<a href=<?php echo $ref ?>
												<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
													<i class="ace-icon fa fa-cog bigger-150 middle orange2"></i>
													<span class="bigger-110">Participer</span>

													<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
												</button>
											</a>
											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->