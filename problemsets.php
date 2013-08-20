<!DOCTYPE html>
<html lang="en">
  <?php include("header.php") ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
    <?php
    $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
    $user_id = $_COOKIE['user_id'];
    $query = "select problem_sets from groups where members like '%$user_id%';";
    $res = $mysqli->query($query) or die(mysql_error());
    while ($row = $res->fetch_assoc()) {
        extract($row);
    }
    $tables = explode(",",$problem_sets);
	if (isset($_COOKIE["fname"]))
        foreach ($tables as &$ps) {
            $number = substr($ps,2);
            echo '<div class="span4">
                <div class="well">
                <h4>Problem Set ' . $number . '</h4>
                <hr>
                <a class="btn">View Details</a>
                <a class="btn btn-primary pull-right" href="viewer/index.php?id=ps' . $number . '">Open Problems</a>
        </div>
        </div>';
      }
	else
        echo '<p>Please log in to see your problem sets.</p>';
	?>
	</div>
    <div class="container">
      <?php include ("footer.php"); ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/bootstrap/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
