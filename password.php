<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
	require($_SERVER['DOCUMENT_ROOT']."/hsm/password_execute.php");	
?>
<html>
<head>
<title>HSMX sample portal</title>
</head>
<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" <?=($error!=""?'onload="document.passwordForm.username.focus(); alert(\'' . $error . '\')"':'onLoad="document.passwordForm.username.focus();"')?>> 
<table width="100%" height="100%">
	<tr>
		<td valign="middle" align="center">
			<table width="600" align="center" style="border-width:0px; border-style:solid; border-color:#000000;">
				<tr>
					<td align="center"><img src="logo_fd_xtended.gif"></td>
				</tr>
				<tr>
				  	<td valign="top" align="center">
					 <table width="600" align="center">
					 <form name="passwordForm" method="post" action="password.php" onSubmit="this.submitbutton.disabled=true;">
					 <input type="hidden" name="submit" value="true">
						<tr><td colspan="2" height="20" align="center"><font color="#CC0000"><?=$error?></font></td></tr>
						<tr><td colspan="2">&nbsp;</td></tr>
						<tr>
							<td><b>Username:</b></td>
							<td><input type="text" name="username" value="<?=$_SESSION['PORTAL']['user']?>" readonly></td>
						</tr>
						<tr>
							<td><b>New password:</b></td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td><b>Re-enter new password:</b></td>
							<td><input type="password" name="re_password"></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
						<tr>
							<td colspan="2" align="center"><input name="submitbutton" type="submit" <?=(isset($_SESSION['PORTAL']['preview'])?"disabled":"")?> value="Change"></td>
						</tr>
					 </form>
					 </table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
