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
						<form action="process.php?action=update&id=<?=$id?>" method="POST">
							<label for="caption">Caption</label>
							<div class="form-group">
								<div class="form-line">
									<textarea rows="4" class="form-control no-resize" name="post"><?=$post?></textarea>
								</div>
							</div>
								<button align="left" type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">UPDATE</button>
						</form>
						</div>
						
			

					
				</div>
			</div>
		</div>
	</div>
</div>


			