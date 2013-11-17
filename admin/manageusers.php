<?php
   include("checkauth.php");
   ?>
<html>
  <?php include("../header.php"); ?>
  <body>
  <?php include("../navbar/navbar.php"); ?>
  <div class="container">
    <a href="/mvmsmath/admin/viewusers.php">View Users</a><br />
    <a href="/mvmsmath/admin/pendingusers.php">View Users Pending Approval</a><br />
    <a href="/mvmsmath/admin/viewgroups.php">View Groups</a><br />
    <a href="/mvmsmath/admin/managegroups.php">Manage Groups</a><br />
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
