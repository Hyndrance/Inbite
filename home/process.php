<?php

require_once '../config/database.php';
require_once '../config/function.php';

$action = $_GET['action'];	
	
switch ($action) {
    
		
	case 'add':
		add();
		break;
		
	case 'addComment':
		addComment();
		break;

	default :
}



function add()
{
	$description = $_POST['description'];
	$username = $_POST['username'];
	
	// Where the file is going to be placed 
	$target_path = "../media/";

	/* Add the original filename to our target path.  
	Result is "uploads/filename.extension" */
	$target_path = $target_path . basename( $_FILES['upload_file']['name']); 

	$temp = explode(".", $_FILES["upload_file"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	
	mysql_query("insert into activity set user='$username',
											post='$description',
											image='$newfilename',
											location='bacolod',
											create_datetime=NOW()");
							
	if(move_uploaded_file($_FILES['upload_file']['tmp_name'], "../media/" . $newfilename)) {
							
	header('Location: ../home/');
	}
	else{
		
	header('Location: ../home/?error=Not uploaded');
	}
	
}
function addComment()
{
	$post_id = $_POST['post_id'];
	$content = $_POST['content'];
	$username = $_POST['username'];
	
	
	mysql_query("insert into comment set user='$username',
											post_id='$post_id',
											content='$content',
											create_datetime=NOW()");
							
		
	header('Location: ../home/');
	
	
}


?>