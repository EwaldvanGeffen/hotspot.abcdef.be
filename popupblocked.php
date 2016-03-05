<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Popup blocker detected</title>
</head>
<body onLoad="document.subscribeForm.user.focus()" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0"> 
<table width="100%" height="100%">
  <tr>
    <td valign="middle" align="center">
      <table width="600" align="center">
        <tr>
          <td valign="middle">
            <table align="center">
              <tr>
                <td align="center"><img src="logo_fd_xtended.gif"></td>
              </tr>
            </table>
		   </td>
		  </tr>
		  <tr>
		   <td>
                    <table align="center" height="90%" >
                            <tr>
                                    <td align="center"><b>Popup blocker detected</b></td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                    <td align="center"> 
                                            We detected that a popup blocker blocked the logout console.<br><br>
                                            <input type="button" onClick="document.location='<?=$_GET['OS']?>'; window.open('../logoutconsole/logout_console_frame.php?subscriber=<?=$_GET['subscriber']?>&id=<?=$_GET['id']?>&nse_id=<?=$_GET['nse_id']?>&nse=<?=$_GET['nse']?>&mac=<?=$_GET['mac']?>','helpwin','width=<?=$_GET['width']?>,height=<?=$_GET['height']?>,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0');" value="Open logout console">
                                            <br><br>
                                    </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                    </table>
			</td>
			</tr>
			</table>
		</td>
	</tr>
</table>			
</body>
</html>