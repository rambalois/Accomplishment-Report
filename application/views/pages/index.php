<!DOCTYPE html>
<html>
    <head>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
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
    <div class="banner" style="background-color: rgb(157 204 55);">
    	<img class="logo" src="<?=base_url()?>assets/img/logo.png" width="100" height="100">
    	<h2 class="header"> Spark Academy of Global City, Inc.</h2>
    	<p class="header"> 4th st. GHQ Signal Village, Brgy. Katuparan, Taguig, 1632 Metro Manila</p>
    </div>
    <div class="login-div">
        <form  id="login-form" class="login-credential" method="POST" action="sign_in">
            <h1 class="login-header">Login</h1>

            <div class="form-group mt-3">
                <input type="email" class="form-control standard-form-field email login-input" id="email" name="email" placeholder="EMAIL">
              </div>
              <div class="form-group">
                <input type="password" class="form-control standard-form-field password login-input" id="password" name="password" placeholder="PASSWORD">
              </div>

            
             <div class="alert alert-danger error-message d-none text-center mt-2 mb-0"></div>
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
 $(document).ready(function() {
  
  $(document).on('click', '.btn-login', function () {
        var check = validateInput();
        $(this).prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
        if(check) {
            loginUser();
        } else {
            $(this).prop('disabled', false).html('Login');
        }
    });

    $('.login-input').on('keyup', function (e) {
        if (e.keyCode == 13) {
            $('#btn-login').prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
            var check = validateInput();
            if(check) {
                loginUser();
            } else {
                $('#btn-login').prop('disabled', false).html('Login');
            }
        }
    });

    function validateInput() {
        $('.validate_error_message').remove();
        $('.required_input').removeClass('err_inputs');
        var check_user_name = $("#email");
        var check_password = $("#password");
        var error_message = "<span class='validate_error_message'>This field is required</span>";

        if (check_user_name.val() == "" ||  check_password.val() == "") {
            if (check_user_name.has("span") && $("span").hasClass("warning-note")) {
                
            } else {
                if(check_user_name.val() == '') {
                    $(check_user_name).addClass("err_inputs");
                    $(error_message).addClass("d-block warning-note").insertAfter($(check_user_name));
                }
                    
                if(check_password.val() == '') {
                    $(check_password).addClass("err_inputs");
                    $(error_message).addClass("d-block warning-note").insertAfter($(check_password));
                }          
            }
            return false;
        } else {
            $('.validate_error_message').remove();
            $(check_password).removeClass('err_inputs');
            $(check_user_name).removeClass('err_inputs');
            return true;    
        }
    }

    function loginUser() {
        $('.error-text-login').addClass('d-none').removeClass('d-block');
        var form = $('#login-form').serialize();
        console.log(`form: ` + form);
        var email = $('#email').val();
        var password = $('#password').val();
        console.log(email + ", " + password);
        $.ajax({
                url: '<?=base_url()?>ajax/login',
                type: 'POST',
                data: {
                  email: 'test@email.com',
                  password: '123'
                },
            }).done(function (data) {
              var result = JSON.parse(data);
                if(result.success === true) {
                    window.location.replace(result.message);
                } else {
                    $('#password').val('');
                    $('.error-message').removeClass('d-none').addClass('d-block').html(result.message);
                    $('#btn-login').html('Login').prop('disabled', false);
                }
            });
    }
 });
  
</script>
