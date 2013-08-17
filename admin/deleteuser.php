<?php
	include("checkauth.php");
	$user_id = $_GET['id'];
	$query = "delete from users where id=" . $user_id . ";";

	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	$mysqli->query($query);
	$mysqli->close();

	header('Location: ' . $_SERVER["HTTP_REFERER"]);
?>
