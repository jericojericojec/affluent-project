<?php
// start session when opened the page
function startSess()
{
  session_start();
  $_SESSION['username'] = $_POST["username"];
  header("Location:Calendar.php");
  exit();
}

// call the session start function -> redirect to the home.php
  session_start();
  if(isset($_SESSION['username']) == 1){
      header("Location:home.php");
  }
  else if(isset($_SESSION['username']) == 0){
  }
?>

<html lang="en">
<head>
  <!-- default settings -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- bootstrap links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <!-- css styles -->
  <link href="css/login/styles.css" type="text/css" rel="stylesheet">
  <!-- scripts -->
  
  <title>Affluent Properties Leasing and Sales - Task Management System</title>
  
</head>
<body class="background">
  <!-- bootstrap container & row for responsive layout -->
  <div class="modal-dialog col-md-10">
    <div class="modal-content form-container">
      <div class="modal-header">
        <!-- company logo -->
        <img src="img/login/company.png" class="img-thumbnail thumbnail" alt="Affluent" title="Affluent Properties Leasing and Sales">
      </div>
        <div class="modal-body">
          <!-- login form -->
            <form class="col-md-12 center-block" action="<?php $_SERVER["PHP_SELF"]?>" id="form" method="post" name="form">
              
              <?php
                if(isset($_POST["loginSubmitted"]))
                {
                  if(!empty($_POST["username"]) && !empty($_POST["password"]))
                  {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $serverName = "localhost";
                    $sqlUsername = "root";
                    $sqlPassword = "";
                    $database = "dbTask";
                    $conn = mysqli_connect($serverName,$sqlUsername,$sqlPassword,$database);
                    if($conn->connect_error)
                    {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    else
                    {
                      $sql = "SELECT password from tbl_user WHERE username = '" . $username ."' AND password = '" . $password . "'";
                      $result = mysqli_query($conn,$sql);
                      if (mysqli_num_rows($result) > 0)
                      {
                        echo "<script>alert('startSess');</script>";
                        startSess();
                      }
                      else
                      {
                          echo "Invalid login request";
                      }
                      mysqli_close($conn);
                    }
                  }
                }
              ?>
              <div class="form-group">
                <div class="col-md-12 center">
                  <p class="basic-label gray-text mouse-default">TASK MANAGEMENT SYSTEM</p>
                </div>
                <input type="text" class="form-control input-lg" id="username" placeholder="Username" title="Username">
              </div>

              <div class="form-group">
                <input type="password" class="form-control input lg" id="password" placeholder="Password" title="Password">
              </div>

              <div class="form-check" class="style: float:left;">
				<input type="checkbox" name="remember_me" id="remember_me"> Remember me
              </div>

              <div class="form-group">
                <input class="btn btn-success btn-block mouse-pointer" type="submit" name="loginSubmitted" id="submit" value="Sign in">
              </div>
            </form>
      </div>
	  <div class="modal-footer">
		<div class="col-md-12">
			<p class="text-center basic-label lowkey-text mouse-default" title="Developed by Alvin, JC, & Jerico">Copyright &copy; 2017 STI College Global City - Interns</p>
        </div>
      </div>
    </div>
    <!-- <p>Gawa ng database na dbTask; table na tbl_user: column lang muna is username and password.</p> -->
	<div id="preloader">
      <img src="img\template\cityscapes.gif" id="preloaderImg"/>
    </div>
  </body>
</html>
