<!DOCTYPE html>
<html lang="en">
  <?php include ("header.php"); ?>
  <body>
    <?php include("navbar/navbar.php"); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="well">
                    <a class="btn btn-primary pull-right" href="problemsets.php">Go back</a>
                    <h2>Limits Lesson 5</h2>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
	      <form action="check.php" method="post">
		<?php
		   include("inputsanitize.php");
		   echo "<input type=\"hidden\" name=\"id\" value=\"" . sanitize($_GET['id']) . "\">";
		   ?>
		<table cellspacing="0" class="table table-striped">
		   <?php
		      $problemset_id=sanitize($_GET['id']);
		      $query = "select * from " . $problemset_id . ";";

		      $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
		      $result = $mysqli->query($query);
		      $rowcount = $result->num_rows;
		      $result->free();
		      $mysqli->close();

		      for ($i = 1; $i <= $rowcount; $i++) {
		       	 echo "<tr><td>" . $i . "</td><td><input type=\"text\" id=\"answer" . $i . "\" name=\"answer" . $i . "\" placeholder=\"Enter Answer\"></td><td><button class=\"btn btn-small btn-primary\" type=\"submit\" id=\"question\" name=\"question\" value=\"" . $i . "\">Submit</button></td></tr>\n";
		      }
		  ?>
                 </table>
	      </form>
            </div>
            <div class="span8" style="height: 100%">
                <div class="well" style="height: 100%">
                    <object data="Limits.pdf" type="application/pdf" width="100%" height="100%">
                       <p>Looks like you can't view this file.</p>
                    </object>
                </div>
             </div>
        </div>
    <?php include("footer.php"); ?>
    </div> <!-- /container -->
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/bootstrap/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
