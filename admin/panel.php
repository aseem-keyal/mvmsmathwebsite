<?php
   include("checkauth.php");
   ?>
<html>
    <?php include("../header.php"); ?>
  <body>
    <?php include("../navbar/navbar.php"); ?>
    <div class="container">
    <a href="/mvmsmath/admin/manageusers.php">Manage Users/Groups</a><br />
    <a href="/mvmsmath/admin/addpset.php">Add Problem Set</a>
    <?php if ($_GET['groups'] === "true") {
        echo '
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Groups modified successfully.
            </div>';
    }
    ?>
    <?php include("../footer.php"); ?>
    </div> <!-- /container -->
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/mvmsmath/assets/bootstrap/js/jquery.js"></script>
    <script src="/mvmsmath/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
