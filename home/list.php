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
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?=$row['post']?>
                                <small>Posted by - <a href="" target="_blank"><?=$row['user'];?></a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Bite</a></li>
                                        <li><a href="javascript:void(0);">Sip</a></li>
                                        <li><a href="javascript:void(0);">Eat</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						<?php if($imageExist){?>
                        <div class="body">
                            <img src="../media/<?=$row['image']?>" class="js-animating-object img-responsive">
                        </div>
						<?php }?>
                    </div>
                </div>
            </div>
     
<?php
	}
?>
