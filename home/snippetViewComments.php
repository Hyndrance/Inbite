<?php
$commentQuery = mysql_query("select * from comment where post_id=$Id order by Id desc");

?>

<div class="body">

		<?php 
		if (mysql_num_rows($commentQuery)>0){
			
			?>
			
			<a class="btn bg-pink waves-effect m-b-15" role="button" data-toggle="collapse" href="#collapseExample_<?=$Id?>" aria-expanded="false"
			   aria-controls="collapseExample">
				View <?=mysql_num_rows($commentQuery)?> Comments 
			</a>
			
			
			<div class="collapse" id="collapseExample_<?=$row['Id']?>">
			<?php
			
			while($commentRow=mysql_fetch_array($commentQuery)){
		
		?>

			
				
			<div class="well">
				
				<b><?=$commentRow['user']?></b>: <?=$commentRow['content']?>		 				
			</div>
			<br>
			
		<?php
		}
			}
			else
			{
				?>
				
					No comments
				
				<?php
				
				
			}
		?>
			
</div>


<form action="process.php?action=addComment" method="post">
	<div class="row clearfix ">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<div class="form-group">
				<div class="form-line">
					<input type="text" class="form-control" name="content" placeholder="Add Comment">
					<input type="hidden" name="post_id" value="<?=$row['Id']?>">
					<input type="hidden" name="username" value="<?=$username;?>">
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">POST</button>
		</div>
	</div>
</form>