<?php
    $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $users = $_POST["users"];
    $group = $_POST["group"];
    $query = "select members from groups where id = $group;";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()){
        $current = explode(",", $row['members']);
        $userArray = explode(",", $users);
        if ($_POST["operation"] == "remove") {
            $result = array_diff($current, $userArray);
        }
        elseif ($_POST["operation"] == "add") {
            $result = array_merge($current, $userArray);
            $result = array_unique($result);
        }
        $final = implode(",", $result);
        $query = "update groups set members = '$final' where id = $group;";
        $result = $mysqli->query($query) or die(mysql_error());
        $mysqli->close();
        header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/admin/manageusers.php?groups=true');
    }
?>
