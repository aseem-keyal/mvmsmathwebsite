<?php
	include_once($_SERVER['DOCUMENT_ROOT'] . '/mvmsmath/authentication/pwhash.php');

	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $email = $_POST['user_email'];
    $query = "select * from users where email='$email';";
    $result = $mysqli->query($query) or die(mysql_error());
    $rows = $result->num_rows;
    if ($rows != 1) {
        // Prepare insert query
        $fname = $_POST['user_fname'];
        $lname = $_POST['user_lname'];
        $email = $_POST['user_email'];
        $grade = $_POST['user_grade'];
        $password = create_hash($_POST['pwd']);
        $query = "insert into users (fname, lname, email, grade, password, approved) values (";
        $query .= "'$fname', '$lname', '$email', $grade, '$password', 0);";

        $mysqli->query($query);
        $mysqli->close();

        header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/register/registration_complete.php');
    }
    else {
        header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/register/index.php?email=false');
    }
?>
