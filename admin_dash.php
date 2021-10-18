<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>ProjectChurch</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Carattere&family=Cinzel:wght@400;500&family=Italianno&family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<section class="header">
		<nav>
			<a href="#"><img src="Images/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li>
						<li><a href="#">HOME</a></li>
						<li class="dropdown"><a href="javascript:void(0)">DEPARTMENT</i></span></a>
							  	<div class="dropdown-content">
      							<a href="#">Women Ministry</a>
      							<a href="#">Youth Ministry</a>
      							<a href="#">Education Ministry</a>
    							</div></li>
						<li><a href="#">GALLERY</a></li>
						<li class="dropdown"><a href="javascript:void(0)">ADMINISTRATION</a>
						<div class="dropdown-content">
      							<a href="#">Executive Committee</a>
      							<a href="#">Projects & Development</a>
      							<a href="#">Finance and Properties</a>
    							</div></li></li>
						<li><a href="#events">EVENTS</a></li>
						<li><a href="signin.html">SIGN-IN</a></li>
					</li>
				</ul>
			</div>
				<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<div class="text-box">
			<h1>A·chik Baptist Singgimari Church</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			<br>
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="https://in.msi.com/" class="hero-btn">Visit us to know more</a>
		</div>
	</section>
	<!--JAVASCRIPT FOR TOGGLEMENU-->

	<script>
		var navLinks= document.getElementById("navLinks");
		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}
	</script>
<!------------Sidebar dash------------------>

<div class="container">
	<div class="row">
		<aside class="sidebar col-lg-3 col-md-4 col-xs-12 mb-5">
			<div class="dynamicDiv" id="dd.0.4.0">
				<div class="sidebar-wrapper">
					<nav>
						<ul class="nolist hidden-sm hidden-xs">
							<li><a href="#">Dashboard</a></li>
							<li><a href="#">View Members</a></li>
							<li><a href="#">Add Quiz</a></li>
							<li><a href="#">Add events</a></li>
							<li><a href="#">Support</a></li>
						</ul>
					</nav>
				</div><!-- .sidebar-wrapepr -->
			</div>
		</aside>
		<div class="content col-lg-9 col-md-8 col-xs-12">
			<div class="dynamicDiv" id="dd.0.4.1"></div>
			<article>
				<div class="row">
					<div class="col-sm-12">
						<h2>Adding Mobile Responsiveness to your Sidebar Navigation</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<!---------------Event Manager-->
<?php require_once 'process.php'; ?>
    <div class="event">
        <form action="process.php" method="POST">
            <div class="row">
			<div class="col-25">
            <label>EventName</label>
			</div>
            <div class="col-75">
				<input type="text" name="eventname" value="">
			</div></div>
			<div class="row">
				<div class="col-25">
            <label>Date
				
			</label>
			<div class="dat">
            <input type="date" id="date" name="date"></span>
			</div>
</div>
</div>
			<div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Event-Details" style="height:200px"></textarea>
      </div>
    </div>
	<div class="ev-btn">
            <button type="submit" name="save">Post</button>
            </div>
        </form>
    </div>
	<!-----FOOTER------------->

	<div class="footer-dark">
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3 item">
					<h3>Pages</h3>
					<ul>
						<li><a href="#" i class="fa fa-chevron-right">Home</a></i></li>
						<li><a href="#" i class="fa fa-chevron-right">Events</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Gallery</a></li>
						<li><a href="#" i class="fa fa-chevron-right">News</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Contact Us</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Feedback</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-3 item">
					<h3>Departments</h3>
					<ul>
						<li><a href="#" i class="fa fa-chevron-right">Women Ministry</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Youth Ministry</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Education Ministry</a></li>
					</ul>
				</div>
				<div class="col-md-6 item text">
					<h3>Admimistration</h3>
					<ul>
						<li><a href="#" i class="fa fa-chevron-right">Executive Committee</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Project and Development</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Finance and Properties</a></li>
						<li><a href="#" i class="fa fa-chevron-right">Statistics</a></li>
					</ul>
				</div>
				<div>
					  <h3>Register as <i class="fa fa-user-o" aria-hidden="true"></i></h3>
					  <ul>
						  <li><a href="admin_dash.php" i class="fa fa-lock"> Admin</a></li>
						  <li><a href="#" i class="fa fa-briefcase">Member</a></li>
						  <li><a href="signin.html" i class="fa fa-users">User</a></li>
					  </ul>
				 </div>
				<div class="social-btn">
					<a href="#"><i class="fa fa-facebook-official"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-whatsapp"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
				<div>
				<div class="row"></div><p class="copyright">Singgimari Baptist Church <i class="fa fa-copyright"> 2021</i></p>

				</div>
		</div>
	</footer>
</body>
</html>







