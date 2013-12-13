<?php
	include_once($_SERVER['DOCUMENT_ROOT'] . '/mvmsmath/authentication/pwhash.php');

	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $email = $_COOKIE['email'];
    $password = create_hash($_POST['pwd']);
    $query = "update users set password = '" . $password . "' where email='$email';";
    error_log($query, 3, '/var/www/my-errors.log');
    $result = $mysqli->query($query) or die(mysql_error());
    $mysqli -> close();
    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/profile.php?changed=true');
?>
