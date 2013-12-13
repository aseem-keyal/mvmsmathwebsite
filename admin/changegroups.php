<?php
if ($_POST["operation"] == "add") {
    $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $users = $_POST["users"];
    $group = $_POST["group"];
    $query = "update groups set members = ifnull(concat(members, ',$users'), '$users') where id = $group;";
    $result = $mysqli->query($query) or die(mysql_error());
    $mysqli->close();
    header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/admin/panel.php?groups=true');
}
elseif ($_POST["operation"] == "remove") {
    $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $users = $_POST["users"];
    $group = $_POST["group"];
    // get string of users and convert to array
    $query = "select members from groups where id = $group;";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()){
        $current = explode(",", $row['members']);
        error_log($row['members'], 3, "/var/www/my-errors.log");
        $toRemove = explode(",", $users);
        $result = array_diff($current, $toRemove);
        $final = implode(",", $result);
        error_log($final, 3, "/var/www/my-errors.log");
        $query = "update groups set members = '$final' where id = $group;";
        // convert other string to array too
        // remove one array from another
        $result = $mysqli->query($query) or die(mysql_error());
        $mysqli->close();
        header('Location: http://' . $_SERVER["SERVER_NAME"] . '/mvmsmath/admin/panel.php?groups=true');
    }
}
?>
