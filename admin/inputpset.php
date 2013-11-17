<?php
   include("checkauth.php");
   ?>
<html>
    <?php include("../header.php"); ?>
  <body>
    <?php include("../navbar/navbar.php"); ?>
    <div class="container">
    	  <form method="post" action="uploadpset.php" enctype="multipart/form-data">
		Problem set questions: <input type="file" name="problemsetpdf"><br />
		Problem set solutions: <input type="file" name="anspdf"><br />
        Group(s): <input type="text" name="group" id="group" value="" /><br />
        Expiry Date <input type="text" name="date" id="date" value="" /><br />
		  	Problem set answers:<br />
	  	<?php
			for ($i = 1; $i <= $_POST['questioncount']; $i++)
			    echo $i . " <input type=\"text\" name=\"question" . $i . "\"><br />";
		?>
	<input type="hidden" name="questioncount" value="<?php echo $_POST["questioncount"]; ?>">
		<input type="submit" value="Add problem set">
	  </form>
    <?php include("../footer.php"); ?>
    </div> <!-- /container -->
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
