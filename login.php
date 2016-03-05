<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
	require($_SERVER['DOCUMENT_ROOT']."/hsm/login_execute.php");
	
	include_once('lib/register-options.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>abcdef.be - cheap internet</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/abcdef.css" />
	<link rel="stylesheet" type="text/css" href="./css/font.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<h1 id="header">high-speed wireless internet</h1>
	<p id="website">www <a href="http://abcdef.be">abcdef.be</a></p>
	<ul id="menu">
		<li><a href="#info" class="info">info</a></li>
		<li><p class="loginwith">get online</p></li>
		<li><a href="#facebook" class="register">try</a></li>
		<li><a href="#voucher" class="voucher">login</a></li>
		<!-- <li><a href="subscribe.php" class="subscribe">sign up</a></li> -->
		<li><a href="#pms" class="pms">pms</a></li>
		<li><a href="#help" class="help">help</a></li>
	</ul>
	<p id="intro" class="intro" class="clearfix"><a href="login.php">continue</a></p>
	<div id="info" class="info">
		<h2>info</h2>
		<table>
			<tr> 
				<th>bandwidth<span>*</span></th>
				<th>duration</th>
				<th>price</th>
			</tr>
			<tr>
				<td>4 <span>Mbps</span> / 0.5 <span>Mbps</span></td>
				<td>1 hour <span class="small">(every 3h)</span></td>
				<td>free</td>
			</tr>
			<tr>
				<td>10 <span>Mbps</span> / 1 <span>Mbps</span> <span class="small">(3 devices)</span></td>
				<td>1 day / 1 week / 1 month</td>
				<td>1<span class="small">€</span> / 3<span class="small">€</span> / 10<span class="small">€</span> </td>
			</tr>
			<tr>
				<td>30 <span>Mbps</span> / 1 <span>Mbps</span> <span class="small">(9 devices)</span></td>
				<td>1 month</td>
				<td>20<span class="small">€</span></td>
			</tr>			
		</table>
		<p>a wireless accesspoint or router can be placed behind the external receiver to improve indoor signal reception, you can provide your own solution or <a href="mailto:info@abcdef.be" >contact</a> us for an estimation.</p>
		<p class="small">* fair use policy: excessive usage can result in suspension or termination of the participant account.</p>
	</div>
	<div id="voucher" class="voucher">
		<h2>login</h2>
<?php
if(isset($error))
{
?>
	<p class="error"><?=$error?></p>
<?php
}
?>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" name="login" value="true" />
<?php
if($mail_setting->code_only==1)
{
?>
				<label for="username">username</label>
				<input type="text" name="username" value="<?=$_POST['username']?>" />
				<input type="hidden" name="password" />
<?php
}
else
{
?>
				<label for="username">username</label>
				<input type="text" name="username" value="<?=$_POST['username']?>" />
				<label for="password">password</label>
				<input type="password" name="password" value="<?=$_POST['password']?>" />
<?php  
	if($mail_setting->chk_email_voucher || $mail_setting->chk_forgot_voucher) {
?>
				<label for="email">email</label>
				<input type="text" name="email" />
<?php
	}
	if($change_pass_portal)
	{
?>
				<label for="change_pass">update profile</label>
				<input type="checkbox" name="change_pass" />
<?php 
	}
}
if($cookie && false)
{
?>
				<label for="autologin"><?=$cookie_label?></label>
				<input type="checkbox" name="autologin" checked="checked"/>
<?php
}
?>
				<input type="submit" value="login" />
			</p>
		</form>
	</div>
	<div id="pms" class="pms">
		<h2>pms</h2>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" value="true" />
<?php
if($pmsfields->room)
{
	$room_readonly = ($pmsfields->room_readonly) ? 'readonly="readonly"' : '';
?>
				<label for="pms_room">Room</label>
				<input type="text" name="pms_room" <?=$room_readonly?> value="<?=$pmsfields->room_value?>" />
<?php
} 
if($pmsfields->firstname)
{
?>	
				<label for="pms_firstname">First name</label>
				<input type="text" name="pms_firstname" value="<?=$pmsfields->firstname_value?>" />
<?php
}
if($pmsfields->lastname)
{
?>
				<label for="pms_lastname">Last name</label>
				<input type="text" name="pms_lastname" value="<?=$pmsfields->lastname_value?>" />
<?php
}
if($pmsfields->vip)
{
?>
				<label for="pms_vip">VIP code</label>
				<input type="text" name="pms_vip" value="<?=$pmsfields->vip_value?>" />
<?php
}
if($pmsfields->arrival)
{
?>
				<label for="pms_arrival">Arrival date</label>
				<input type="text" name="pms_arrival" value="<?=$pmsfields->arrival_value?>" />
<?php
}
if($pmsfields->departure)
{
?>
				<label for="pms_departure">Departure date</label>
				<input type="text" name="pms_departure" value="<?=$pmsfields->departure_value?>" />
<?php
}

if($pmsfields->reservation)
{
?>
				<label for="pms_reservation">Reservation id</label>
				<input type="text" name="pms_reservation" value="<?=$pmsfields->reservation_value?>" />
<?php
}
if($pmsfields->def1)
{
?> 
				<label for="pms_def1"><?=$fias_settings->field_definable1?></label>
				<input type="text" name="pms_def1" value="<?=$pmsfields->def1_value?>" />
<?php
}
if($pmsfields->def2)
{
?> 
				<label for="pms_def2"><?=$fias_settings->field_definable2?></label>
				<input type="text" name="pms_def2" value="<?=$pmsfields->def2_value?>" />
<?php
}
if($pmsfields->def3)
{
?>
				<label for="pms_def3"><?=$fias_settings->field_definable3?></label>
				<input type="text" name="pms_def3" value="<?=$pmsfields->def3_value?>" />
<?php
}
if($pmsfields->def4)
{
?> 
				<label for="pms_def4"><?=$fias_settings->field_definable4?></label>
				<input type="text" name="pms_def4" value="<?=$pmsfields->def4_value?>" />
<?php
}
if($pmsfields->def5)
{
?> 
				<label for="pms_def5"><?=$fias_settings->field_definable5?></label>
				<input type="text" name="pms_def5" value="<?=$pmsfields->def5_value?>" />
<?php
}
if($pmsfields->def6)
{
?>
				<label for="pms_def6"><?=$fias_settings->field_definable6?></label>
				<input type="text" name="pms_def6" value="<?=$pmsfields->def6_value?>" />
<?php
}
if($pmsfields->def7)
{
?> 
				<label for="pms_def7"><?=$fias_settings->field_definable7?></label>
				<input type="text" name="pms_def7" value="<?=$pmsfields->def7_value?>" />
<?php	
}
if($pmsfields->def8) 
{
?>
				<label for="pms_def8"><?=$fias_settings->field_definable8?></label>
				<input type="text" name="pms_def8" value="<?=$pmsfields->def8_value?>" />
<?php
}
if($pmsfields->def9) 
{
?>
				<label for="pms_def9"><?=$fias_settings->field_definable9?></label>
				<input type="text" name="pms_def9" value="<?=$pmsfields->def9_value?>" />
<?php
}
if($pmsfields->def10) 
{
?>
				<label for="pms_def10"><?=$fias_settings->field_definable10?></label>
				<input type="text" name="pms_def10" value="<?=$pmsfields->def10_value?>" />
<?php
}
if($cookie)
{
?>
				<label for="autologin"><?=$cookie_label?></label>
				<input type="checkbox" name="autologin" />
<?php
}
?>
				<input type="submit" value="login" />
			</p>
		</form>
	</div>
	<div id="google" class="register google">
		<h2>try for free</h2>
		<span>with</span>
		<?php
			print registerOptions('google');
		?>
		<p>Get an hour of unlimited free internet access (reset every three hours). Enjoy!</p>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" name="register" />
				<input type="hidden" name="id" value="4" />
				<input type="submit" class="register" value="try with google" />
			</p>
		</form>
	</div>
	<div id="linkedin" class="register linkedin">
		<h2>try for free</h2>
		<span>with</span>
		<?php
			print registerOptions('linkedin');
		?>
		<p>Get an hour of unlimited free internet access (reset every three hours). Enjoy!</p>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" name="register" />
				<input type="hidden" name="id" value="5" />
				<input type="submit" class="register" value="try with linkedin" />
			</p>
		</form>
	</div>	
	<div id="facebook" class="register facebook">
		<h2>try for free</h2>
		<span>with</span>
		<?php
			print registerOptions('facebook');
		?>
		<p>Get an hour of unlimited free internet access (reset every three hours). Enjoy!</p>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" name="register" />
				<input type="hidden" name="id" value="2" />
				<input type="submit" class="register" value="try with facebook" />
			</p>
		</form>
	</div>
	<div id="twitter" class="register twitter">
		<h2>try for free</h2>
		<span>with</span>
		<?php
			print registerOptions('twitter');
		?>
		<p>Get an hour of unlimited free internet access (reset every three hours). Enjoy!</p>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" name="register" />
				<input type="hidden" name="id" value="3" />
				<input type="submit" class="register" value="try with twitter" />
			</p>
		</form>
	</div>
	<div id="email" class="register email" style="display:none;">
		<h2>try for free</h2>
		<span>with</span>
		<?php
			print registerOptions('email');
		?>
		<p>Get an hour of unlimited free internet access (reset every three hours). Enjoy!</p>
		<form method="post" action="login.php">
			<p>
				<input type="hidden" name="register" />
				<input type="hidden" name="id" value="1" />
<?php
		foreach($register_forms[1]->fields as $field=>$config)
		{
			if($config->show==1)
			{
?>
				<label for="<?=$field?>"><?=$arr_portal_lang[strtolower($field)]?></label>
				<input id="<?=$field?>" name="<?=$field?>" <?=$config->html5==1 && $config->validate==2?"pattern='".$config->regex."'":""?><?=$config->html5==1 && $config->validate>0?"required":""?> type="<?=$config->input_type?>" value="<?=$_POST[$field]?>" />
<?php
			}
		}
?>
				<input type="submit" value="try!" />
			</p>
		</form>
	</div>
	<div id="help" class="help">
		<h2>help</h2>
		<p>0494713986</p>
	</div>
	<script type="text/javascript">
<?php
if($_POST['login'])
{
?>
	var dftdiv = 'voucher';
<?php
} else {
?>
	var dftdiv = 'info';
<?php
}
?>
	</script>	
	<script type="text/javascript" src="./js/zepto.min.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>
</body>
</html>