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

<!--===============================================================================================-->

//sweet alert
$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
	e.preventDefault();
});

$('.js-addwish-b2').each(function(){
	var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
	$(this).on('click', function(){
		swal(nameProduct, "is added to wishlist !", "success");

		$(this).addClass('js-addedwish-b2');
		$(this).off('click');
	});
});

$('.js-addwish-detail').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

	$(this).on('click', function(){
		swal(nameProduct, "is added to wishlist !", "success");

		$(this).addClass('js-addedwish-detail');
		$(this).off('click');
	});
});

/*---------------------------------------------*/

$('.js-addcart-detail').each(function(){
	var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
	$(this).on('click', function(){
		swal(nameProduct, "is added to cart !", "success");
	});
});


