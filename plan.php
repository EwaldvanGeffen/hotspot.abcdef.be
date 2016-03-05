<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
	require($_SERVER['DOCUMENT_ROOT']."/hsm/plan_execute.php");	
?>
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
		<li><a href="login.php#register" class="register">try</a></li>
		<li><a href="login.php#voucher" class="voucher">login</a></li>
		<li><a href="subscribe.php" class="subscribe">sign up</a></li>
		<li><a href="login.php#pms" class="pms">pms</a></li>
		<li><a href="login.php#help" class="help">help</a></li>
	</ul>
<?php
	if(isset($error) && !empty($error))
	{
?>
	<div id="error">
		<?=$error?>
	</div>
<?php
	}
?>

<?php
            if(isset($_SESSION['PORTAL']['billing_change']))
            { // upgrade oa.
?>
			<div id="upgrade">
				<h2>upgrade internet plan</h2>
                        <form method="post">
                        <input type="hidden" name="username" value="<?=$_SESSION['PORTAL']['user']?>">
                        <input type="hidden" name="password" value="<?=$_SESSION['PORTAL']['pass']?>">
                        <input type="hidden" name="login" value="true">
                        Current billing plan
                        
						Name<?=$current_plan->name?>
                       Description<?=$current_plan->description?>
                       Timeleft<?=$time_left?>
					   Volume down left<?=$volume_down_left?>
						Volume up left<?=$volume_up_left?>
						<input type="submit" value="Continue" name="continue"/>
                        </form>
               
<?php
            } else {
?>
			<div id="plan">
				<h2>choose internet plan</h2>
<?php
			}
?>
			<form action="<?=$form_action?>" method="post">
				<input type="hidden" name="username" value="<?=$_SESSION['PORTAL']['user']?>">
				<input type="hidden" name="password" value="<?=$_SESSION['PORTAL']['pass']?>">
				<input type="hidden" name="login" value="true">
        <?php
	        $plan=hsm_fetch_object($plans);
	        echo '<input type="radio" checked="checked" name="plan" value="' . $plan->id . '" id="' . $plan->id . '"><label for="' . $plan->id . '"><span>' . $plan->price . '€</span><strong>' . $plan->name . '</strong><p>' . $plan->description . '</p></label>';
	        while(@$plan=hsm_fetch_object($plans))
	        {                        
		        echo '<input type="radio" name="plan" value="' . $plan->id . '" id="' . $plan->id . '"><label for="' . $plan->id . '"><span>' . $plan->price . '€</span><strong>' . $plan->name . '</strong><p>' . $plan->description . '</p></label>';
	        }
        ?>
				<input type="submit" value="connect" disabled="disabled">
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var dftdiv = 'plan';
	</script>	
	<script type="text/javascript" src="./js/zepto.min.js"></script>
	<script type="text/javascript" src="./js/menu.js"></script>
</body>
</html>