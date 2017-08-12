<?php

require_once '../config/database.php';
require_once '../config/function.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'update' :
		update();
		break;
		
	case 'follow' :
		follow();
		break;
		
	case 'unfollow' :
		unfollow();
		break;
	
	default :
}

function update()
{
	$upload_file = $_POST['upload_file'];
	$username = $_POST['username'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
		// Where the file is going to be placed 
		$target_path = "../media/";

		/* Add the original filename to our target path.  
		Result is "uploads/filename.extension" */
		$target_path = $target_path . basename( $_FILES['upload_file']['name']); 

		$temp = explode(".", $_FILES["upload_file"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
	
		if ($password != $password2){
			
			header('Location: index.php?view=update&error=Password do not match.');
		}
	
		else {
				mysql_query("update user  set email='$email',
												full_name='$full_name',
												password='$password',
												image='$newfilename'
												where username='$username'");
				
				
					if(move_uploaded_file($_FILES['upload_file']['tmp_name'], "../media/" . $newfilename)) {
							
						header('Location: ../profile/');
						}
						else{
							
						header('Location: index.php?view=update&error=Image not uploaded. Please choose another one.');
						}
				
				
				
			}
}

function follow()
{
	$follower = $_GET['follower'];
	$following = $_GET['following'];
	
	
	mysql_query("insert into follow set follower='$follower',
										following='$following',
											create_datetime=NOW()");
							
		
	header('Location: ../profile/?user='.$following);
	
	
}

function unfollow()
{
	$follower = $_GET['follower'];
	$following = $_GET['following'];
	
	
	mysql_query("delete from follow where follower='$follower' and following='$following'");
							
		
	header('Location: ../profile/?user='.$following);
	
	
}

?>