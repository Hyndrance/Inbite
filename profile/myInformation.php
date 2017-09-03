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
										<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
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
												<label class="control-label">Full Name</label>
												<input type="text" placeholder="<?=$row['full_name']?>" name="full_name" class="form-control" /> </div>
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="text" placeholder="<?=$row['email']?>" name="email" class="form-control" /> </div>
											<div class="margiv-top-10">
												<button type="submit" class="btn green"> Save Changes </button>
											</div>
										</form>
									</div>
									<!-- END PERSONAL INFO TAB -->
									<!-- CHANGE AVATAR TAB -->
									<div class="tab-pane" id="tab_1_2">
										<form action="process.php?action=updateImage" role="form" method="POST"  enctype="multipart/form-data">
											<div class="form-group">
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
														<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
													<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
													<div>
														<span class="btn default btn-file">
															<span class="fileinput-new"> Select image </span>
															<span class="fileinput-exists"> Change </span>
															<input type="file" name="upload_image"> 
															<input type="hidden" name="username" value="<?=$username?>"> </span>
														<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
													</div>
												</div>
											</div>
											<div class="margin-top-10">
												<button type="submit" class="btn green"> Submit </button>
												<a href="javascript:;" class="btn default"> Cancel </a>
											</div>
										</form>
									</div>
									<!-- END CHANGE AVATAR TAB -->
									
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