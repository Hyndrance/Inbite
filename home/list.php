<?php

$query = mysql_query("select * from activity order by Id desc");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<?php
	while($row=mysql_fetch_array($query)){


if(file_exists("../media/".$row['image'])){
	$postImage = "../media/".$row['image'];
}
else
{
	$postImage = "../include/images/no-image.jpg";
}


if(file_exists("../media/".getImage($row['user']))){
	$userImage = "../media/".getImage($row['user']);
}
else{
	$userImage = "../include/images/no-image.jpg";
}


$Id = $row['Id'];
?>
<div class="col-md-4">
	<div class="mt-widget-2">
		<div class="mt-head" style="background-image: url(<?=$postImage?>);">
			<div class="mt-head-label">
			
			<?php
			if ($username == $row['user']){
			?>
				<button type="button" onclick="location.href='?view=update&id=<?=$Id;?>'" class="btn btn-success">Update</button>
			<?php } ?>
			</div>
			<div class="mt-head-user">
				<div class="mt-head-user-img">
					<img src="<?=$userImage?>"> </div>
				<div class="mt-head-user-info">
					<span class="mt-user-name">Chris Jagers</span>
					<span class="mt-user-time">
						<i class="icon-emoticon-smile"></i> <?=$row['create_datetime'];?> </span>
				</div>
			</div>
		</div>
		<div class="mt-body">
			<h3 class="mt-body-title"><a href="../profile/?user=<?=$row['user'];?>" ><?=$row['user'];?></a> </h3>
			<p class="mt-body-description"> 
			
			<?php if ($row['post']!="") {?>
				<?=$row['post'];?>
			<?php } else {?>
				No Description
			<?php }?>
	
			</p>
			<ul class="mt-body-stats">
				<li class="font-green">
					<?php if(bittenByYou($username, $Id)){?>
						<img src="../include/images/inbitecolored.png">
					<?php } else {?>
						<img src="../include/images/inbitelogo.png" style="cursor:pointer;" onclick="location.href='process.php?action=bite&Id=<?=$Id;?>&username=<?=$username;?>'">
					<?php }?>
			
					<?=countBites($Id)?>
				</li>
				
				<li class="font-yellow">
					<?php if(joinByYou($username, $Id)){?>
						<i class="fa fa-link"></i>
					<?php } else {?>
						<i class="fa fa-link" style="cursor:pointer;" onclick="location.href='process.php?action=join_now&Id=<?=$Id;?>&username=<?=$username;?>'"></i>
					<?php }?>
					
					<?=countJoins($Id)?>
				</li>
				
				<li class="font-red">
					<i class="icon-bubbles" style="cursor:pointer;" onclick="location.href='?view=comment&id=<?=$Id;?>'"></i>
					<?=countComments($Id)?>
				</li>
			</ul>
		</div>
	</div>
	</br>
</div> 
     
<?php
	}
?>
