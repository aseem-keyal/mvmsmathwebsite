<?php
	include("inputsanitize.php");
	$id = $_POST['id'];
	$question = $_POST['question'];
	$answer = sanitize($_POST['answer' . $question]);
	$query = "select * from " . $id . " where id=" . $question . ";";
	$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
	$result = $mysqli->query($query);

	$questiondata = $result->fetch_assoc();
	if (abs($questiondata['answer']  - $answer) <= ($questiondata['answer'] * $questiondata['tolerance'])) {
	   $correct = True;
	} else {
	   $correct = False;
	}

	$result->free();
	$mysqli->close();

	$redirectbase = 'Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/viewer.php?id=' . $id . '&q=' . $question . '&correct=';
	if ($correct) {
	   header($redirectbase . 'true');
	} else {
	   header($redirectbase . 'false');
	}
	?>
