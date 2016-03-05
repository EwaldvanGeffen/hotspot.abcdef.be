<?php
	//require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
    include($_SERVER['DOCUMENT_ROOT']."/hsm/newuser_execute.php");
	
	function signupOptions($first = null)
	{
		global $paypal, $pms, $fias, $mail_setting, $reload_card, $linkpaypal, $linkpms, $linkreload_card;
		$r =  array();
		
		if($paypal)
		{
			$link =  '<li><a href="' . $linkpaypal . '#paypal">paypal</a></li>';
			if($first == 'paypal')
			{
				array_unshift($r, $link);
			} else {
				array_push($r, $link);
			}
		}
		if($pms)
		{
			$link =  '<li><a href="' . $linkpms . '">Bill my room</a></li>';
			if($first == 'pms')
			{
				array_unshift($r, $link);
			} else {
				array_push($r, $link);
			}
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
			$link =  '<li><a href="' . $linkreload_card . '#reloadcard" class="or">voucher</a></li>';
			if($first == 'reloadcard')
			{
				array_unshift($r, $link);
			} else {
				array_push($r, $link);
			}
		}
		return '<ul>'.implode($r).'</ul>';
	}
?>