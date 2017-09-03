<!-- BEGIN PROFILE CONTENT -->
			<div class="profile-content">
				<div class="row">
					<div class="col-md-12">
						<div class="portlet light bordered">
							<div class="portlet-title tabbable-line">
								<div class="caption caption-md">
									<i class="icon-globe theme-font hide"></i>
									<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
								</div>
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
									</li>
									<li>
										<a href="#tab_1_2" data-toggle="tab">Interest</a>
									</li>
									<li>
										<a href="#tab_1_3" data-toggle="tab">Gallery</a>
									</li>
								</ul>
							</div>
							<div class="portlet-body">
								<div class="tab-content">
									<!-- PERSONAL INFO TAB -->
									<div class="tab-pane active" id="tab_1_1">
										<form role="form" action="process.php?action=personalInformation" method="POST">
											<input type="hidden" name="username" value="<?=$username?>">
											<div class="form-group">
												<label class="control-label" style="font-size: 12px; font-weight: bold; color: #AAB2B2;">Full Name</label></br>
												<?=$row['full_name']?></div>
											<div class="form-group">
												<label class="control-label" style="font-size: 12px; font-weight: bold; color: #AAB2B2;">Email</label></br>
												<?=$row['email']?></div>
										</form>
									</div>
									<!-- END PERSONAL INFO TAB -->
									<!-- INTEREST TAB -->
									<div class="tab-pane" id="tab_1_2">
										<form role="form" action="process.php?action=interest" method="POST">
											<input type="hidden" name="username" value="<?=$username?>">
											<div class="form-group">
												<label class="control-label"style="font-size: 12px; font-weight: bold; color: #AAB2B2;">Food</label></br>
												<?=$row['food']?></div>
											<div class="form-group">
												<label class="control-label" style="font-size: 12px; font-weight: bold; color: #AAB2B2;">Drinks</label></br>
												<?=$row['drinks']?></div>
											<div class="form-group">
												<label class="control-label"style="font-size: 12px; font-weight: bold; color: #AAB2B2;">Places</label></br>
												<?=$row['places']?></div>
										</form>
									</div>
									<!-- END INTEREST TAB -->
									<!-- PRIVACY SETTINGS TAB -->
									<div class="tab-pane" id="tab_1_3">
										
										<?php

											$ActQuery = mysql_query("select * from activity where user ='$profile' and image !=''");
											?>
											<!-- BEGIN PROFILE CONTENT -->
												<div class="profile-content">
													<div class="row">
														<div class="col-md-12">
															
															<?php
																	while($ActRow=mysql_fetch_array($ActQuery)){

																	
																	if(file_exists("../media/".$ActRow['image']) && $ActRow['image']!="")
																		$galImage = "../media/".$ActRow['image'];
																	else
																		$galImage = "../include/images/no-image.jpg";


																$Id = $row['Id'];
																?>
																
																	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
																		<a href="../media/<?=$galImage?>" data-sub-html="Demo Description">
																			<img class="img-responsive thumbnail" src="../media/<?=$galImage?>">
																		</a>
																		<?=$ActRow['create_datetime']?>
																	</div>
																	
																<?php
																	}
																?>
																
														</div>
													</div>
												</div>
												<!-- END PROFILE CONTENT -->
	
									</div>
									<!-- END PRIVACY SETTINGS TAB -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PROFILE CONTENT -->