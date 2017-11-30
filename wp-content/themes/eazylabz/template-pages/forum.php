<?php 
/* Template Name: Forum 
*/ 
get_header();

?>


<div class="innerTemplate ContactTemplate">
	<section class="innerPageBanner" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/forumBanner.png');">
		<div class="container">
			<div class="banneInner">
				<div class="banneInnerCon">
					<h1>Forum</h1>
					<div class="bradCrum">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><span>Forum</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd contactContainer">
		<div class="container">
			<div class="forumContainer">
				<h2>Self Registration</h2>

				<div class="contactForm">
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="FName">First Name <span>*</span></label>
									<input id="FName" name="FName" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="LName">Last Name <span>*</span></label>
									<input id="LName" name="LName" class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="UserName">User Name <span>*</span></label>
									<input id="UserName" name="UserName" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="Email">Email Address <span>*</span></label>
									<input id="Email" name="Email" class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="Password">Password <span>*</span></label>
									<input id="Password" name="Password" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="ConfirmPassword">Confirm Password <span>*</span></label>
									<input id="ConfirmPassword" name="ConfirmPassword" class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group captchaContainer">
									<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/captcha.png" alt="Captcha" style="margin-left: -3px;">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group text-right">
									<input type="submit" value="Register">
								</div>
							</div>
						</div>
					</form>

					<!-- <p><input class="check" type="checkbox" name="TAC" id="TAC"><label for="TAC"></label> I agree to the <a href="#" data-toggle="modal" data-target="#tac">Terms &amp; Conditions</a></p> -->
					<div class="formFooter vmiddle">
						<div style="position: relative;top: 1px;width: 25px;">
							<p><input class="check" type="checkbox" name="TAC" id="TAC"><label for="TAC"></label></p>
						</div>
						<div>
							<p> I agree to the <a href="#" data-toggle="modal" data-target="#tac">Terms &amp; Conditions</a></p>
						</div>
					</div>

				</div>

				<div class="loginWithContainer text-center">
					<div class="or">OR Sign up with</div>
					<div class="loginWith">
						<div class="loginButton">
							<a class="facebookButton" href=""><i class="fa fa-facebook"></i> Connect with Facebook</a>
							<a class="googleButton" href=""><i class="fa fa-google-plus"></i> Connect with Google</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>