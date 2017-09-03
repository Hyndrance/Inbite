<!-- BEGIN GROUP NOTIFICATION -->
<div class="btn-group-notification btn-group" id="header_notification_bar">
	<button type="button" class="btn md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		<span class="badge">
			<i class="icon-bell" style="font-size: 14px;"></i>
			<?=$row['total_notification'];?>
		</span>
	</button>
	<ul class="dropdown-menu-v2">
		<li class="external">
			<h3>
				<span class="bold"><?=$row['total_notification'];?> pending</span> notifications</h3>
			<a href="#">view all</a>
		</li>
		<li>
			<ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
			
			<?php

				$notifQ = mysql_query("select * from notification where receiver = '$username' order by Id desc");

				while($notifR=mysql_fetch_array($notifQ)){

			?>

				<li>
					<a href="javascript:;">
						<span class="details">
						
						
						<?php if($notifR['type'] == 'comment'){?>
							<span class="label label-sm label-icon label-success md-skip">
								<i class="fa fa-comments-o"></i>
								
								
						<?php } else if($notifR['type'] == 'join'){?>
							<span class="label label-sm label-icon label-danger md-skip">
								<i class="fa fa-share-alt"></i>
								
								
						<?php } else if($notifR['type'] == 'bite'){?>	
							<span class="label label-sm label-icon label-warning md-skip">
								<i class="fa fa-circle-o-notch"></i>
								
						<?php } else if($notifR['type'] == 'follow'){?>
								
							<span class="label label-sm label-icon label-info md-skip">
								<i class="fa fa-user-plus"></i>
						<?php } else {}?>
								
							</span> <?=$notifR['message'];?></span>
						<span class="time"><?=$notifR['create_datetime'];?></span>
					</a>
				</li>
				
				<?php
				}
				?>
								
			</ul>
		</li>
	</ul>
</div>
<!-- END GROUP NOTIFICATION -->