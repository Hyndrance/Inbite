<?php

$notifQ = mysql_query("select * from notification where receiver = '$username' order by Id desc");

while($notifR=mysql_fetch_array($notifQ)){

?>

<li>
	<a href="javascript:void(0);">
	
		<?php if($notifR['type'] == 'follow'){?>
			<div class="icon-circle bg-light-green">
				<i class="material-icons">person_add</i>
			</div>
		
		<?php } else if($notifR['type'] == 'bite'){?>
			<div class="icon-circle bg-red">
				<i class="material-icons">person_add</i>
			</div>
		
		<?php } else if($notifR['type'] == 'join'){?>
			<div class="icon-circle bg-purple">
				<i class="material-icons">cached</i>
			</div>
		
		<?php } else if($notifR['type'] == 'comment'){?>
			<div class="icon-circle bg-blue-grey">
				<i class="material-icons">comment</i>
			</div>
		
		<?php } else {}?>
		
			<div class="menu-info">
				<h4><?=$notifR['message'];?></h4>
				<p>
					<i class="material-icons">access_time</i> <?=$notifR['create_datetime'];?>
				</p>
			</div>
	</a>
</li>

<?php
}
?>