function showDiv(div, init)
{
	init = (typeof init === 'undefined') ? false : init;

	if(div == 'intro')
	{
		$('#menu').hide();
	} else {
		$('#menu').show();
	}
	
	if(!init && $('#' + div).css('display') === 'none')
	{	// if this isn't the initial view (page load) and we switch back to a view
		$('.error').hide();
	}

	$('div').each(function() { $(this).hide(); });
	$('#' + div).show();

	setTimeout(function() {
		if (location.hash) {
			window.scrollTo(0, 0);
		}
	}, 1);
}

$('#menu a').click(function(e){
	showDiv($(this).attr('href').substring(1)); /* write something better to extract hashes from links, because this only works on href="#<something>" */
});

$('.register a').click(function(e){
	showDiv($(this).attr('href').substring(1)); /* write something better to extract hashes from links, because this only works on href="#<something>" */
});

$(document).ready()
{
	if(window.location.hash)
	{
		var hash = window.location.hash.substring(1);
	} 
	
	var gettype = getURLParameter('type'); // if on submit we get error, use http get param to display right div
	if(gettype == 'paypal' || gettype == 'reloadcard')
	{
		var hash = gettype;
	}
	
	if(hash) {
		showDiv(hash);
	} else {
		showDiv(dftdiv, true);
	}
}

function getURLParameter(name) {
	return decodeURI(
		(RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
	);
}