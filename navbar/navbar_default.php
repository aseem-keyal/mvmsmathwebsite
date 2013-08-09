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
              <li><a href="/mvmsmath/register"><i class="icon-pencil icon-white"></i> Sign Up</a></li>
	      <li class="divider-vertical"></li>
              <li class="dropdown">
               <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-user icon-white"></i> Sign In <strong class="caret"></strong></a>
              <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
	      <form action="/mvmsmath/authentication/login.php" method="POST" class="form">
      	      	    <fieldset>
			<label for="email">Email</label>
			<div class="div_text">
			<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input name="email" type="text" id="log inputIcon" value="" class="username span2" placeholder="Email"></div>
			</div>
			<label for="password">Password</label>
			<div class="div_text">
			<div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input name="pwd" type="password" id="pwd inputIcon" class="password span2" placeholder="Password"></div>
                       </div>

		       <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>"><input name="a" type="hidden" value="login">
		       <div class="button_div">
			<input name="rememberme" type="checkbox" id="rememberme" value="forever">&nbsp;Remember me&nbsp;&nbsp;<input type="submit" name="Submit" value="Login" class="btn btn-primary">
			</div>
	      </fieldset>
	   </form>
           </div>
            </li>
          </ul>
            <form class="navbar-search pull-right">
	      <input type="text" class="search-query" placeholder="Search">
	    </form>
	  </div><!--/.nav-collapse -->
        </div>
     </div>
</div>
