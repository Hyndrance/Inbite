<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'follower' :
		$content 	= 'follower.php';
		$template	= '../include/template.php';
		break;
	
	case 'following' :
		$content 	= 'following.php';
		$template	= '../include/template.php';
		break;
			
	default :
}

require_once $template;

?>





