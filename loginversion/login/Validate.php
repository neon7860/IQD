<?php
$ActualPassword = "secret";
if ($_POST["password"] == $ActualPassword) {
	session_start();
	$_SESSION["Authorised"] = "Y";
	header("Location:../admin/index.php");
} else {
	header("Location:Wrongpassword.php");
}
include '../templates/admin_layout.html.php';
?>
