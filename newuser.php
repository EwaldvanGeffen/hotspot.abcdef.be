<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
        include($_SERVER['DOCUMENT_ROOT']."/hsm/newuser_execute.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>abcdef.be - cheap internet</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/abcdef.css" />
	<link href="./css/font.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />	
	<style>
	.newuser p,
.newuser ul
{
	margin-top:1em;
}

.newuser ul
{
	margin-left:1em;
	margin-top:1em;
}

.newuser li
{
	margin-bottom:0.5em;
}
	</style>
</head>
<body>
	<h1 id="header">high-speed wireless internet</h1>
	<p id="website">www.<a href="http://abcdef.be">abcdef.be</a></p>
	<ul id="menu">
		<li><a href="login.php#info" class="info">info</a></li>
		<li><p class="loginwith">get online</p></li>
		<li><a href="login.php#register" class="register">try</a></li>
		<li><a href="login.php#voucher" class="voucher">login</a></li>
		<li><a href="#newuser" class="newuser">sign up</a></li>
		<li><a href="login.php#pms" class="pms">pms</a></li>
		<li><a href="login.php#help" class="help">help</a></li>
	</ul>
	<div id="newuser" class="newuser">
		<h2>sign up</h2>
		<p>with</p>
		<ul>
<?php
	if($paypal)
	{
?>
			<li><a href="<?=$linkpaypal?>#paypal">paypal</a></li>
<?php
	}
	if($pms)
	{
?>
			<li><a href="<?=$linkpms?>">Bill my room</a></li>
<?php
	}
	if($fias && $mail_setting->in_house_guest==0)
	{
		if(isset($fias_error))
		{
?>
			<li><a onclick="alert('<?=$fias_error?>')">Bill my room</a></li>
<?php
		}
		else
		{
?>
			<li><a href="<?=$linkfias?>">Bill my room</a></li>
<?php
		}
	}
	if($horizon)
	{
?>
			<li><a href="<?=$linkhorizon?>">Bill my room</a></li>
<?php
	}
	if($ccs)
	{
?>
			<li><a href="<?=$linkcc?>">Pay by Credit card</a></li>
<?php
	}
	if($spg)
	{
?>
			<li><a href="<?=$linkspg?>">Loyalty Membership Number</a></li>
<?php
	}
	if($reload_card)
	{
?>
			<li><a href="<?=$linkreload_card?>#reloadcard" class="or">voucher</a></li>
<?php
	}
?>
		</ul>
	</div>
	<script type="text/javascript" src="./js/zepto.min.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>
</body>
</html>