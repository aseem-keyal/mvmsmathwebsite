<!DOCTYPE html>
<html lang="en">
  <?php include("header.php") ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
    <h1>Competition Enrollment</h1>
    <?php
	if (isset($_COOKIE["fname"])) {
        $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
        $user_id = $_COOKIE['user_id'];
        $query = "select * from competitions;";
        $res = $mysqli->query($query) or die(mysql_error());
        while ($row = $res->fetch_assoc()) {
            echo '<div class="span3">
                <div class="well">
                <h4>' . $row['name'] . '</h4>
                <hr>
                <a class="btn">View Details</a>
                <a class="btn btn-primary pull-right" href="#">Enroll</a>
        </div>
        </div>';
     }
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
