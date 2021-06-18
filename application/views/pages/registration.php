<!DOCTYPE html>
<html>
<head>
    
     <!--  Meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/registration.css">

    <title> Registration Form</title>
      <style>
    .background-body {
       background-image: url('<?=base_url()?>assets/img/y.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
    }

  </style>
</head>
<body class="background-body">
    <div class="registration-form">
        <h1>Register</h1>
        <form method='post' action='<?=base_url()?>register'>
            <p>First Name:</p>
            <input type="text" name="firstName" placeholder="First Name">

            <p>Last Name:</p>
            <input type="text" name="lastName" placeholder="Last Name">

<!--             <p>Username:</p>
            <input type="text" name="username" placeholder="Username"> -->

            <p> Email:</p>
            <input type="email" name="email" placeholder="Email">

            <p> Password:</p>
            <input type="password" name="password" placeholder="Password">

            <!-- FIX ME -->
            <div>
                <p> I am a 
                <select name="role" id="role">
                  <option value="1">Teacher</option>
                  <option value="2">Student</option>
                </select></p>
            </div>


            <button type="submit">Sign up</button>
        </form>
    </div>
</body>
</html>