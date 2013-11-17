<?php
   include("checkauth.php");
   ?>
<html>
  <?php include("../header.php"); ?>
  <body>
  <?php include("../navbar/navbar.php"); ?>
  <div class="container">
    <form action="changegroups.php" method="post" accept-charset="utf-8">
        <p>Add or remove users from groups</p>
        <input type="radio" name="operation" id="operation" value="add" />Add
        <br />
        <input type="radio" name="operation" id="operation" value="remove" />Remove
        <br />
        <br />
        <input type="text" name="users" id="users" value="Enter users here" />
        <br />
        <input type="text" name="group" id="group" value="Enter group here" />
        <br />
        <button type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"> Submit </button>
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
