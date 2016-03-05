<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
	require($_SERVER['DOCUMENT_ROOT']."/hsm/subscribe_execute.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>abcdef.be - cheap internet</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/abcdef.css" />
	<link href="./css/font.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<h1 id="header">high-speed wireless internet</h1>
	<p id="website">www.<a href="http://abcdef.be">abcdef.be</a></p>
	<ul id="menu">
		<li><a href="login.php#info" class="info">info</a></li>
		<li><p class="loginwith">get online</p></li>
		<li><a href="login.php#email" class="register">try</a></li>
		<li><a href="login.php#voucher" class="voucher">login</a></li>
		<li><a href="subscribe.php" class="subscribe">sign up</a></li>
		<li><a href="login.php#pms" class="pms">pms</a></li>
		<li><a href="login.php#help" class="help">help</a></li>
	</ul>
	
	<div id="legacy">
<?php
	if($_SESSION['PORTAL']['pay_type']=='fias' && !isset($_SESSION['PORTAL']['user']))
	{
?>
	<p class="error">Please enter all fields to create a user account.</p>
<?php
	}
	elseif($_SESSION['PORTAL']['pay_type']=='fias')
	{
?>
	<p class="error">Please enter all fields to create a new session.</p>
<?php
	}
?>
	<p class="error"><?=$error?></p>

<?php
	if(!isset($_SESSION['PORTAL']['user']))
	{
		if((($mail_setting->chk_email_pms || $mail_setting->chk_forgot_pms) && ($_SESSION['PORTAL']['pay_type']=="pms" || $_SESSION['PORTAL']['pay_type']=="fias" || $_SESSION['PORTAL']['pay_type']=="horizon")) || (($mail_setting->chk_email_cc || $mail_setting->chk_forgot_cc) &&  $_SESSION['PORTAL']['pay_type']=="cc"))
		{
?>
			<label for="email">e-mail</label>
			<input type="text" name="email" value="<?=$email?>">
<?php
		}
	}
?>
	</div>

	<div id="reloadcard" class="reloadcard subscribe">
		<h2>sign up</h2>
		<span>with</span>
<?php
		include_once('./lib/signup-options.php');
		print signupOptions('reloadcard');
?>
		<p>Please register a username and password to access the system.</p>
		<form method="post" action="subscribe.php?type=reload_card">
			<input type="hidden" name="formsubmitted" value="true" />
<?php
	if(!isset($_SESSION['PORTAL']['user']))
	{ // expired user has variable so we dont give shits.
?>
			<label for="user">username</label>
			<input type="text" name="user" value="<?=$user?>">
			<label for="password">password</label>
			<input type="password" name="pass1" value="<?=$_POST['pass1']?>">
			<label for="pass2">re-enter password</label>
			<input type="password" name="pass2" value="<?=$_POST['pass2']?>">
<?php
}
?>
			<label for="voucher_code">voucher code</label>
			<input type="text" name="voucher_code" value="<?=$voucher_code?>" />
<?php
	if($cookie)
	{ // als optie voor cookie aanwezig is, slimmer maken met check vanuit user cookie settings?
?>
			<label for="autologin"><?=$cookie_label?></label>
			<input type="checkbox" name="autologin" />
<?php
	}
?>
			<input type="submit" value="connect" />
		</form>
	</div>
	<div id="paypal" class="paypal subscribe">
		<h2>sign up</h2>
		<span>with</span>
<?php
		include_once('./lib/signup-options.php');
		print signupOptions('paypal');
?>
		
		<p>Please register a username and password to access the system.</p>
		<form method="post" action="subscribe.php?type=paypal">
			<input type="hidden" name="formsubmitted" value="true" />
<?php
	if(!isset($_SESSION['PORTAL']['user']))
	{ // expired user has variable so we dont give shits.
?>
			<label for="user">username</label>
			<input type="text" name="user" value="<?=$user?>">
			<label for="password">password</label>
			<input type="password" name="pass1" value="<?=$_POST['pass1']?>">
			<label for="pass2">re-enter password</label>
			<input type="password" name="pass2" value="<?=$_POST['pass2']?>">
<?php
}
	if($cookie)
	{ // als optie voor cookie aanwezig is, slimmer maken met check vanuit user cookie settings?
?>
			<label for="autologin"><?=$cookie_label?></label>
			<input type="checkbox" name="autologin" />
<?php
	}
?>
			<input type="submit" value="connect" />
		</form>
	</div>
	<script type="text/javascript">
		var dftdiv = 'reloadcard';
	</script>
	<script type="text/javascript" src="./js/zepto.min.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>
</body>
</html>