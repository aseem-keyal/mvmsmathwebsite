<!DOCTYPE html>
<html lang="en">
  <?php include("header.php"); ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
      <ul class="nav nav-tabs">
      <li><a href="#constitution" data-toggle="tab">Our Constitution</a></li>
      <li><a href="#members" data-toggle="tab">Our Members</a></li>
      </ul>
      <div class="tab-content">
	<div class="tab-pane active" id="constitution">
	  <?php include('constitution.php'); ?>
	</div>
	<div class="tab-pane" id="members">
	  <?php include('members.php'); ?>
      </div> <!--End Our members tab div-->
      </div> <!--End all tab content-->
      <?php include ("footer.php"); ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/bootstrap/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
