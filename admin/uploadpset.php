<?php
include("checkauth.php");
?>
<html>
<?php include("../header.php"); ?>
<body>
<?php include("../navbar/navbar.php"); ?>
<div class="container">
     <?php
	$psid = 1000;
    $date = $_POST["expiry"];
    $groups = $_POST["group"];
    $name = $_POST["name"];
	$temp = explode(".", $_FILES["problemsetpdf"]["name"]);
	$temp2 = explode(".", $_FILES["anspdf"]["name"]);
      	if (end($temp) == "pdf" and end($temp2) == "pdf")
	{
		if ($_FILES["problemsetpdf"]["error"] > 0 or $_FILES["anspdf"]["error"] > 0)
		{
			echo "Error: return code: " . $_FILES["problemsetpdf"]["error"] . "<br>";
			echo "Error: return code: " . $_FILES["anspdf"]["error"] . "<br>";
			exit -1;
		}
		else
		{
				$mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
                $query = "select * from details;";
                $result = $mysqli->query($query) or die(mysql_error());
                $rows = $result->num_rows;
                $psid = $rows + 1;
                $mysqli->close();
                echo "Upload sucessful";
		}

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/mvmsmath/pdfs/" . "ps" . $psid . ".pdf") or file_exists($_SERVER['DOCUMENT_ROOT'] . "/mvmsmath/pdfs/" . "ps" . $psid . "ans.pdf"))
		{
			"Problem set " . $psid . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["problemsetpdf"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . "/mvmsmath/pdfs/ps" . $psid . ".pdf");
			move_uploaded_file($_FILES["anspdf"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . "/mvmsmath/pdfs/ps" . $psid . "ans.pdf");
            $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
            $query2 = "update groups set problem_sets = ifnull(concat(problem_sets, ',ps$psid'), 'ps$psid') where id in ($groups);";
            $result = $mysqli->query($query2) or die(mysql_error());
            $mysqli->close();
            $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
            $query = "insert into details values('ps$psid','$date','$name');";
            $result = $mysqli->query($query) or die(mysql_error());
            $query2 = "create table ps$psid(id INT, answer FLOAT, tolerance FLOAT, users_status TEXT, difficulty FLOAT);";
            $result = $mysqli->query($query2) or die(mysql_error());
            for ($i = 1; $i <= $_POST["questioncount"]; $i += 1) {
                $index = "question" . $i;
                $answer = $_POST[$index];
                $query = "insert into ps$psid values($i,$answer,0.010,NULL,NULL);";
                $result = $mysqli->query($query) or die(mysql_error());
            }
            $mysqli->close();
		}
	}
	else
	{
	echo "Invalid file";
	}
?>
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
