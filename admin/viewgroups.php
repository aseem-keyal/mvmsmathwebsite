<?php
   include("checkauth.php");
   ?>
    <table class="table table-striped table-bordered">
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
