<?php
$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
$ActQuery = mysql_query("select *  from user where username like '%$search%' or full_name like '%$search%'");
?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Search Result for <?=$search;?>
				</h2>
			</div>
			<div class="body">
				<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
				
				<?php
						while($ActRow=mysql_fetch_array($ActQuery)){
						
						if(file_exists("../media/".$ActRow['image']) and $ActRow['image']!="")
							$galImage = "../media/".$ActRow['image'];
						else
							$galImage = "../include/images/no-image.jpg";


					$Id = $row['Id'];
					?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<a href="../profile/?user=<?=$ActRow['username']?>" data-sub-html="Demo Description">
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
