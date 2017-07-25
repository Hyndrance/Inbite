<?php
$query = mysql_query("select * from user where username ='$username'");
$row = mysql_fetch_array($query);
extract($row);
?>

<?=$full_name;?> <br>
<?=$username;?> <br>
<a href="?view=modify">Modify</a>
