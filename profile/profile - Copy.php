<?php
$profile = (isset($_GET['user']) && $_GET['user'] != '') ? $_GET['user'] : $username;
$query = mysql_query("select * from user where username ='$profile'");
$row = mysql_fetch_array($query);
?>

<?php if (mysql_num_rows($query)!=0){?>

<?php if ($username == $profile){?>
<?php include "snippetProfile.php"; ?> <br>
<?php } else {?>
<?php include "snippetOtherProfile.php"; ?> <br>
<?php }?>

<?php include "snippetGallery.php"; ?> <br>

<?php } else { echo 'User does not exist';}?>