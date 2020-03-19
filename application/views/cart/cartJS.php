<?php

?>
<!--===============================================================================================-->
<script type="text/javascript">
function formatNumber(nStr, decSeperate, groupSeperate) {
	nStr += '';
	x = nStr.split(decSeperate);
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
	}
	return x1 + x2;
}

//sum and show subtotal
var subTotal = 0;
$('.cart-table tbody tr').each(function (){
	subTotal += parseInt($(this).find('.totalPrice')[0].value);
});
$('.container-fluid #spanSubtotal').html(formatNumber(subTotal, '.', ','));
//show total
$('.container-fluid #spanTotal').html(formatNumber(subTotal, '.', ','));
</script>

<!--===============================================================================================-->


