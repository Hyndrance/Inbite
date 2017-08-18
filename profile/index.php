<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'update' :
		$content 	= 'update.php';
		$template	= '../include/template.php';
		break;
		
	case 'searchResult' :
		$content 	= 'searchResult.php';
		$template	= '../include/template.php';
		break;
			
	default :
		$content 	= 'profile.php';
		$template	= '../include/template.php';
}

require_once $template;

?>





