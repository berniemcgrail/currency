$(document).ready(function() {
	
	//open the drop down list
	$('.box').click(function(){
		$(this).next().next().toggle();
	});
	
	//put country code of selected value in the drop down field and the hidden form field, hide the list
	$('.from li').click(function(){
		var countryCode = $(this).attr('class');
		$(this).parent().prev().prev().html(countryCode + '<div class="arrowdown"></div>');
		$('.input-from').val(countryCode);
		$('ul').hide();
	});
	
	$('.to li').click(function(){
		var countryCode = $(this).attr('class');
		$(this).parent().prev().prev().html(countryCode + '<div class="arrowdown"></div>');
		$('.input-to').val(countryCode);
		$('ul').hide();
	});
});
