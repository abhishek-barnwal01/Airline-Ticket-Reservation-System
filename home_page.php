<?php
	session_start();
?>
<html>
	<head>
		<title>
			WELCOME TO AIRLINE TICKET RESERVATION
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
		<link rel="icon" href="images/download.png">
	</head>
	<body>
		<img class="logo" src="images/download.png" width="80px" height="80px"> 
		<h1 id="title">

		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;AIRLINE TICKET RESERVATION 
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="about_us.html"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.html"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text" style="text-align: center;">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<u>WELCOME TO AIRLINE TICKET RESERVATION!</u></span> </div>
			<img src="images/shutterstock_390581569.jpg" width=100% >
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
</html>
