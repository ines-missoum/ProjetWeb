											hello<?php echo form_open('utilisateur/profil'); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Identifiant" value="<?php echo set_value('username') ?>" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Mot de passe" value="<?php echo set_value('password') ?>" required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<button type="submit" class="width-40 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Connexion</span>
														</button>
														<!--<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<input type="submit" value="Se connecter" class="width-35 pull-left btn btn-sm btn-primary"/>-->
															
														
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>