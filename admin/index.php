<?php
if (isset($_COOKIE['admin_id'])) { header('Location: http://' . $_SERVER['SERVER_NAME'] . '/mvmsmath/admin/panel.php'); }
?>
<html>
  <?php include("../header.php"); ?>
  <body>
  <?php include("../navbar/navbar.php"); ?>
  <div class="container">
    <h1>Admin Login</h1>
  <?php include("/var/www/mvmsmath/admin/login.php"); ?>
  <?php include("../footer.php"); ?>
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/bootstrap/js/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
