<!DOCTYPE html>
<html lang="en">
	<?php include("/var/www/mvmsmath/header.php"); ?>
<body>
	<?php include("/var/www/mvmsmath/navbar/navbar.php"); ?>
	<div class="container">
<?php if ($_GET["pending"] == "True"){
    echo '<h1>Account Pending</h1>
        <p>Your account is currently pending approval, if you have any questions please contact <a href="mailto:aseem.keyal@gmail.com">aseem.keyal@gmail.com</a>.</p>';
} else {
    echo '<h1>Login Failed</h1>
        <p>Incorrect email or password, please contact <a href="mailto:aseem.keyal@gmail.com">aseem.keyal@gmail.com</a> if trying to log in again does not work.</p>';
}
?>
        <?php include("/var/www/mvmsmath/login.php"); ?>
    <?php include("/var/www/mvmsmath/footer.php"); ?>
    </div><!--/row-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/mvmsmath/assets/bootstrap/js/jquery.js"></script>
    <script src="/mvmsmath/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
  </body>
</html>



