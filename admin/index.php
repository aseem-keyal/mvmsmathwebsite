<?php
if (isset($_COOKIE['admin_id'])) { header('Location: http://' . $_SERVER['SERVER_NAME'] . '/mvmsmath/admin/panel.php'); }
?>
<html>
  <?php include("../header.php"); ?>
  <body>
  <?php include("../navbar/navbar.php"); ?>
  <div class="container">
    <form action="/mvmsmath/admin/authentication/login.php" method="post">
      Email: <input name="email" type="text" /><br />
      Password: <input name="pwd" type="password" /><br />
      <input type="submit" />
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
