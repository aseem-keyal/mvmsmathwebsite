<!DOCTYPE html>
<html lang="en">
  <?php include ($_SERVER['DOCUMENT_ROOT'] . "/mvmsmath/header.php"); ?>
  <body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . "/mvmsmath/navbar/navbar.php"); ?>
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
                <form action="process_enrollment.php" method="post" accept-charset="utf-8">
                    <input type="hidden" name="contest" value="'. $row['name']. '"/>
                    <a class="btn">View Details</a>
                    <button type="submit" class="btn btn-primary pull-right">Enroll</submit>
                </form>
        </div>
        </div>';
     }
    }
	else
        echo '<p>Please log in to see your problem sets.</p>';
	?>
	</div>
    <div class="container">
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/mvmsmath/footer.php"); ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
