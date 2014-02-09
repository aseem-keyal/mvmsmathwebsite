<?php
	include("checkauth.php");
	$user_id = $_GET['id'];
	$query = "update users set approved=1 where id=" . $user_id . ";";

	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	$mysqli->query($query);
	$mysqli->close();

	header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/admin/manageusers.php');
?>
