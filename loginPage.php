<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Php email validation form</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
     <link href="./css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>

    <div class="container">
        <div class = "row">
           <div class="center">
      <form class="form-signin" action="login.php" method="post" name="r_form" >
        <h2 class="form-signin-heading">Please Log-in</h2>
        <label for="inputEmail" class="sr-only"> Email address</label>
          <?php if(isset($_GET['email']) && $_GET['email']== 1 ){
           echo '<span class="text-muted alert-danger">Your email or password is wrong </span>';
        }
        ?>

        <input type="text" id="inputEmail" name = "r_email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="r_password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="r_send">Sign in</button>
      </form>
      <p><a href = "index.php">Don't' have an account yet? Sign up</a></p>
            </div>
        </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


