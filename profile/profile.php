<?php
$profile = (isset($_GET['user']) && $_GET['user'] != '') ? $_GET['user'] : $username;
$query = mysql_query("select * from user where username ='$profile'");
$row = mysql_fetch_array($query);
?>

<?php
				
	if(file_exists("../media/".$row['image']) && $row['image']!="")
		$displayImage = "../media/".$row['image'];
	else
		$displayImage = "../include/images/no-image.jpg";

?>
<!-- BEGIN PAGE BASE CONTENT -->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PROFILE SIDEBAR -->
			<div class="profile-sidebar">
				<!-- PORTLET MAIN -->
				<div class="portlet light profile-sidebar-portlet bordered">
					<!-- SIDEBAR USERPIC -->
					<div class="profile-userpic">
						<img src="<?=$displayImage?>" class="img-responsive" alt=""> </div>
					<!-- END SIDEBAR USERPIC -->
					<!-- SIDEBAR USER TITLE -->
					<div class="profile-usertitle">
						<div class="profile-usertitle-name"> <?=fullname($row['username'])?> </div>
						<div class="profile-usertitle-job"> <?=$row['username']?> </div>
					</div>
					<!-- END SIDEBAR USER TITLE -->
					
					<?php if($username !=$profile){?>
					<!-- SIDEBAR BUTTONS -->
					<div class="profile-userbuttons">
								<?php if(!checkFollow($username, $row['username'])){?>
								
								<button type="button" onclick="location.href='process.php?action=follow&follower=<?=$username?>&following=<?=$row['username']?>'" class="btn btn-circle green btn-sm">Follow</button>
								<?php } else {?>
								
								<button type="button" onclick="location.href='process.php?action=unfollow&follower=<?=$username?>&following=<?=$row['username']?>'" class="btn btn-circle green btn-sm">Following</button>
								<?php }?>
						<button type="button" class="btn btn-circle red btn-sm">Message</button>
					</div>
					<!-- END SIDEBAR BUTTONS -->
					<?php }?>
					
					
					<!-- SIDEBAR MENU -->
					<div class="profile-usermenu">
						<ul class="nav">
							<li>
								<a href="">
									<i class="icon-home"></i> Overview </a>
							</li>
							<li class="active">
								<a href="">
									<i class="icon-settings"></i> Account Settings </a>
							</li>
							<li>
								<a href="">
									<i class="icon-info"></i> Help </a>
							</li>
						</ul>
					</div>
					<!-- END MENU -->
				</div>
				<!-- END PORTLET MAIN -->
			</div>
			<!-- END BEGIN PROFILE SIDEBAR -->
			<?php if ($username == $profile){?>
			<?php include "myInformation.php"; ?> <br>
			<?php } else {?>
			<?php include "otherInformation.php"; ?> <br>
			<?php }?>
			
		</div>
	</div>
	<!-- END PAGE BASE CONTENT -->