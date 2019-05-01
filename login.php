<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="signup.js"></script>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" type="text/css" media="screen" href="login.css">
</head>

<body>
  <div class="login_wrapped">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
       
	   <form class="sign-in-htm" action="signin.php" method="POST">
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="username" name="userid" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="password" name="passid" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
        </form>

        <form class="sign-up-htm" name="Form" action="signupDB.php" onsubmit="return Validation()" method="POST">
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="username" name="username" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="password" name="password" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <label for="pass" class="label">Confirm Password</label>
            <input id="pass" name="cpass" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign Up">
          </div>
          <div class="group">
            <input type="reset" class="button" value="Reset">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <label for="tab-1">Already A Member?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>