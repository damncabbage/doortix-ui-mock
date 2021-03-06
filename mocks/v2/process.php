<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SquidTix | Log In</title>
	<link rel="stylesheet" href="css/screen.css" />
</head>
<body class="admin process">


	<div id="header">
		<div class="container">
			<h1>SquidTix</h1>
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
				<form action="process.html" method="post">

					<span class="form">
						<input name="terms" id="terms" type="text" class="text" />
						<input name="submit" value="Search" type="submit" class="button" />
					</span>
					<div class="info">
						<span class="action">Scan</span>
						<span class="explanation">the barcode on an attendee's ticket</span>
					</div>
					<div class="info">
						<span class="action">Search</span>
						<span class="explanation">for an attendee by name, address or email.</span>
					</div>

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
			<span class="legal">Brought you by <a href="http://robhoward.id.au">Rob Howard</a>, notepad scribblings and half a pack of Oreos.</span>
		</div>
	</div>

</body>
</html>
