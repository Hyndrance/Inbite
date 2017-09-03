<div class="tab-content">
	<div class="tab-pane active" id="tab_1">
		<!-- TASK COMMENTS -->
		<div class="form-group">
			<div class="col-md-12">
				<ul class="media-list">
				
				<?php

					$queryComment = mysql_query("select * from comment where post_id=$id");

					while($rowComment=mysql_fetch_array($queryComment)){

					if(file_exists("../media/".getImage($rowComment['user'])))
						$commenterImage = "../media/".getImage($rowComment['user']);
					else
						$commenterImage = "../include/images/no-image.jpg";


					$Id = $row['Id'];
				?>
					<li class="media">
						<a class="pull-left" href="javascript:;">
							<img class="todo-userpic" src="<?=$commenterImage;?>" width="27px" height="27px"> </a>
						<div class="media-body todo-comment">
								<span class="todo-comment-username"><b><?=$rowComment['user']?></b></span> &nbsp;
								<span class="todo-comment-date"><?=$rowComment['create_datetime']?></span>
							
							<p class="todo-text-color"> <?=$rowComment['content'];?>
								</p>
						</div>
					</li>
					
					  
					<?php
					}
					?>
										
				</ul>
			</div>
		</div>
		<!-- END TASK COMMENTS -->
		<!-- TASK COMMENT FORM -->
		
		<form action="process.php?action=addComment" method="POST">
			<div class="form-group">
				<div class="col-md-12">
					<ul class="media-list">
						<li class="media">
							<a class="pull-left" href="javascript:;">
								<img class="todo-userpic" src="<?=$displayImage?>" width="27px" height="27px"> </a>
							<div class="media-body">
								<input type="hidden" name="post_id" value="<?=$id;?>">
								<input type="hidden" name="username" value="<?=$username;?>">
								<textarea class="form-control todo-taskbody-taskdesc" name="content" rows="4" placeholder="Type comment..."></textarea>
							</div>
						</li>
					</ul>
					<button type="submit" class="pull-right btn btn-sm btn-circle green"> &nbsp; Submit &nbsp; </button>
				</div>
			</div>
		</form>
		<!-- END TASK COMMENT FORM -->
	</div>
</div>
</div>