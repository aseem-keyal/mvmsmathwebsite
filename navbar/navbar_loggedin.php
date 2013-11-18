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
                <?php
                if(isset($_COOKIE['admin_id'])){
                    echo '<li><a href="/mvmsmath/admin/panel.php"><i class="icon-th-large icon-white"></i> Panel</a><li>';

                }
                else {
                    echo '<li><a href="/mvmsmath/profile.php"><i class="icon-th-large icon-white"></i> Profile</a></li>';
                    echo '<li><a href="/mvmsmath/problemsets.php"><i class="icon-list icon-white"></i> Problem Sets</a></li>';
                }
        ?>
           </ul>
	   <ul class="nav pull-right">
              <li class="dropdown">
               <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo $_COOKIE["fname"] . " " . $_COOKIE["lname"]; ?> <strong class="caret"></strong></a>                        <ul class="dropdown-menu">
        <?php
        if(isset($_COOKIE['admin_id'])){
            echo '<li><a href="/mvmsmath/admin/authentication/logout.php">Sign Out</a></li>';

        }
        else {
            echo '<li><a href="/mvmsmath/authentication/logout.php">Sign Out</a></li>';
        }
?>
            </ul>
            </li>
          </ul>
	  </div><!--/.nav-collapse -->
        </div>
     </div>
</div>
