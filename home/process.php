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
		
	case 'delete':
		delete();
		break;

	case 'bite':
		bite();
		break;

	case 'join_now':
		join_now();
		break;
		
	default :
}

function bite()
{
	$Id = $_GET['Id'];
	$username = $_GET['username'];
	$doer = getDoer($Id);
	
	
	mysql_query("insert into bite set biter='$username',
											post_id=$Id,
											create_datetime=NOW()");
											
	mysql_query("insert into notification set doer='$username',
											receiver='$doer',
											message='Your post has a bite from $username',
											type='bite',
											create_datetime=NOW()");
							
		
	header('Location: ../home/#'.$Id);	
}

function join_now()
{
	$Id = $_GET['Id'];
	$username = $_GET['username'];
	$doer = getDoer($Id);
	
	
	mysql_query("insert into join_now set user='$username',
											post_id=$Id,
											create_datetime=NOW()");
											
	mysql_query("insert into notification set doer='$username',
											receiver='$doer',
											message='$username joined your post',
											type='join',
											create_datetime=NOW()");
							
		
	header('Location: ../home/#'.$Id);	
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

function delete()
{
	$Id = $_GET['id'];
	
		mysql_query("delete from activity where Id=$Id");
		
		header('Location: index.php?success=You have deleted your post.');
}

?>