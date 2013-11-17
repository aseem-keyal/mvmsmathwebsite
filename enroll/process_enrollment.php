<?php
    $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_users");
    $query = "update competitions set users = concat(users, $_COOKIE['user_id'] . ",");";

?>
