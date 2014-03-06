<?php
    
    // Some condiguration options for sitename
    $sitename   = "Enter your site name here...";
    $siteurl    = "http://yoursiteurl/";

    if( isset( $_POST['wp-submit'] ) )
    {

        // You could process the form here and save the username and password
        // if you want. Otherwise... 

        // RICK ROLL!!!
        header('location: http://www.youtube.com/v=dQw4w9WgXcQ');

    }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xmlns:og="http://ogp.me/ns#"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?php echo $sitename; ?> › Log In</title>
	<link rel="stylesheet" id="open-sans-css" href="rickroll/css" type="text/css" media="all">
<link rel="stylesheet" id="dashicons-css" href="rickroll/dashicons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-admin-css" href="rickroll/wp-admin.min.css" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="rickroll/buttons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="colors-fresh-css" href="rickroll/colors.min.css" type="text/css" media="all">
<script type="text/javascript" src="rickroll/jquery.js"></script><style type="text/css"></style>
<script type="text/javascript" src="rickroll/jquery-migrate.min.js"></script>
<script type="text/javascript" src="rickroll/external-tracking.min.js"></script>
<meta name="robots" content="noindex,follow">
	</head>
	<body class="login login-action-login wp-core-ui" style="">
	<div id="login">
		<h1><a href="http://wordpress.org/" title="Powered by WordPress"><?php echo $sitename; ?></a></h1>
	
<form name="loginform" id="loginform" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<p>
		<label for="user_login">Username<br>
		<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
	</p>
	<p>
		<label for="user_pass">Password<br>
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
	</p>
</form>

<p id="nav">
	<a href="#" title="Password Lost and Found">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="<?php echo $siteurl; ?>" title="Are you lost?">← <?php echo $sitename; ?></a></p>
	
	</div>

	
		<div class="clear"></div>
	
	
</body></html>