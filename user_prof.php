<?php include('upload.php') ?>
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
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/user_prof.css">
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
              <li class="nav-item"><a class="nav-link" href="dash.php">Home</a></li>
	          <li class="nav-item active"><a class="nav-link" href="#">Profile</a></li>
	          <li class="nav-item add" data-toggle="modal" data-target="#myModal"><a class="nav-link" href="#">&plus;</a></li>
	        </ul>
	        <ul class="nav navbar-nav ml-auto">
	          <li class="nav-item"><a class="nav-link" href="dash.php?logout='1'"><span class="fa fa-sign-in"></span> Log Out</a></li>
	        </ul>
      	</div>
    </nav>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload new document</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="user_prof.php" method="post" enctype="multipart/form-data">        
          <div class="row">
              <div class="col-sm-3">File name:</div>
              <div class="col-sm-9"><input type="text" name="fileName" required/></div>
          </div>
          <div class="row">
              <div class="col-sm-3">File description:</div>
              <div class="col-sm-9"><div class="form-group"><textarea class="form-control" rows="5" name="fileDesc" required></textarea></div></div>
          </div>
          <div class="row">
             <div class="col-sm-3">File:</div>
              <div class="col-sm-9">
                <input type="file" name="upload[]" multiple>
              </div> 
          </div>
          <br>
          <button type="submit" class="btn btn-block btn-dark" name="upload">Upload</button> 
          </form>
          </div>
      </div>
    </div>
  </div>
    <div class="container-fluid header-img head-text">
      <img src="img/home-bg.jpg" alt="Header img" class="img-responsive actual-header-img">
      <div class="img-holder">
          <img src="img/img_avatar1.png" alt="user img" class="img-responsive rounded-circle user-img">
        </div>
           <span class="error-display"><?php include('errors.php'); ?></span>
            <div class="head-name">Name</div>
            <div class="followers">
            <span class="num">14</span>
            <span class="foll">followers</span>
            </div>
            <div class="following">
            <span class="num">14</span>
            <span class="foll">following</span>
            </div>  
        
    </div>
    <div class="full-content">
      <div class="row">
        <div class="col-sm-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin nibh sit amet commodo. Sit amet facilisis magna etiam tempor orci. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Ullamcorper sit amet risus nullam eget felis eget nunc. Lorem donec massa sapien faucibus. Tortor consequat id porta nibh venenatis. Nascetur ridiculus mus mauris vitae. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Cras sed felis eget velit aliquet sagittis id consectetur purus. At elementum eu facilisis sed odio morbi quis commodo. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Donec ultrices tincidunt arcu non sodales.

          Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Quam elementum pulvinar etiam non quam. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Nisi est sit amet facilisis magna etiam tempor orci. Molestie at elementum eu facilisis sed odio morbi. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Dignissim suspendisse in est ante in. Sed cras ornare arcu dui vivamus arcu felis bibendum ut. Elementum eu facilisis sed odio morbi quis commodo. Turpis egestas integer eget aliquet nibh praesent tristique. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Id semper risus in hendrerit gravida rutrum quisque non tellus. Eget est lorem ipsum dolor sit amet consectetur adipiscing elit. At consectetur lorem donec massa sapien faucibus. Justo nec ultrices dui sapien eget mi. Aliquam vestibulum morbi blandit cursus risus. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat.

          Tristique magna sit amet purus gravida quis. Urna molestie at elementum eu. Nec dui nunc mattis enim ut. Tempus egestas sed sed risus pretium quam vulputate. Nec feugiat in fermentum posuere urna nec tincidunt praesent semper. Turpis nunc eget lorem dolor sed viverra ipsum. Facilisis magna etiam tempor orci eu. Nulla facilisi cras fermentum odio eu feugiat. Aliquam eleifend mi in nulla posuere. Ipsum dolor sit amet consectetur. Mattis ullamcorper velit sed ullamcorper. Mi eget mauris pharetra et ultrices neque ornare aenean euismod. Elit pellentesque habitant morbi tristique senectus et netus. Odio ut enim blandit volutpat maecenas. Vestibulum lectus mauris ultrices eros. Volutpat maecenas volutpat blandit aliquam etiam erat. Tempor orci dapibus ultrices in iaculis nunc. Varius morbi enim nunc faucibus.
       </div>
       
       <div class="col-sm-10 content">
       <input class="form-control search-input" id="myInput" type="text" placeholder="Search.."><br>
       <div id="myDIV">
        
         <div class="row all-files">
          
           <div class="col-sm-3 file card">
            <div class="card-body">
             <div class="file-title card-title">
               <h2>File 1</h2>
             </div>
             <div class="file-descriptor">
              <p>
                CEO at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.
              </p>
              <a href="document.html"><button type="button" class="btn btn-link selector">...</button></a>
             </div>  
            </div>
           </div>
           <div class="col-sm-3 file card">
            <div class="card-body">
             <div class="file-title card-title">
               <h2>File 2</h2>
             </div>
             <div class="file-descriptor">
              <p>
                Teacher at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.
              </p>
              <a href="document.html"><button type="button" class="btn btn-link selector">...</button></a>
             </div>  
            </div>
           </div>
           <div class="col-sm-3 file card">
            <div class="card-body">
             <div class="file-title card-title">
               <h2>File 3</h2>
             </div>
             <div class="file-descriptor">
              <p>
                Student at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.
              </p>
              <a href="document.html"><button type="button" class="btn btn-link selector">...</button></a>
             </div>  
            </div>
           </div>
           <div class="col-sm-3 file card">
            <div class="card-body">
             <div class="file-title card-title">
               <h2>File 4</h2>
             </div>
             <div class="file-descriptor">
              <p>
                Principal at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.
              </p>
              <a href="document.html"><button type="button" class="btn btn-link selector">...</button></a>
             </div>  
            </div>
           </div>
           <div class="col-sm-3 file card">
            <div class="card-body">
             <div class="file-title card-title">
               <h2>File 5</h2>
             </div>
             <div class="file-descriptor">
              <p>
                Dean at Mighty Schools. Marketing and Advertising. Seeking a new job and new opportunities.
              </p>
              <a href="document.html"><button type="button" class="btn btn-link selector">...</button></a>
             </div>  
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
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myDIV .card").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
</body>
</html>