<?php
  session_start();
  if(isset($_SESSION['username']) == 1)
		$userid =  $_SESSION['username'];
	else if(isset($_SESSION['userid']) == 0)
        header("Location:index.php");
?>
<html>
<head>
<link rel="stylesheet" href="css\template\body.css"/>
<link rel="stylesheet" href="css\calendar\calendar.css"/>
<link rel="stylesheet" href="css\template\menubar.css"/>
<link rel="stylesheet" href="css\template\sidebar.css"/>
<link rel="stylesheet" href="css\calendar\counter.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="javascript\template\template.js"></script>
<script src="javascript\calendar\controlDate.js"></script>
<script src="javascript\calendar\setMonthYear.js"></script>
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
	<div id="titlebar">
		<img src="img\template\menuIcon.png" id="icon"/>
		<span id="title">DAILY TASK MANAGEMENT</span>
		<a id="myProfileIcon" onClick="manageMyProfileBar()" class="menuButton" style="cursor: pointer;"><img src="img\template\accountIcon.png" id="accountIcon"/></a>
		<a href="" class="menuButton"><img src="img\template\messageIcon.png" id="messageIcon"/></a>
		<a href="" class="menuButton"><img src="img\template\notifIcon.png" id="notifIcon"/></a>
		<a href="" class="menuButton"><img src="img\template\calendarIcon.png" id="calendarIcon"/></a>
		<a href="" class="menuButton"><img src="img\template\homeIcon.png" id="homeIcon"/></a>
	</div>
	<div id="sidebar">
		<a href="http://www.affluentproperties.ph/" target="_blank"><img src="img\template\company.png" id="companyIcon"/></a>
		<hr width="100%"/>
		<a href="" class="sidebarButton"><img src="img\template\officeIcon.png" class="sidebarImg"/><br/>Office</a>
		<a href="" class="sidebarButton"><img src="img\template\teamIcon.png" class="sidebarImg"/><br/>Team</a>
		<hr width="100%"/>
		<a href="" id="sidebarHome" class="sidebarButton"><img src="img\template\homeIcon.png" class="sidebarImg"/><br/>Home</a>
		<a href="" id="sidebarCalendar" class="sidebarButton" ><img src="img\template\calendarIcon.png" class="sidebarImg"/><br/>Calendar</a>
		<a href="" id="sidebarNotif" class="sidebarButton" ><img src="img\template\notifIcon.png" class="sidebarImg"/><br/>Notifications</a>
		<a href="" id="sidebarMessages" class="sidebarButton"><img src="img\template\messageIcon.png" class="sidebarImg"/><br/>Messages</a>
	</div>
	<br/><br/><br/>

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

	<script>
		var calendarDate = new Date("<?php echo date('Y-m-d H:i:s')?>");
		var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
		setMonthYear();
	</script>
<footer>
	<span>©Copyright 2017, Affluent Properties: Daily Task Management by STI College Global City-Interns</span>
</footer>
</body>
</html>
