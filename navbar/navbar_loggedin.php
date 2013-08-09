<div class="navbar navbar-fixed-top">
     <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/mvmsmath/index.php">MVMS Math Club</a>
          <div class="nav-collapse">
            <ul class="nav">
	    	<?php
	   	$page = $_SERVER['REQUEST_URI'];
	   	?>
              <li <?php if ($page == '/mvmsmath/index.php' or $page == NULL){ echo 'class="active"'; } ?>><a href="/mvmsmath/index.php"><i class="icon-home icon-white"></i> Home</a></li>
              <li <?php if ($page == '/mvmsmath/about.php'){ echo 'class="active"'; } ?>><a href="/mvmsmath/about.php"><i class="icon-briefcase icon-white"></i> About</a></li>
              <li <?php if ($page == '/mvmsmath/contact.php'){ echo 'class="active"'; } ?>><a href="/mvmsmath/contact.php"><i class="icon-comment icon-white"></i> Contact</a></li>
           </ul>
	   <ul class="nav pull-right">
	      <li class="divider-vertical"></li>
              <li class="dropdown">
               <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo $_COOKIE["fname"] . " " . $_COOKIE["lname"]; ?> <strong class="caret"></strong></a>                        <ul class="dropdown-menu">
              <li><a href="/mvmsmath/profile.php">Profile</a></li>
              <li><a href="/mvmsmath/problemsets.php">Problem Sets</a></li>
              <li><a href="/mvmsmath/qotd.php">Question of the Day</a></li>
              <li class="divider"></li>
              <li><a href="/mvmsmath/authentication/logout.php">Sign Out</a></li>
            </ul>
            </li>
          </ul>
            <form class="navbar-search pull-right">
	      <input type="text" class="search-query" placeholder="Search">
	    </form>
	  </div><!--/.nav-collapse -->
        </div>
     </div>
</div>
