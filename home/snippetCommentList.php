<?php

$queryComment = mysql_query("select * from comment where post_id=$id");

while($rowComment=mysql_fetch_array($queryComment)){

if(file_exists("../media/".getImage($rowComment['user'])))
	$displayImage = "../media/".getImage($rowComment['user']);
else
	$displayImage = "../include/images/no-image.jpg";


$Id = $row['Id'];
?>

<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" style="width: 35px; height: 35px; border-radius: 50%;" src="<?=$displayImage;?>">
    </a>
  </div>
  <div class="media-body">
    <div><b><?=$rowComment['user']?></b> <?=$rowComment['create_datetime']?></div>
		<?=$rowComment['content']?>
  </div>
</div>
  
<?php
}
?>