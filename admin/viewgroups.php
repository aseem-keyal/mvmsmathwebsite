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
	<th>Members</th>
	<th>Problem Sets</th>
	<th>Stats</th>
      </tr>
      <?php
	 $query = "select * from groups;";

	 $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
	 $result = $mysqli->query($query);

         while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row['id'] . "</td><td>" . $row['members'] . "</td><td>" . $row['problem_sets'] . "</td><td>" . $row['stats'] . "</td></tr>";
         }

         $result->free();
         $mysqli->close();
	 ?>
    </table>
        <?php include("../footer.php"); ?>
        </div>
  </body>
</html>
