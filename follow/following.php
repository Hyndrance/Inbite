<?php
$ActQuery = mysql_query("select *  from follow where follower='$username'");
?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					FOLLOWING
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
						while($ActRow=mysql_fetch_array($ActQuery)){
						
						if(file_exists("../media/".getImage($ActRow['following'])))
							$galImage = "../media/".getImage($ActRow['following']);
						else
							$galImage = "../include/images/no-image.jpg";



					$Id = $row['Id'];
					?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<a href="../profile/?user=<?=$ActRow['following']?>" data-sub-html="Demo Description">
								<img class="img-responsive thumbnail" src="../media/<?=$galImage?>">
							</a>
						</div>
						
					<?php
						}
					?>

					
				</div>
			</div>
		</div>
	</div>
</div>
