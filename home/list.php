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

<style>
.edit-btn{
	width: 25px;
	height: 25px;
	background-color: #c2c2c2;
	border:none;
}	
.edit-btn:hover {
	background-color: #a9a8a8;
}

</style>

<div class="col-md-4">
	<div class="mt-widget-2">
		<div class="mt-head" style="background-image: url(<?=$postImage?>);">
			<div class="mt-head-label">
			
			<?php
			if ($username == $row['user']){
			?>
				<button type="button" onclick="location.href='?view=update&id=<?=$Id;?>'" class="edit-btn">
					<i style="color: white;"class="fa fa-pencil" aria-hidden="true"></i>
				</button>
			<?php } ?>
			</div>
			<div class="mt-head-user">
				<div class="mt-head-user-img">
					<img style="width:50px; height: 50px; border-radius: 50%;" src="<?=$userImage?>"></div>
					
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
				<li style="color: #FF831E;">
					<?php if(bittenByYou($username, $Id)){?>
						<img src="../include/images/inbitecolored.png">
					<?php } else {?>
						<img src="../include/images/inbitelogo.png" style="cursor:pointer;" onclick="location.href='process.php?action=bite&Id=<?=$Id;?>&username=<?=$username;?>'">
					<?php }?>
			
					<?=countBites($Id)?>
				</li>
				
				<li style="color: #FF831E;">
					<?php if(joinByYou($username, $Id)){?>
						<i class="fa fa-beer" ></i>
					<?php } else {?>
						<i class="fa fa-beer" style="color: #c2c2c2; cursor:pointer;" onclick="location.href='process.php?action=join_now&Id=<?=$Id;?>&username=<?=$username;?>'"></i>
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
