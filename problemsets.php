<!DOCTYPE html>
<html lang="en">
  <?php include("header.php") ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
    <?php
	if (isset($_COOKIE["fname"]))
        for ($i = 1; $i <= 10; $i++) {
		echo '<div class="span4">
			 <div class="well">
			   <h4>Problem Set ' . $i . '</h4>
			   <hr>
			   <a class="btn">View Details</a>
			   <a class="btn btn-primary pull-right" href="viewer.php?id=ps1">Open Problems</a>
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
