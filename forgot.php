<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
	require($_SERVER['DOCUMENT_ROOT']."/hsm/forgot_execute.php");	
?>
<html>
<head>
<title>HSMX sample portal</title>
</head>
<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" <?=($error!=""?'onload="document.forgotForm.username.focus(); alert(\'' . $error . '\')"':'onLoad="document.forgotForm.username.focus();"')?>> 
<table width="100%" height="100%">
	<tr>
		<td valign="middle" align="center">
			<table width="600" align="center" style="border-width:0px; border-style:solid; border-color:#000000;">
				<tr>
					<td align="center"><img src="logo_fd_xtended.gif"></td>
				</tr>
				<tr>
<?php
	if(!$show_result)                     
	{
?>
				  	<td valign="top" align="center">
					  	<form name="forgotForm" method="post" action="forgot.php" onSubmit="this.submitbutton.disabled=true;">
							<input type="hidden" name="forgot" value="true">
							<table cellspacing="10" align="center">
								<tr>
								  <td colspan="2" align="center" height="20">Please enter username and e-mail address.</td>
								</tr>
								<tr>
								  <td colspan="2" align="center" height="10">&nbsp;</td>
								</tr>
								<tr>
								  <td><b>Username:</b></td>
								  <td><input type="text" name="username" value="<?=$user?>"></td>
								</tr>
								<tr>
								  <td><b>E-mail:</b></td>
								  <td><input type="text" name="email" value="<?=$email?>"></td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								  <td>
								  	<input name="submitbutton" type="submit" value="Search" <?=(isset($_SESSION['PORTAL']['preview'])?"disabled":"")?>>
								  	</form>
								  </td>
								</tr>
							</table>
					</td>
<?php
	}
	else
	{
?>
				  	<td valign="top" align="center">
							<table cellspacing="10" align="center">
								<tr>
								  <td colspan="2" align="center" height="30">&nbsp;</td>
								</tr>
								<tr>
								  <td><b>Username:</b></td>
								  <td><?=$result_username?></td>
								</tr>
								<tr>
								  <td><b>Password:</b></td>
								  <td><?=$result_password?></td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								  <td></td>
								</tr>
							</table>
					</td>
<?php
	}
?>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
                   
