<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SquidTix | Log In</title>
	<style>
		html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-weight:inherit;font-style:inherit;font-size:100%;font-family:inherit;vertical-align:baseline;}:focus{outline:0;}body{line-height:1;color:#000;background:#fff;}ol,ul{list-style:none;}table{border-collapse:separate;border-spacing:0;}caption,th,td{text-align:left;font-weight:normal;}blockquote:before,blockquote:after,q:before,q:after{content:"";}blockquote,q{quotes:"" "";}a{text-decoration:none;}

		div {
			background-color: rgba(128,128,255,0.3);
		}
		.container {
			width: 900px;
			margin: 0 auto;
			background-color: rgba(255,128,128,0.3);
		}
		#top,#footer,#top .container, #footer .container {
			height: 50px;
		}
		#top, #footer {
			clear:both;
			border-top: 1px solid #aaf;
			border-bottom: 1px solid #aaf;
		}
		#fake-sidebar {
			float: right;
			width: 50%;
		}
		#fake-content {
			float: left;
			width: 50%;
		}

		#content {
			position: relative;
			width: 900px;
			left: -70%;
			background: rgba(128,255,128,0.3);
		}

		#sidebar .container {
			width: 200px;
		}


	</style>
</head>
<body class="admin process">

	<div id="top">
		<div class="container">
			<h1>SquidTix</h1>
			<!-- TODO: Login -->
		</div>
	</div>

	<div id="main">
		<div id="content">
			<div class="overlap">
				<h2>Scan or Search</h2>
				<form action="process.html" method="post">
					<input name="terms" id="terms" type="text" class="text" />
				</form>
			</div>
		</div>

		<div id="sidebar">
			<div class="container">
				<h3>Help!</h3>
				<p>Don't know what to do?</p>
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
