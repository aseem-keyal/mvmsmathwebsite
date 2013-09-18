<?php
   include("checkauth.php");
   ?>
<html>
    <?php include("../header.php"); ?>
  <body>
    <?php include("../navbar/navbar.php"); ?>
    <div class="container">
    <table>
      <tr>
	<th>ID</th>
	<th>Last name</th>
	<th>First name</th>
	<th>Email address</th>
	<th>Actions</th>
      </tr>
      <?php
	 $query = "select * from users where approved=0 order by id asc;";

	 $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	 $result = $mysqli->query($query);

         while ($row = $result->fetch_assoc()) {
             echo "<tr><td>" . $row['id'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['email'] . "</td><td><a href=\"/mvmsmath/admin/approveuser.php?id=" . $row['id'] . "\">Approve user</a> <a href=\"/mvmsmath/admin/deleteuser.php?id=" . $row['id'] . "\">Delete user</a></td></tr>";
         }

         $result->free();
         $mysqli->close();
      ?>
    </table>
    <?php include("../footer.php"); ?>
    </div>
  </body>
</html>
