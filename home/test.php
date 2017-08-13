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

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					<?=$row['post']?>
				</h2>
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<small>Posted by - <a href="../profile/?user=<?=$row['user'];?>" ><?=$row['user'];?></a></small>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
					<small><i class="material-icons col-pink">favorite</i></small>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					30 bites
				</div>
				<br>		
				
			</div>
			<?php if($imageExist){?>
			<div class="body">
				<img src="../media/<?=$row['image']?>" class="js-animating-object img-responsive">
			</div>
			<?php }?>
		
			<?php
			include "snippetViewComments.php";
			?>
			
		</div>
	</div>
</div>
     
<?php
	}
?>
