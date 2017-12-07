<?php
function startSess()
{
  session_start();
  $_SESSION['username'] = $_POST["username"];
  header("Location:Calendar.php");
  exit();
}
?>
<?php
  session_start();
  if(isset($_SESSION['username']) == 1)
      header("Location:Calendar.php");
  else if(isset($_SESSION['username']) == 0){
  }
?>
<html>
<head>
  <style>
    *
    {
      margin: 0px;
      padding: 0px;
    }
  </style>
  <script>
    function showLoginDiv()
    {
      document.getElementById("loginDiv").style.display = "block";
    }
  </script>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" id="form" method="post" name="form">
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
      Username: <input type="text" id="username" name="username" placeholder="username"/><br/><br/>
      Password: <input type="password" id="password" name="password" placeholder="password"/><br/><br/>
      <input type="submit" name="loginSubmitted" id="submit" value="LOGIN"/>
    </form>
    <p>Gawa ng database na dbTask; table na tbl_user: column lang muna is username and password.</p>
</body>
</html>
