<?php
	$expire = time() - 3600;
	setcookie("admin_id", "", $expire, '/mvmsmath/admin/');
	setcookie("fname", "", $expire, '/mvmsmath/admin/');
	setcookie("lname", "", $expire, '/mvmsmath/admin/');
	setcookie("email", "", $expire, '/mvmsmath/admin/');
	header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/admin');
	?>
