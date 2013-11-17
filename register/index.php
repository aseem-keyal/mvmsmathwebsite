<!DOCTYPE html>
<html lang="en">
	<?php include("/var/www/mvmsmath/header.php"); ?>
<body>
	<?php include("/var/www/mvmsmath/navbar/navbar.php"); ?>
	<div class="container">
		<div class="row">
			<div class="span8">
				<form class="form-horizontal" id="registerHere" action="/mvmsmath/register/process_registration.php" method="post">
				<fieldset>
				<h1>Registration</h1>
				<div class="control-group">
					<label class="control-label" for="input01">First name</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="user_fname" name="user_fname">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Last name</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="user_lname" name="user_lname">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Grade</label>
					<div class="controls">
						<input type="radio" class="input-xlarge" id="user_grade" name="user_grade" value="6">6 <input type="radio" class="input-xlarge" id="user_grade" name="user_grade" value="7">7 <input type="radio" class="input-xlarge" id="user_grade" name="user_grade" value="8">8
					</div>
				</div>
				 <div class="control-group">
					<label class="control-label" for="input01">Email</label>
					  <div class="controls">
						<input type="text" class="input-xlarge" id="user_email" name="user_email">
					  </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Password</label>
					  <div class="controls">
						<input type="password" class="input-xlarge" id="pwd" name="pwd">
					  </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="input01">Confirm Password</label>
					  <div class="controls">
						<input type="password" class="input-xlarge" id="cpwd" name="cpwd">
					  </div>
				</div>

				<div class="control-group">
					<label class="control-label" for="input01"></label>
					  <div class="controls">
					   <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Create My Account</button>
					  </div>
				</div>
                <?php
                if ($_GET['email'] === "false") {
                    echo '
                        <div class="alert alert-error">
                           That email is already registered, please try again with another email.
                        </div>';
                }
                ?>
				  </fieldset>
				</form>
			</div>
		</div>

			<?php include("/var/www/mvmsmath/footer.php"); ?>
			  </div><!--/row-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/mvmsmath/assets/bootstrap/js/jquery.js"></script>
    <script src="/mvmsmath/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
			$("#registerHere").validate({
				rules:{
					user_fname:"required",
					user_lname:"required",
					user_grade:"required",
					user_email:{
							required:true,
							email: true
						},
					pwd:{
						required:true,
						minlength: 6
					},
					cpwd:{
						required:true,
						equalTo: "#pwd"
					},
				},
				messages:{
					user_fname:"Enter your first name",
					user_lname:"Enter your last name",
					user_grade:"Enter your grade",
					user_email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					pwd:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					},
					cpwd:{
						required:"Enter confirm password",
						equalTo:"Password and Confirm Password must match"
					},
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>
  </body>
</html>



