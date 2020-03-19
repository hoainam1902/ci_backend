<link rel="stylesheet" href="js/sweetalert/sweetalert2.css">
<script src="js/sweetalert/sweetalert2.js"></script>
<script type="text/javascript">
//sweet alert


$('#btnAddCart').on('click', function(e) {
	e.preventDefault();
	var id = $('#id')[0].value;
	var qty = $('#qty')[0].value;
	// var countItemCart = $('.cart-nav span')[0].innerText;
	// countItemCart = parseInt(countItemCart.replace(/[()]/g, ''));
	// var countItemCart = '<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>';
	$.ajax({
		url: '<?= route('cart.addItem') ?>',
		method: 'post',
		dataType: 'JSON',
		data : { id : id, qty : qty},
	}).done(function(msg) {
		var nameProduct = $('#productName').html();
		if (msg['status'] == 'true') {
			// swal(nameProduct, "Đã thêm vào giỏ hàng", "success");
			$('.cart-nav span')[0].innerText = '(' + parseInt(msg['count']) + ')';
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger'
				},
				buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
				title: nameProduct,
				text: "Đã thêm sản phẩm vào giỏ hàng. Đến trang thanh toán ?",
				icon: 'success',
				showCancelButton: true,
				confirmButtonText: 'OK',
				cancelButtonText: 'Cancel',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					window.location.replace('<?= route('cart') ?>');
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
					) {
					//cancel action
				}
			})
		} else {
			swal(nameProduct, "Lỗi. Không thể thêm sản phẩm vào giỏ hàng !", "error");
		}

	});

});

//Fly to cart effect
// $('#btnAddCart').on('click', function(e) {
// 	e.preventDefault();
// 	var id = $('#id')[0].value;
// 	var qty = $('#qty')[0].value;
// 	var countItemCart = $('.cart-nav span')[0].innerText;
// 	countItemCart = parseInt(countItemCart.replace(/[()]/g, ''));
// 	$.ajax({
// 		url: '<?= route('cart.addItem') ?>',
// 		method: 'post',
// 		data : { id : id, qty : qty},
// 	}).done(function(msg) {
// 		var nameProduct = $('#productName').html();
// 		if (msg == 'true') {
// 			var cart = $('#imgCart');
// 			var imgtodrag = $('.gallery_img').find("img").eq(0);
// 			if (imgtodrag) {
// 				var imgclone = imgtodrag.clone()
// 				.offset({
// 					top: imgtodrag.offset().top,
// 					left: imgtodrag.offset().left
// 				})
// 				.css({
// 					'opacity': '0.5',
// 					'position': 'absolute',
// 					'height': '150px',
// 					'width': '150px',
// 					'z-index': '100'
// 				})
// 				.appendTo($('body'))
// 				.animate({
// 					'top': cart.offset().top + 10,
// 					'left': cart.offset().left + 10,
// 					'width': 75,
// 					'height': 75
// 				}, 1000, 'easeInOutExpo');

// 				setTimeout(function () {
// 					cart.effect("shake", {
// 						times: 2
// 					}, 200);
// 				}, 1500);

// 				imgclone.animate({
// 					'width': 0,
// 					'height': 0
// 				}, function () {
// 					$(this).detach()
// 				});
// 			}
// 			$('.cart-nav span')[0].innerText = '(' + parseInt('0') + ')';
// 		} else {

// 		}

// 	});

// });


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
</script>