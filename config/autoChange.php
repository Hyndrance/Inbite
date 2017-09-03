<?php

function postTimeLimit()
{
	$activityQuery = mysql_query("SELECT * from activity where Id NOT IN (SELECT DISTINCT Id FROM activity WHERE create_datetime >= now() - INTERVAL 1 DAY)");
	
	//select all activities with biteCount
	
	while($row1=mysql_fetch_array($activityQuery)){
		$Id = $row1['Id'];
		if (countBites($Id)<10)
		{
			mysql_query("delete from activity where Id=$Id");
		}
	}
	
	
}

?>