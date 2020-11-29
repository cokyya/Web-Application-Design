$('.check').change(function button() {
	if ($('.check:checked').length) {
		$('#confirm').removeAttr('disabled');
		$('#summary').show();
	} else {
		$('#confirm').attr('disabled', 'disabled');
		$('#summary').hide();
		}
});
var total;
$('.check').change(function computeTotal(){
		var price = document.getElementById("price").innerHTML;
		var count = $("[type='checkbox']:checked").length;
		total = count * parseInt(price);
		document.getElementById("quantity").innerHTML = count;
		document.getElementById("total").value = total;
});
$(document).ready(function() {
	$('#confirm').click(function(){
		var seat = [];
		var seatInfo = [];
		$.each($("[type='checkbox']:checked"), function(){
			seat.push($(this).val());
		});
		window.location.href = "confirmation.php?seatNo=" + seat + "&amount=" +total;
	});
});