<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SquidTix | Log In</title>
	<link rel="stylesheet" href="css/screen.css" />
</head>
<body class="admin process">

	<div id="top">
		<div class="container">
			<h1>SquidTix</h1>
			<!-- TODO: Login -->
		</div>
	</div>

	<div id="tabbar">
		<div class="container">
			<ul id="navigation">
				<li class="selected"><a href="process.php">Guest Checkin</a></li>
				<li><a href="status.php">How Are We Doing?</a></li>
			</ul>
		</div>
	</div>

	<div id="main">
		<div id="sidebar">
			<div class="container">
				<h3>Help!</h3>
				<p>Don't know what to do?</p>
			</div>
		</div>

		<div id="content">
			<div class="overlap">
				<div class="container">

					<h2>Scan or Search</h2>
					<form action="process.html" method="post">
						<input name="terms" id="terms" type="text" class="text" />
					</form>

				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<h4>Have Some Nav</h4>
			<p>It's good for you.</p>
		</div>
	</div>

</body>
</html>
