<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DoorTix | Guest Check-In</title>
	<link rel="stylesheet" href="css/screen.css" />
</head>
<body class="admin process">


	<div id="header">
		<div class="container">
			<h1>DoorTix</h1>
			<ul class="account">
				<li class="first">Hey there, <span class="user">Samantha</span></li>
				<li><a href="#">Logout</a></li>
			</ul>

			<ul class="navigation">
				<li class="first selected"><a href="process.php">Guest Check-In</a></li>
				<li><a href="status.php">How Are We Doing?</a></li>
			</ul>
		</div>
	</div>

	<div id="content">
		<div class="container">
		
			<div id="search" class="panel">
				<form class="search" action="process.html" method="post">

					<span class="form">
						<input name="terms" id="terms" type="text" class="text" />
						<input name="submit" value="Search" type="submit" class="button" />
					</span>
					<ul class="info">
						<li><h2>Scan</h2>
						    <span class="explanation">the barcode on an attendee's ticket.</span></li>
						<li><h2>Search</h2>
						<span class="explanation">for an attendee by name, address or email.</span></li>
					</ul>

				</form>
			</div>

			<div id="search-results" class="panel hide next">
				<form class="search" action="process.html" method="post">

					<span class="form">
						<input name="terms" id="terms" type="text" class="text" />
						<input name="submit" value="Search" type="submit" class="button" />
					</span>
					<ul class="info">
						<li><h2>Scan</h2>
						    <span class="explanation">the barcode on an attendee's ticket.</span></li>
						<li><h2>Search</h2>
						<span class="explanation">for an attendee by name, address or email.</span></li>
					</ul>

				</form>
			</div>

		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="status">
				<span class="checked">33</span>
				<span class="of">of</span>
				<span class="total">2045</span>
				<span class="description">attendees checked in</span>
			</div>
			<span class="legal">Brought you by <a href="http://robhoward.id.au">Rob Howard</a>, Earl Grey, and bad country music.</span>
		</div>
	</div>

	<script src="js/jquery-1.4.4.js"></script>
	<script src="js/admin-process.js"></script>
</body>
</html>
