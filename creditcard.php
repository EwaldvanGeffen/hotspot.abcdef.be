<?php
require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
require($_SERVER['DOCUMENT_ROOT']."/hsm/cc_execute.php");

?>
<!DOCTYPE>
<html style='width:100%;height:100%;'>
<head>
<meta name="viewport"  content="width=device-width; initial-scale=1.0">
</head>
<body onload="<?=($error!=""?"alert('".$error."');":"")?><?=($error_guest!=""?"alert('".$error_guest."');":"")?>"  id="83" style="width:100%;height:100%;text-align:center;">
<?php  if($payment_ok) { ?>
<form action='login.php' method='post' name='loginForm'>
<input type="hidden" name="login" value="true">
<table style='width:100%;font-family:;'><tr><td>
<input type='hidden' value='<?=$user?>' name='username'/>
<input type='hidden' value='<?=$pass?>' name='password'/>
<input style='font-family:Andale Mono;background-repeat: repeat;' type='submit' name='submitbutton' value='Login'/>
</td></tr></table></form>
<?php } ?>
</body>
</html>
