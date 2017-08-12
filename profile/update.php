<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
$query = mysql_query("select * from user where username ='$username'");
$row = mysql_fetch_array($query);
extract($row);
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
                    <div class="card">
                        <div class="body">
                            <form action="process.php?action=update" method="POST" enctype="multipart/form-data">
									<?php if ($error){?>
									<div class="msg"><font color="red"><?=$error;?></font></div>
									<?php }?>
                                <label>Select file to change profile photo:</label>
								<input type="file" name="upload_file"/><br></br>
                                <label for="caption">Full Name:</label>
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" name="full_name" value="<?=$full_name?>">
										</div>
									</div>
                                <label for="caption">Email:</label>
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" name="email" value="<?=$email?>">
										</div>
									</div>
                                <label for="caption">Password:</label>
									<div class="form-group">
										<div class="form-line">
											<input type="password" class="form-control" name="password" value="<?=$password?>">
										</div>
									</div>
                                <label for="caption">Re-type Password:</label>
									<div class="form-group">
										<div class="form-line">
											<input type="password" class="form-control" name="password2" value="<?=$password?>">
										</div>
									</div>
								<input type="hidden" name="username" value="<?=$username;?>">
								
								<button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE PROFILE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			
			