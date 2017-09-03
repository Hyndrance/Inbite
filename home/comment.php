<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$query = mysql_query("select * from activity where Id =$id");
$row = mysql_fetch_array($query);
extract($row);
?>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					<?=$row['post']?>
				</h2>
			</div>
			<div class="body">
				<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
				
				<?php
				
						if(file_exists("../media/".$row['image']) && $row['image']!="")
							$postImage = "../media/".$row['image'];
						else
							$postImage = "../include/images/no-image.jpg";

					?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<a href="../media/<?=$postImage?>" data-sub-html="Demo Description">
								<img class="img-responsive thumbnail" src="../media/<?=$postImage?>">
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						
						<?php include "snippetCommentList.php"; ?>
						
						
						</div>
						
			

					
				</div>
			</div>
		</div>

</div>


			