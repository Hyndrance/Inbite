<?php

$query = mysql_query("select * from activity order by Id desc");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<?php
	while($row=mysql_fetch_array($query)){


if(file_exists("../media/".$row['image']))
    $imageExist = true;
else
    $imageExist = false;


$Id = $row['Id'];
?>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="<?=$Id;?>">
	<div class="card">
		<div class="header bg-green">
			<h2>
				<?=$row['post']?></br>
					<small>Posted by - <a href="../profile/?user=<?=$row['user'];?>" ><?=$row['user'];?></a></small>
			</h2>
			<ul class="header-dropdown m-r--5">
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="material-icons">more_vert</i>
					</a>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:void(0);">Update</a></li>
						<li><a href="process.php?action=delete&id=<?=$Id;?>">Delete</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="body">
				<img src="../media/<?=$row['image']?>" class="js-animating-object img-responsive">
		</div>
		<div style="width: 80%; height: 1px; background-color: #c2c2c2; margin: 0 auto; margin-bottom: 10px;"></div>

		<div style="width: 80%; height: 25px; margin: 0 auto;">
			<?php if(bittenByYou($username, $Id)){?>
				<img src="../include/images/inbitecolored.png" style="margin-top: -10px;">
					<?php } else {?>
						<img src="../include/images/inbitelogo.png" style="margin-top: -10px; cursor:pointer;" onclick="location.href='process.php?action=bite&Id=<?=$Id;?>&username=<?=$username;?>'">
					<?php }?>
			
			<div style="display: inline-block; font-size: 9pt;px; position: absolute;">
								<?=countBites($Id)?> bite(s)</div>
			
			<?php if(joinByYou($username, $Id)){?>
			<i class="material-icons col-pink" style="font-size: 12pt; margin-left: 100px; cursor:pointer;">mail_outline</i>
					<?php } else {?>
						<i class="material-icons" style="font-size: 12pt; margin-left: 100px; cursor:pointer;" onclick="location.href='process.php?action=join_now&Id=<?=$Id;?>&username=<?=$username;?>'">mail_outline</i>
					<?php }?>
			
			<div style="display: inline-block; font-size: 9pt;px; position: absolute;">
								&nbsp;<?=countJoins($Id)?> Join(s)</div>
		</div>

		<div class="input-group" style="width: 80%; margin: 0 auto;">
						<div class="form-line">
							<input type="text" class="form-control date" placeholder="Add comment...">
						</div>
						<span class="input-group-addon">
							<i class="material-icons"style="cursor:pointer;">send</i>
						</span>
		</div>

		<div style="width: 80%; margin: 0 auto; height: 40px; text-align:center; margin-top: 20px;">View comments</div>
	</div>
</div>
     
<?php
	}
?>
