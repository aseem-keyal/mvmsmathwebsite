<!DOCTYPE html>
<html lang="en">
  <?php include("header.php") ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
      <div class="container-fluid">
    <?php
	if (isset($_COOKIE["fname"])) {
        $date = date("m/d/Y");
        echo '
            <div class="span3">
            <div class="well sidebar-nav">
            </div>
            </div>
            <div class="span6">
            <div class="well">
            <h3>Question for ' . $date . '</h3>
            </div>
            </div>';
    }
    else {
        echo '<p>You must be logged in order to see the question of the day.</p>';
    }
	?>
      </div> <!-- End of Container-Fluid -->
      <?php include ("footer.php"); ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/bootstrap/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
