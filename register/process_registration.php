<?php
	include_once($_SERVER['DOCUMENT_ROOT'] . '/mvmsmath/authentication/pwhash.php');

	// Prepare insert query
	$fname = $_POST['user_fname'];
	$lname = $_POST['user_lname'];
	$email = $_POST['user_email'];
	$grade = $_POST['user_grade'];
	$password = create_hash($_POST['pwd']);
	$query = "insert into users (fname, lname, email, grade, password, approved) values (";
	$query .= "'$fname', '$lname', '$email', $grade, '$password', 0);";

	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	$mysqli->query($query);
	$mysqli->close();

	header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/register/registration_complete.php');
?>
