<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'add' :
		$content 	= 'add.php';
		$template	= '../include/template.php';
		break;
	
	case 'test' :
		$content 	= 'test.php';
		$template	= '../include/template.php';
		break;
			
	default :
		$content 	= 'list.php';
		$template	= '../include/template.php';
}

require_once $template;

?>





