<!DOCTYPE html>
<html lang="en">
  <?php include ("header.php"); ?>
  <body>
    <?php include("navbar/navbar.php"); ?>
    <div class="container">
    <div class="container-fluid">
      <div class="row-fluid">
    <?php include("resources.php"); ?>
	<div class="span4">
	  <div class="hero-unit">
            <h1>Welcome</h1>
            <br />
            <p>Answer questions and view your stats here.</p>
            <br />
        <p><a class="btn btn-primary btn-large" href="register/">Register now &raquo;</a></p>
	  </div>
	</div>
	<div class="span4">
	  <div id="homepage-slider" class="carousel slide">
	    <div class="carousel-inner">
	      <div class="active item">
		<img src="http://lorempixel.com/g/600/480" alt="" />
		<div class="carousel-caption">
		<p>Captions go here.</p>
		</div>
	      </div>
	      <div class="item">
		<img src="http://lorempixel.com/g/600/480" alt="" />
		<div class="carousel-caption">
		<p>Captions go here.</p>
		</div>
	      </div>
	      <div class="item">
		<img src="http://lorempixel.com/g/600/480" alt="" />
		<div class="carousel-caption">
		<p>Captions go here.</p>
		</div>
	      </div>
	    </div>
	    <a class="carousel-control left" href="#homepage-slider" data-slide="prev">&lsaquo;</a>
	    <a class="carousel-control right" href="#homepage-slider" data-slide="next">&rsaquo;</a>
	  </div>
	</div>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span3">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <?php include("footer.php"); ?>

    </div> <!-- /container -->
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/bootstrap/js/jquery.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
