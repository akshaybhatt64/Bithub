<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['firstName']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/dashka.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">BitHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
	        <ul class="nav navbar-nav mr-auto">
	          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
	          <li class="nav-item dropdown drop"><a class="nav-link" id="messagesDropdown" href="#" data-toggle="dropdown">Notifications</a>
                  <div class="dropdown-menu drop-menu">
                    <h6 class="dropdown-header">New Messages:</h6>

                    <a class="dropdown-item" href="#">
                      <strong>David Miller</strong>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small drop-message">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <strong>Jane Smith</strong>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small drop-message">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <strong>John Doe</strong>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small drop-message">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    
                    <a class="dropdown-item small" href="#">View all messages</a>
                  </div>
                </li> 
	          <li class="nav-item"><a class="nav-link" href="user_prof.php">Profile</a></li>
	        </ul>
	        <ul class="nav navbar-nav ml-auto">
	          <li class="nav-item"><a class="nav-link" href="dash.php?logout='1'"><span class="fa fa-sign-in"></span> Log Out</a></li>
	        </ul>
      	</div>
    </nav>
    	
	<div class="container">
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	//echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
		<div class="row">
			<div class="col-sm-3 entire-side">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-sm-9">
				<div class="container entire-post">
					<div class="row">
							<div class="col-sm-4 img-holder">
								<img src="img/img_avatar1.png" class="img-responsive rounded-circle user-img">
							</div>		
							<div class="col-sm-8 post-content">
								<div>
									<h4>Title</h4>
								</div>
								<div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<br>
								<div class="post-footer">
									<button type="button" class="btn btn-danger">Like</button>
								</div>	
							</div>		
					</div>
				</div>
				<div class="container entire-post">
					<div class="row">
							<div class="col-sm-4 img-holder">
								<img src="img/img_avatar1.png" class="img-responsive rounded-circle user-img">
							</div>		
							<div class="col-sm-8 post-content">
								<div>
									<h4>Title</h4>
								</div>
								<div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<br>
								<div class="post-footer">
									<button type="button" class="btn btn-danger">Like</button>
								</div>	
							</div>		
					</div>
				</div>
			</div>
				
		</div>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>