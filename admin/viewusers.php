<?php
   include("checkauth.php");
   ?>
<html>
  <?php include("../header.php"); ?>
  <body>
    <?php include("../navbar/navbar.php"); ?>
   <div class="container">
    <table class="table">
      <tr>
	<th>ID</th>
	<th>Last name</th>
	<th>First name</th>
	<th>Email address</th>
	<th>Actions</th>
      </tr>
      <?php
	 $query = "select * from users where approved=1 order by id asc;";

	 $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	 $result = $mysqli->query($query);

         while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row['id'] . "</td><td>" . $row['lname'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['email'] . "</td><td><a href=\"/mvmsmath/admin/deleteuser.php?id=" . $row['id'] . "\">Delete user</a></td></tr>";
         }

         $result->free();
         $mysqli->close();
	 ?>
    </table>
        <?php include("../footer.php"); ?>
        </div>
        </div>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/mvmsmath/assets/bootstrap/js/jquery.js"></script>
        <script src="/mvmsmath/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
