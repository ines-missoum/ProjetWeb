											<div class="main-content">
												<div class="main-content-inner">
													<div class="breadcrumbs ace-save-state" id="breadcrumbs">
														<ul class="breadcrumb">
															<li>
																<i class="menu-icon fa fa-calendar"></i>
																<a href="<?php echo base_url() ?>partage/cette_semaine">A venir</a>
															</li>
														</ul><!-- /.breadcrumb -->

													</div>
											
											<div class="page-header">
												<h1>
													Votre programme
													<small>
														<i class="ace-icon fa fa-angle-double-right"></i>
														Voici les prochains partages que vous devez animer ou auxquels vous devez participer
													</small>
												</h1>
											</div><!-- /.page-header -->
											<div class="page-content">
																	
												<?php 
															
																foreach ($partage as $item ){
																	
																	echo $item->intitule;
																}

															?>

											<div class="row">
											<div class="col-xs-12">

											



											</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->