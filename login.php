<?php
if (($_POST["uname"]=="eval") && ($_POST["pword"]=="eva"))
{
	$message = "Successfully Logged In";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo '<script type="text/javascript"> location.href = "album.php" </script>';
}
else
{
	$message = "Wrong Credentials. Login Again";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo '<script type="text/javascript"> location.href = "index.php" </script>';
}
?>
