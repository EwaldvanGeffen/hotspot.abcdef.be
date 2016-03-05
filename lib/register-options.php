<?php
	function liRegisterOption($name)
	{
		return '<li><a href="#' . $name . '">' . $name . '</a></li>'."\n";
	}
	
	function registerOptions($first = null)
	{
		$options = array(
			'facebook',
			'twitter',
			//'email',
			'google',
			'linkedin');
		
		if(in_array($first,$options))
		{
			$return .= liRegisterOption($first);
		}
		
		foreach($options as $option)
		{				
			if($option != $first)
				$return .= liRegisterOption($option);
		}
		
		return "<ul>".$return . "\n</ul>\n";
	}
?>


