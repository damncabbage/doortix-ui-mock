<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SquidTix | Log In</title>
	<link rel="stylesheet" href="css/screen.css" />
</head>
<body class="admin process">

	<div id="wrapper">
		<h1>SquidTix</h1>
		<ul id="account">
			<li class="first">Hey there, <span class="user">Samantha</span></li>
			<li><a href="#">Logout</a></li>
		</ul>

		<ul id="navigation">
			<li class="first selected"><a href="process.php">Guest Check-In</a></li>
			<li><a href="status.php">How Are We Doing?</a></li>
		</ul>

		<div id="content" class="has-sidebar">
			<div class="main">
				<h2>Scan or Search</h2>
				<form action="process.html" method="post">
					<input name="terms" id="terms" type="text" class="text" />
				</form>
			</div>
			<div class="sidebar">
				<h3>Help!</h3>
				<p>Don't know what to do?</p>
			</div>
		</div>

		<div id="footer">
			<span class="legal">Brought to you by <a href="http://robhoward.id.au">Rob Howard</a>, broadcasting to you live from the <a href="http://en.wikipedia.org/wiki/2011">Future</a>.</span>
		</div>
	</div>

</body>
</html>
