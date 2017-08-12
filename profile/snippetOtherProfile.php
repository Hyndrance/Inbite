<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					PROFILE DETAIL
				</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">more_vert</i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
					<?php
				
						if(file_exists("../media/".$row['image']) && $row['image']!="")
							$displayImage = "../media/".$row['image'];
						else
							$displayImage = "../include/images/no-image.jpg";

					?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<a href="../media/<?=$displayImage?>" data-sub-html="Demo Description">
								<img class="img-responsive thumbnail" src="../media/<?=$displayImage?>">
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Full Name:</strong> <?=$row['full_name'];?></p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>User Name:</strong> <?=$row['username'];?></p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email:</strong> <?=$row['email'];?></p>
							
								<?php if(!checkFollow($username, $row['username'])){?>
								<button align="left" onclick="location.href='process.php?action=follow&follower=<?=$username?>&following=<?=$row['username']?>'" class="btn btn-primary btn-lg m-l-15 waves-effect">FOLLOW</button>
								<?php } else {?>
								<button align="left" onclick="location.href='process.php?action=unfollow&follower=<?=$username?>&following=<?=$row['username']?>'" class="btn btn-warn btn-lg m-l-15 waves-effect">FOLLOWING</button>
								<?php }?>
								
						</div>
						
			

					
				</div>
			</div>
		</div>
	</div>
</div>
