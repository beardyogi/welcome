<div class="container top-margin">
	<div class="row">
	<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li><a  data-toggle="tab" href="#sectionA">Sign In</a></li>
        <li><a data-toggle="tab" href="#sectionB">Join us!</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active show">
        <div class="innter-form">
            <form class="sa-innate-form login_form" method="post" action="<?php echo $base_url.'auth/login'?>">
            <label>Email Address</label>
            <input type="text" name="username" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit">Sign In</button>
            <a href="">Forgot Password?</a>
            </form>
            </div>
            <div class="social-login">
            <p class="text-center">Sign In With</p>


						<div id="status">
						</div>
    		<ul>
            <li><fb:login-button scope="public_profile,email" onlogin="checkLoginState();" data-size="large"></fb:login-button></li>
            <li><div class="g-signin2" data-onsuccess="onSignIn"></div></li>
            </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
			<div class="innter-form">
            <form class="sa-innate-form signup_form" method="post" action="<?php echo $base_url.'auth/signup'?>">
            <label>First Name</label>
            <input type="text" name="firstname" required >
						<label>Last Name</label>
            <input type="text" name="lastname" required >
            <label>Email</label>
            <input type="text" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit">Join now</button>
            <p>By clicking Join now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p>
            </form>
            </div>
            <div class="social-login">
            <p class="text-center"> Register With </p>
			      <ul>
							<li><fb:login-button scope="public_profile,email" onlogin="checkLoginState();" data-size="large"></fb:login-button></li>
	            <li><div class="g-signin2" data-onsuccess="onSignIn"></div></li>

            </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
		<div class="col-md-4"></div>
    </div>
</div>
