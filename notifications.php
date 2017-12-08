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
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  </div>
<footer>
	<span>©Copyright 2017, Affluent Properties: Daily Task Management by STI College Global City-Interns</span>
</footer>
<div id="preloader">
  <img src="img\template\cityscapes.gif" id="preloaderImg"/>
</div>
</body>
</html>
