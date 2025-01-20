<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/Singup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<form action="con_Singup.php" method="post">
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <div class="sign-in-htm">
          <div class="group">
            <label for="log_user" class="label">Username</label>
            <input id="log_user" name="log_uname" type="text" class="input" >
          </div>
          <div class="group">
            <label for="log_pass" class="label">Password</label>
            <input id="log_pass" name="log_pswd" type="password" class="input" >
          </div>
          <div class="group">
            <input id="check" type="checkbox" class="check" name="log_rme" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
          </div>
          <div class="group">
            <input type="submit" name="log_submit" class="button" value="Log In">
          </div>
        </div>

        <div class="sign-up-htm">
          <div class="group">
            <label for="sign_user" class="label">Username</label>
            <input id="sign_user" name="sign_uname" type="text" class="input" >
          </div>
          <div class="group">
            <label for="sign_pass" class="label">Password</label>
            <input id="sign_pass" name="sign_pswd" type="password" class="input" >
          </div>
          <div class="group">
            <label for="email" class="label">Email Address</label>
            <input id="email" name="sign_email" type="email" class="input" >
          </div>
          <div class="group">
            <label for="mobile" class="label">Mobile</label>
            <input id="mobile" name="sign_mob" type="text" class="input" >
          </div>
          <div class="group">
            <input type="submit" name="sign_submit" class="button" value="Sign Up">
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>
