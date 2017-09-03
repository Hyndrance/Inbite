<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<!-- BEGIN REGISTRATION FORM -->
<form class="register-form" action="process.php?action=register" method="POST">
	<h3>Sign Up</h3>
	<p> Enter your personal details below: </p>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Full Name</label>
		<div class="input-icon">
			<i class="fa fa-font"></i>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="full_name" /> </div>
	</div>
	<div class="form-group">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email</label>
		<div class="input-icon">
			<i class="fa fa-envelope"></i>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> </div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Gender</label>
		<select name="gender" id="country_list" class="select2 form-control">
			<option>--Gender--</option>
			<option>Male</option>
			<option>Female</option>
		</select>
	</div>
	<p> Enter your account details below: </p>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Username</label>
		<div class="input-icon">
			<i class="fa fa-user"></i>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock"></i>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" /> </div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
		<div class="controls">
			<div class="input-icon">
				<i class="fa fa-check"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password2" /> </div>
		</div>
	</div>
	<div class="form-group">
		<label class="mt-checkbox mt-checkbox-outline">
			<input type="checkbox" name="tnc" /> I agree to the
			<a href="javascript:;">Terms of Service </a> &
			<a href="javascript:;">Privacy Policy </a>
			<span></span>
		</label>
		<div id="register_tnc_error"> </div>
	</div>
	<div class="form-actions">
		<button id="register-back-btn" type="button" class="btn red btn-outline"> Back </button>
		<button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
	</div>
</form>
<!-- END REGISTRATION FORM -->