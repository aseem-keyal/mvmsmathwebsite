<!DOCTYPE html>
<html lang="en">
  <?php include("header.php"); ?>
  <body>

    <?php include("navbar/navbar.php"); ?>
    <div class="container">
    <div class="container-fluid">

      <div class="span3">
        <div class="well sidebar-nav">
          <ul class="nav nav-list">
            <li class="nav-header">Questions</li>
            <li><a href="problemsets.php">Problem Sets</a></li>
            <li><a href="#">Other Resources</a></li>
            <li class="nav-header">Sidebar</li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!--/well -->
      </div><!--/span-->

      <div class="span8">
	<ul class="nav nav-tabs">
	  <li><a href="#main" data-toggle="tab">Main Information</a></li>
	  <li><a href="#stats" data-toggle="tab">Statistics</a></li>
	  <li><a href="#announcements" data-toggle="tab">Announcements</a></li>
	</ul>
	<div class="tab-content">
	  <div class="tab-pane active" id="main">
	    <?php include("profile/profile_main.php"); ?>
	  </div>
	  <div class="tab-pane" id="stats">
	    <?php include("profile/profile_stats.php"); ?>
	  </div>
 	  <div class="tab-pane" id="announcements">
	  <?php include("profile/profile_announcements.php"); ?>
	  </div>
	</div> <!--/tab content-->
      </div> <!--/span-->
    </div> <!-- /container-fluid -->
    </div> <!--/container-->
    <div class="container">
    <?php include ("footer.php"); ?>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/bootstrap/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/bootstrap/js/raphael-min.js"></script>
    <script src="./assets/bootstrap/js/g.raphael-min.js"></script>
    <script src="./assets/bootstrap/js/g.pie-min.js"></script>
  </body>
</html>
