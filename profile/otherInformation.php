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