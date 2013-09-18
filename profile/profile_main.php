<?php
$user = $_COOKIE['user_id'];
$query = "select id from groups where members like '%$user%';";
$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
$result = $mysqli->query($query) or die(mysql_error());
$row = $result->fetch_assoc();
$result->free();
$mysqli->close();
?>
<h1>My Profile</h1>
<hr />
<p>Name: <?php echo $_COOKIE['fname'] . " " . $_COOKIE['lname'] ?></p>
<p>Email: <?php echo $_COOKIE['email'] ?></p>
<p>ID: <?php echo $_COOKIE['user_id'] ?></p>
<p>Grade: <?php echo $_COOKIE['grade'] ?></p>
<p>Group: <?php echo $row['id'] ?></p>
<p>Change Password:</p>
<input type="text" name="password" id="password" placeholder="New password" />
<br />
<input type="text" name="confirm" id="confirm" placeholder="Confirm new password" />
<br />
<button type="submit" class="btn btn-danger">Change Password</button>
