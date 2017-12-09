<?php
  /*
  session_start();
  if(isset($_SESSION['username']) == 1)
		$userid =  $_SESSION['username'];
	else if(isset($_SESSION['userid']) == 0)
        header("Location:index.php");
        */
?>
<html>
<head>
<title>Daily Task Management</title>
<link rel="icon" href="img\template\company.ico">
<link rel="stylesheet" href="css\template\body.css"/>
<link rel="stylesheet" href="css\template\menubar.css"/>
<link rel="stylesheet" href="css\template\sidebar.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script src="javascript\template\template.js"></script>
<script type="text/javascript">
  function logout()
  {
  	document.location = 'logout.php';
  }
</script>

<!-Added resources*/-->
<link rel="stylesheet" href="css\calendar\calendar.css"/>
<link rel="stylesheet" href="css\calendar\counter.css"/>
<script src="javascript\calendar\controlDate.js"></script>
<script src="javascript\calendar\setMonthYear.js"></script>
</head>
<body onScroll="">
	<div id="myProfileBar">
		<a class="sidebarButton">My Profile</a>
		<hr width="100%"/>
		<a class="sidebarButton" onclick="logout()">Logout</a>
	</div>
	<div id="sidebar">
    <a href="home.php" id="sidebarHome" class="sidebarButton"><img src="img\template\homeIcon.png" class="sidebarImg"/><br/>Home</a>
    <a href="calendar.php" id="sidebarCalendar" class="sidebarButton" ><img src="img\template\calendarIcon.png" class="sidebarImg"/><br/>Calendar</a>
    <a href="notifications.php" id="sidebarNotif" class="sidebarButton" ><img src="img\template\notifIcon.png" class="sidebarImg"/><br/>Notifications</a>
    <a href="messages.php" id="sidebarMessages" class="sidebarButton"><img src="img\template\messageIcon.png" class="sidebarImg"/><br/>Messages</a>
		<a href="groups.php?group=office" class="sidebarButton"><img src="img\template\officeIcon.png" class="sidebarImg"/><br/>Office</a>
		<a href="groups.php?group=team" class="sidebarButton"><img src="img\template\teamIcon.png" class="sidebarImg"/><br/>Team</a>
		</div>
  	<div id="titlebar">
  		<img src="img\template\menuIcon.png" id="icon"/>
    	<a href="http://www.affluentproperties.ph/" target="_blank"><img src="img\template\company.png" id="companyIcon"/></a>
  		<span id="title">Daily Task Management</span>
  		<a id="myProfileIcon" onClick="manageMyProfileBar()" class="menuButton" style="cursor: pointer;"><img src="img\template\accountIcon.png" id="accountIcon"/></a>
  		<a href="messages.php" class="menuButton"><img src="img\template\messageIcon.png" id="messageIcon"/></a>
  		<a href="notifications.php" class="menuButton"><img src="img\template\notifIcon.png" id="notifIcon"/></a>
  		<a href="calendar.php" class="menuButton"><img src="img\template\calendarIcon.png" id="calendarIcon"/></a>
  		<a href="home.php" class="menuButton"><img src="img\template\homeIcon.png" id="homeIcon"/></a>
  	</div>
	<div id="content">
    <!--------------------------- Calendar --------------------------->
    <div class="calendarBody">
      <div class="calendarHeader">
        <span  onClick="controlDate('prev')" class="prev">&#10094;</span>
        <span  onClick="controlDate('next')"class="next">&#10095;</span>
        <h2 id="month">Month</h2>
        <h4 id="year">Year</h4>
      </div>
      <table class="calendarTable">
      <tr id="">
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
        <?php
          $dayOfTheWeek = 1;
          for($day = 1; $day <= 35; $day++)
          {
            if($dayOfTheWeek==1)
              echo "<tr>";

            echo "<td id='d".$day."' class='dates'>d".$day.
                 "<ul id='notif'>" .
                  "<li id='notifMeeting'>1</li>" .
                  "<li id='notifGroup'>1</li>" .
                  "<li id='notifPersonal'>1</li>" .
                "</ul>".
              "</td>";
            if($dayOfTheWeek==7)
            {
              echo "</tr>";
              $dayOfTheWeek = 0;
            }
            $dayOfTheWeek++;
          }
        ?>
      </table>
    </div>
    <div id="counterDivCenter">
      <div id="counterDiv">
        <p id="counterHeader">Status:</p>
        <ul class="legends">
          <li><pre id="statusOffice" style="background-color: #f21a1a; margin-left: -14px;">0</pre>Office</li>
          <li><pre id="statusGroup" style="background-color: #f1df19; color: black; margin-left: -14px;">0</pre>Group</li>
          <li><pre id="statusPersonal" style="background-color: #1844f0; ">0</pre>Personal</li>
        </ul>
      </div>
    </div>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
    <script>
      var calendarDate = new Date("<?php echo date('Y-m-d H:i:s')?>");
      var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      setMonthYear();
    </script>
    <!-- End of Calendar -->
  </div>
<footer>
	<span>©Copyright 2017, Affluent Properties: Daily Task Management by STI College Global City-Interns</span>
</footer>
<div id="preloader">
  <img src="img\template\cityscapes.gif" id="preloaderImg"/>
</div>
</body>
</html>
