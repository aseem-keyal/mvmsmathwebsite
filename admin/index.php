<html>
  <?php include("../header.php"); ?>
  <body>
  <?php include("../navbar/navbar.php"); ?>
  <div class="container">
    <form action="/mvmsmath/admin/authentication/login.php" method="post">
      Email: <input name="email" type="text" /><br />
      Password: <input name="pwd" type="password" /><br />
      <input type="submit" />
    </form>
  <?php include("../footer.php"); ?>
    </div>
  </body>
</html>
