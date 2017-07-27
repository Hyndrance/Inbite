<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>

<?=$error?>


<form action="process.php?action=register" method="POST">

		<input name="username" type="text" placeholder="Username"> <br>
		<input name="full_name" type="full_name" placeholder="Full Name"> <br>
		<input name="password" type="password" placeholder="Password"> <br>
		<input name="password2" type="password" placeholder="Repeat Password"> <br>
		
		<input type="submit" value="Sign Up">
</form>
		
