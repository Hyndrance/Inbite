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
		
	case 'update':
		update();
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
	$receiver = getReceiver($Id);
	
	
	mysql_query("insert into bite set biter='$username',
											post_id=$Id,
											create_datetime=NOW()");
											
	mysql_query("insert into notification set doer='$username',
											receiver='$receiver',
											message='Your post has a bite from $username',
											type='bite',
											create_datetime=NOW()");
							
		
	header('Location: ../home/#'.$Id);	
}

function join_now()
{
	$Id = $_GET['Id'];
	$username = $_GET['username'];
	$receiver = getReceiver($Id);
	
	
	mysql_query("insert into join_now set user='$username',
											post_id=$Id,
											create_datetime=NOW()");
											
	mysql_query("insert into notification set doer='$username',
											receiver='$receiver',
											message='$username joined your post',
											type='join',
											create_datetime=NOW()");
							
		
	header('Location: ../home/#'.$Id);	
}

function add()
{
	$description = $_POST['description'];
	$username = $_POST['username'];
	
	$data = $_POST['upload_file'];

	list($type, $data) = explode(';', $data);
	list(, $data)      = explode(',', $data);
	$data = base64_decode($data);
	
	// Where the file is going to be placed 
	$target_path = "../media/";

	$newfilename = round(microtime(true)) . '.jpg';
	
	file_put_contents($target_path . $newfilename, $data);
	
	mysql_query("insert into activity set user='$username',
											post='$description',
											image='$newfilename',
											location='bacolod',
											create_datetime=NOW()");
											
											
	//get latest id
	$get = mysql_fetch_array(mysql_query("select * from activity where user='$username' order by id desc limit 1;"));
							
							
	header('Location: ../home/?view=add_2&id='.$get['Id']);
	
}

function update()
{
	$id = $_GET['id'];
	$post = $_POST['post'];
	
	mysql_query("update activity set post='$post',
									create_datetime=NOW()
									where Id=$id");
										
	header('Location: ../home/#'.$id);
	
}

function addComment()
{
	$post_id = $_POST['post_id'];
	$content = $_POST['content'];
	$username = $_POST['username'];
	$receiver = getReceiver($post_id);
	
	
	mysql_query("insert into comment set user='$username',
											post_id='$post_id',
											content='$content',
											create_datetime=NOW()");
											
	mysql_query("insert into notification set doer='$username',
											receiver='$receiver',
											message='$username has commented on your post.',
											type='comment',
											create_datetime=NOW()");
							
		
	header('Location: ../home/?view=comment&id='.$post_id);
	
	
}

function delete()
{
	$Id = $_GET['id'];
	
		mysql_query("delete from activity where Id=$Id");
		
		header('Location: index.php?success=You have deleted your post.');
}

?>