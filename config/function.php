<?php

function countNotification($username){
	$query = mysql_query("select * from notification where receiver='$username'");
	return mysql_num_rows($query);
}

function bittenByYou($username, $Id){
	$query = mysql_query("select * from bite where biter='$username' and post_id=$Id");
	if (mysql_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function countBites($Id){
	$query = mysql_query("select * from bite where post_id=$Id");
	return mysql_num_rows($query);

}

function joinByYou($username, $Id){
	$query = mysql_query("select * from join_now where user='$username' and post_id=$Id");
	if (mysql_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function countJoins($Id){
	$query = mysql_query("select * from join_now where post_id=$Id");
	return mysql_num_rows($query);
}


function countComments($Id){
	$query = mysql_query("select * from comment where post_id=$Id");
	return mysql_num_rows($query);
}

function countFollowing($username){
	$query = mysql_query("select * from follow where follower='$username'");
	return mysql_num_rows($query);
}

function countFollowers($username){
	$query = mysql_query("select * from follow where following='$username'");
	return mysql_num_rows($query);
}

function getReceiver($postId){
	$query = mysql_query("select * from activity where id=$postId");
	$get = mysql_fetch_array($query);
	return $get['user'];
}

function getImage($username){
	$query = mysql_query("select * from user where username='$username'");
	$get = mysql_fetch_array($query);
	return $get['image'];
}

function user_exist($username){
	$query = mysql_query("select * from user where username='$username'");
	if (mysql_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function checkFollow($follower, $following){
	$query = mysql_query("select * from follow where follower='$follower' and following = '$following'");
	if (mysql_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function email_exist($email){
	$query = mysql_query("select * from user where email='$email'");
	if (mysql_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}


function fullname($username){
	$query = mysql_query("select * from user where username='$username'");
	$get = mysql_fetch_array($query);
	return $get['full_name'];
}

function buildProctorOptions($catId = 0)
{
	$sql = "SELECT Id, idnumber, first_name, last_name
			FROM user
			WHERE auth='Faculty'
			ORDER BY Id";
	$result = mysql_query($sql);
	
	$categories = array();
	while($row = mysql_fetch_array($result)) {
		list($id, $idnumber, $first_name, $last_name) = $row;
		
			// we create a new array for each top level categories
			$categories[$id] = array('first_name' => $first_name,'last_name' => $last_name,'idnumber' => $idnumber);
			

	}	
	
	// build combo box options
	$list = '';
	foreach ($categories as $key => $value) {
		$name     = $value['first_name'] .' '.$value['last_name'];
		$idnumber = $value['idnumber'];
		
		$list .= "<option value=\"$idnumber\"";
		if ($idnumber == $catId) {
			$list.= " selected";
		}
			
		$list .= ">$name</option>\r\n";
	}
	
	return $list;
}

?>