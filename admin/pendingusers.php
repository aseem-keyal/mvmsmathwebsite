<?php
   include("checkauth.php");
   ?>
    <table class="table table-striped table-bordered">
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
