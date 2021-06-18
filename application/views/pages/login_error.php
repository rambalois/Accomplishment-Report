<!DOCTYPE html>
<html>
    <head>
        <!--  Meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/login.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
        <title>Login</title>
    </head>
    <body>
    <div class="banner">
    	<img class="logo" src="<?=base_url()?>assets/img/logo.png" width="100" height="100">
    	<h2 class="header"> Spark Academy of Global City, Inc.</h2>
    	<p class="header"> 4th st. GHQ Signal Village, Brgy. Katuparan, Taguig, 1632 Metro Manila</p>
    </div>
    <div class="login-div">
        <form  id="login-form" class="login-credential" method="POST" action="sign_in">
            <h1 class="login-header">Login</h1>

             <!-- OLD -->
            <!-- <div>
                <input id="input-style" type="text" placeholder="Username">
            </div>
            <div>
            	<input id="input-style" type="password" placeholder="Password">
            </div> 
            <input class="login-button" type="submit" value="Login"> -->

            <!-- <div>
                <input type="email" id="email" name="email" class="form-control input-style email login-input" placeholder="Email">
            </div>
            <div>
                <input type="password" id="password" name="password" class="form-control input-style password login-input" placeholder="Password">
            </div> -->

            <div class="form-group mt-3">
                <input type="email" class="form-control standard-form-field email login-input" id="email" name="email" placeholder="EMAIL" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control standard-form-field password login-input" id="password" name="password" placeholder="PASSWORD" required>
              </div>

            
             <div class="alert alert-danger error-message text-center mt-2 mb-0">Invalid email or password.</div>
             <input class="login-button" type="submit" value="Login">


             <div class="signup">
                 <p>Don't have an account?</p>
                 <a href="registration">Sign up</a>
             </div>
             <img src="<?=base_url()?>assets/img/poster.png" style= "width: 600px; height: 400px; position: absolute; top:200px; left: 100px">
        </form>
    </div>
    </body>
</html>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script>
  
</script>
