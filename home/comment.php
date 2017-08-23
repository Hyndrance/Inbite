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
					PROFILE DETAIL
				</h2>
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
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						
						<?php include "snippetCommentList.php"; ?>
						
						<form action="process.php?action=addComment" method="POST">
							<div class="input-group" style="width: 80%; margin: 0 auto;">
								<div class="form-line">
									<input type="hidden" name="post_id" value="<?=$id;?>">
									<input type="hidden" name="username" value="<?=$username;?>">
									<input type="text" name="content" class="form-control date" placeholder="Add comment...">
								</div>
								<span class="input-group-addon">
									<button type="submit" class="material-icons"style="cursor:pointer; border: none; background: transparent;">send</button>
								</span>
								
							</div>
						</form>
						</div>
						
			

					
				</div>
			</div>
		</div>
	</div>
</div>


			