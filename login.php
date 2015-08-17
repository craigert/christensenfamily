<!DOCTYPE html>
<html lang="en" version="-//W3C//DTD XHTML 1.1//EN" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <title>Login | Alta and Alten Christensen Family</title>
    <meta name="description" content="Tribute to Alten and Alta Christensen" />
    <meta name="keywords" conetent="Christensens, Alta, Alten" />
    <!--[if IE]>
	   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<![endif]-->
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="language" content="eng" />
    <meta name="twoCharacterCode" content="en" />
    <meta name="ccLoadPolicy" content="0" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/styles.css" />
    <!--[if lt IE 9]>
        <style>.our_people #ldsgh-button a { background: none !important; }</style>
        <link rel="stylesheet" href="/bc/assets/build/v07142014/css/core/eng.css"/>
        <script src="//edge.mormoncdn.org/bc/assets/js/lib/respond.js"> </script>
    <![endif]-->
    <script type="text/javascript">
        var _sf_startpt = (new Date()).getTime();
    </script>
    <!--[if lt IE 9]>
	   <script src="//html5shiv.googlecode.com/svn/trunk/html5.js">;</script>
	   <script>MO_IS_OLD_IE = true;</script>
	<![endif]-->
	
	<!-- Font Awesome -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="family_login">
	<div id="loginBox">
		<img class="logo" src="images/logo.png">
		<div class="loginForm">
			<h3>Login</h3>
			<form id="login-form" class="form-horizontal" method="post" novalidate="novalidate">
				<div class="form-group">
					<div class="col-xs-4">
						<input autocomplete="off" class="form-control" id="Password" name="Password" placeholder="Password" type="password">
						<i class="icon fa fa-lock"></i>
					</div>
				</div>

				<div class="form-group">
					<div class="col-xs-4 form-actions">
						<div class="errorMsg">Incorrect Password</div>
						<button class="btn btn-primary" type="submit" id="login-button">Log In</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
    <script src="scripts/public-core.min.js" xml:space="preserve"></script>
    <script src="scripts/people.min.js" xml:space="preserve"></script>
	<script src="scripts/jquery.cookie.js"></script>
	<script src="scripts/validate.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){

		$(window).resize(function(){

			$('#loginBox').css({
				position:	'absolute',
				left: ($(window).width() - $('#loginBox').outerWidth())/2,
				top: (($(window).height() - $('#loginBox').outerHeight())/2) - 100
			});

		});
		// To initially run the function:
		$(window).resize();

	});
	</script>
	
</body>

</html>