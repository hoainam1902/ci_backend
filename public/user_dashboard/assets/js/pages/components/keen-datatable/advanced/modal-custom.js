$(document).ready(function() {
	$('.table-order tbody td #btn-showDetails').click(function (e) {
		e.preventDefault();
		var orderID = parseInt($(this).closest('tr').find('td:first').text());
		$.ajax({
			method: 'post',
			url: showDetailsURL, 
			data: {orderID : orderID},
		}).done(function(html) {
			var dataJSONArray = JSON.parse(html);
				// var rdNumber = Math.floor(Math.random() * 10);
				// var dataJSONArray = JSON.parse('[{"id": 8,"order_id": "7","product_id": " ' + rdNumber + ' ","quantity": "1","price": "150000","amount": "0","name": "ao thun ngan tay nam gucci","slug": "ao-thun-ngan-tay","description": "ao thun ngan tay nam gucci ao thun ngan tay nam gucciao thun ngan tay nam gucciao thun ngan tay nam gucciao thun ngan tay nam gucciao thun ngan tay nam gucci","price_list": "250000","image": null,"images": null,"featured": "0","status":6,"type":2,"salary":"$339.37"}]');
		// var dataJSONArray = JSON.parse('[{"id":"1","order_id":"7","product_id":"1","quantity":"1","price":"150000","amount":"420-935-0970","name":"Male","slug":"Legal","description":"72460 Bunting Trail","price_list":"250000","image":"null","images":"euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis","status":6,"salary":"$339.37"}]');
		

		'use strict';
// Class definition

var KTDatatableModal = function() {
	var localDatatable = function() {

		
		
		var modal = $('#kt_modal_KTDatatable_local');

		var datatable1 = $('#modal_datatable_local_source').KTDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataJSONArray,
				pageSize: 10,
			},

			// layout definition
			layout: {
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 400, // datatable's body's fixed height
				minHeight: 400,
				footer: false, // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: modal.find('#generalSearch'),
			},

			// columns definition
			columns: [
			{
				field: 'product_id',
				title: '#',
				sortable: 'asc',
				width: 40,
				type: 'number',
				selector: false,
				textAlign: 'center',
			}, {
				field: 'name',
				title: 'Product',
					// callback function support for column rendering
					template: function(data) {

						var output = '';
						
						output = '<div class="kt-user-card-v2">\
						<div class="kt-user-card-v2__pic">\
						<img src="' + IMGURL + data.image + '" alt="photo">\
						</div>\
						<div class="kt-user-card-v2__details">\
						<span class="kt-user-card-v2__name">' + data.name + '</span>\
						<a href="#" class="kt-user-card-v2__email kt-link">' +
						data.slug + '</a>\
						</div>\
						</div>';

						
						return output;
					},
				}, {
					field: 'quantity',
					title: 'Quantity',
					template: function(data) {
						return data.quantity;
					},
				}, {
					field: 'price',
					title: 'Price',
					autoHide: false,
					// callback function support for column rendering
					template: function(data) {
						
						return data.price;
					},
				}, {
					field: 'amount',
					title: 'Amount',
					width: 110,
					textAlign: 'center',
				}, {
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
					template: function() {
						return '\
						<div class="dropdown">\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
						<i class="la la-cog"></i>\
						</a>\
						<div class="dropdown-menu dropdown-menu-right">\
						<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
						</div>\
						</div>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
						<i class="la la-edit"></i>\
						</a>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
						<i class="la la-trash"></i>\
						</a>\
						';
					},
				}],
			});

		modal.find('#kt_form_status').on('change', function() {
			datatable1.search($(this).val().toLowerCase(), 'status');
		});

		modal.find('#kt_form_type').on('change', function() {
			datatable1.search($(this).val().toLowerCase(), 'type');
		});

		modal.find('#kt_form_status,#kt_form_type').selectpicker();

		// fix datatable layout after modal shown
		// datatable.hide();
		var alreadyReloaded = false;
		modal.on('shown.bs.modal', function() {
			if (!alreadyReloaded) {
				var modalContent = $(this).find('.modal-content');
				datatable1.spinnerCallback(true, modalContent);

				datatable1.reload();

				datatable1.on('kt-datatable--on-layout-updated', function() {
					datatable1.show();
					datatable1.spinnerCallback(false, modalContent);
					datatable1.redraw();
				});

				alreadyReloaded = true;
			}
		}).on('hidden.bs.modal', function() {
			datatable1.KTDatatable('destroy');
		});;

		// modal.on('hidden.bs.modal', function() {
		// 	datatable1.destroy();
		// });
	};

	

	


	

	return {
		// public functions
		init: function() {
			// remoteDatatable();
			localDatatable();
			// subRemoteDatatable();
		}
	};

}();


KTDatatableModal.init();




});
});
});