<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css" class="css">
</head>

<body>
    <div class="container justify-content-md-center main-form"> 
        <div class="form-body">
          <form action="login.php" method="post" class="text-center" id="login-form">
          <?php include('errors.php'); ?>
          <div class="upper">
           <h2>Welcome</h2>
           <img src="img/img_avatar1.png" alt="avatar" class="img-responsive mx-auto rounded-circle user-img">
           </div>
           <div class="fields">
            <div class="input-group mb-3">
              <input type="text" class="form-control span-body" placeholder="Your Email" id="mail" name="email">
              <div class="input-group-append">
                <span class="input-group-text span-text">@somaiya.edu</span>
              </div>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text span-text">Password</span>
              </div>
              <input type="password" class="form-control span-body" placeholder="Password" id="pwd" name="password">
              </div>
            <button type="submit" class="btn btn-primary" name="login_user">Log In</button>
            <div class="linker">
           <span class="linker">New here ? <a href="register.php" class="href">Register now</a></span>
           </div>
            
            </div>
         </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    
</body>  
</html>
