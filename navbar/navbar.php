<?php
	if (isset($_COOKIE["fname"]))
	   include_once($_SERVER['DOCUMENT_ROOT'] . '/mvmsmath/navbar/navbar_loggedin.php');
	else
	   include_once($_SERVER['DOCUMENT_ROOT'] . '/mvmsmath/navbar/navbar_default.php');
	?>
