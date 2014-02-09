<!DOCTYPE html>
<html lang="en">
  <?php include("header.php") ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
    <table cellspacing="0" class="table">
    <tr>
        <th>PS#</th>
        <th>Description</th>
        <th>Expiry Date</th>
        <th>Status</th>
        <th>Open</th>
    </tr>
    <?php
	if (isset($_COOKIE["fname"])) {
        $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
        $user_id = $_COOKIE['user_id'];
        $query = "select problem_sets from groups where members like '%,$user_id,%';";
        $res = $mysqli->query($query) or die(mysql_error());
        while ($row = $res->fetch_assoc()) {
            extract($row);
        }
        $tables = array_filter(explode(",",$problem_sets));
        if (count($tables) > 0) {
        foreach ($tables as &$ps) {
            $number = substr($ps,2);
            $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
            $user_id = $_COOKIE['user_id'];
            $query = "select * from details where id = 'ps$number';";
            $res = $mysqli->query($query) or die(mysql_error());
            while ($row = $res->fetch_assoc()) {
                echo '<tr>
                    <td>' . $number . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['expire'] . '</td>
                    <td>' . getStatus($user_id, $number) . '</td>
                    <td><a class="btn btn-primary" href="viewer/index.php?id=ps' . $number . '">Open Problems</a></td>
                </tr>';
            }
        }
        }
        else {
            echo '</table>
                <p>Please wait for your account to be added to a group.</p>';
        }
    }
	else
        echo '<p>Please log in to see your problem sets.</p>';
    function getStatus($id, $pset) {
        $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_questions");
        $query = "select users_status from ps$pset;";
        $res2 = $mysqli->query($query) or die(mysql_error());
        $total = 0;
        $answered = 0;
        while ($row = $res2->fetch_assoc()) {
            parse_str($row['users_status'], $stats);
            $total = $total + 1;
            if ($stats[$id] == '1' or $stats[$id] == '3' or $stats[$id] == '4'){
                $answered = $answered + 1;
            }
        }
        $combined = $answered . "/" . $total;
        return $combined;
    }
	?>
    </table>
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
