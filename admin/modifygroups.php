<?php
    $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $users = $_POST["users"];
    $group = $_POST["group"];
    if ($_POST["operation"] == "remove") {
        $query = "DELETE FROM groups WHERE id='$group';";
        $query2 = "ALTER TABLE groups AUTO_INCREMENT=1;";
    }
    elseif ($_POST["operation"] == "add") {
        $query = "INSERT INTO groups VALUES (DEFAULT,'$users',NULL,NULL);";
    }
    $result = $mysqli->query($query) or die(mysql_error());
    if (isset($query2) == True){
        $result = $mysqli->query($query2) or die(mysql_error());
    }
    $mysqli->close();
    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/admin/manageusers.php?groups=true');
?>
