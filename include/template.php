<?php
$username = $_SESSION["user_session"];
?>

<h1>header </h1>

<a href="../user/?view=profile">Profile</a></br>
<a href="#">Wall</a></br>
<a href="../user/process.php?action=logout">Logout</a></br>

<br>


<?php
include $content;
?>

<h1>footer </h1>