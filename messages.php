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
        <title>Messages</title>
        <meta lang="en">
        <link rel="icon" href="img\template\company.ico">
        <link rel="stylesheet" href="css\template\body.css"/>
        <link rel="stylesheet" href="css\template\menubar.css"/>
        <link rel="stylesheet" href="css\template\sidebar.css"/>
        <link rel="stylesheet" href="css\chat\chat.css"/>
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
        <div class="all_contacts">
            <div class="contacts_list">
                <a href="">
                    <div class="contact" title="View Messages">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">ALVIN NAEG</h3></li>
                            <li><div class="notification_alert">9+</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">JERICO ROQUE</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">JEFFREY LANUZA</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">KRISZH RAMOS</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">RHOSE BUENO</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">JC FRANCISCO</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">NIKKI DAYAO</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">PRINCE TEJADA</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">ARVIN ABIOG</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">NELSON ROSALES</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <div class="contact">
                        <ul>
                            <li><div class="user_image"></div></li>
                            <li><h3 class="contact_name">RANNIEL BUENAVISTA</h3></li>
                            <li><div class="notification_alert">1</div></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <div class="chat_area">
            <div class="current_chat_title">
                <h3 class="current_contact_name">ALVIN NAEG</h3>
            </div>
            <div class="current_chat_messages_view">
                <div class="guest_message">
                    <h3>Alvin Naeg</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:32PM</p>
                </div>
                <div class="home_message">
                    <h3>JC Francisco</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:33PM</p>
                </div>
                <div class="guest_message">
                    <h3>Alvin Naeg</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:32PM</p>
                </div>
                <div class="guest_message">
                    <h3>Alvin Naeg</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:32PM</p>
                </div>
                <div class="guest_message">
                    <h3>Alvin Naeg</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:32PM</p>
                </div>
                <div class="guest_message">
                    <h3>Alvin Naeg</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:32PM</p>
                </div>
                <div class="home_message">
                    <h3>JC Francisco</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:33PM</p>
                </div>
                <div class="home_message">
                    <h3>JC Francisco</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:33PM</p>
                </div>
                <div class="home_message">
                    <h3>JC Francisco</h3>
                    <p class="message_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="message_date">DECEMBER 12, 2017 12:33PM</p>
                </div>
                <div class="creating_message_box">
                    <form>
                        <input type="text" class="message_box_area" placeholder="Write Something Here.." title="Write your message">
                            <div class="send_file_button">
                                <label for="upload_button">
                                    <strong>UPLOAD FILE</strong>
                                </label>
                                <input type="file" id="upload_button" class="upload_file_button" value="upload.." title="Upload a file">
                            </div>
                        <input type="submit" class="send_button" name="send_message" value="SEND" title="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
