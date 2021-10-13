$( "input[name=cp]" ).change(function() {
	var cp = $('input[name=cp]').val();
	cp = cp.replace('-','');
	$.getJSON("https://api.duminio.com/ptcp/" + cp, function(json) 
	{
		$('input[name=freguesia]').val(json.Freguesia);
		$('input[name=concelho]').val(json.Concelho);
	 });
});