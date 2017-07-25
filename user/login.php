<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>

<?=$error?>


<form action="process.php?action=login" method="POST">


		<input name="username" type="text" placeholder="Username"> <br>
		<input name="password" type="password" placeholder="Password"> <br>
		<input type="submit" value="Login">
</form>
		
