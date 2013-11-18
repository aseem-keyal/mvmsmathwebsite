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
           </ul>
	    <ul class="nav pull-right">
        <?php if ($page != '/mvmsmath/admin/') {
            echo '
	      <li class="divider-vertical"></li>
              <li><a href="/mvmsmath/register"><i class="icon-pencil icon-white"></i> Sign Up</a></li>
	      <li class="divider-vertical"></li>
              <li class="dropdown">
               <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i> Sign In <strong class="caret"></strong></a>
               <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">';
            include("/var/www/mvmsmath/login.php");
            echo '
           </div>
            </li>
            ';
        }
        else {
            echo '
	      <li class="divider-vertical"></li>
	      <li class="divider-vertical"></li>
              <li class="dropdown">
               <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i> Sign In <strong class="caret"></strong></a>
              <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;"> ';
            include("/var/www/mvmsmath/admin/login.php");
            echo '
           </div>
            </li>
            ';
        }
        ?>
          </ul>
	  </div><!--/.nav-collapse -->
        </div>
     </div>
</div>
           </div>
            </li>
          </ul>
	  </div><!--/.nav-collapse -->
        </div>
     </div>
</div>
