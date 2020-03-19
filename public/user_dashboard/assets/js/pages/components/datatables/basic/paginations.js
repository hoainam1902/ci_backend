"use strict";
var KTDatatablesBasicPaginations = function() {

	var initTable1 = function() {
		var table = $('#kt_table_1');
		// begin first table
		table.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						if (typeof data == 'undefined') {
							return data;
						}
						return `
                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="` + editOrderURL + data + `"><i class="la la-edit"></i> Chinh Sua Don Hang</a>
                                <a class="dropdown-item" href="` + cancelOrderURL + data + `"><i class="la la-leaf"></i> Huy Don Hang</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                        <button type="button" id="btn-showDetails" data-toggle="modal" data-target="#kt_modal_KTDatatable_local" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </button>`;
					},
				},
				{
					targets: 8,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Pending', 'class': 'kt-badge--brand'},
							2: {'title': 'Confirmed', 'class': ' kt-badge--primary'},
							3: {'title': 'Delivered', 'class': ' kt-badge--metal'},
							4: {'title': 'Success', 'class': ' kt-badge--success'},
							5: {'title': 'Danger', 'class': ' kt-badge--danger'},
							6: {'title': 'Warning', 'class': ' kt-badge--warning'},
							7: {'title': 'Canceled', 'class': ' kt-badge--primary'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
					},
				},
				{
					targets: 9,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Online', 'state': 'danger'},
							2: {'title': 'Retail', 'state': 'primary'},
							3: {'title': 'Direct', 'state': 'accent'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--dot"></span>&nbsp;' +
							'<span class="kt-font-bold kt-font-' + status[data].state + '">' + status[data].title + '</span>';
					},
				},
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		}
	};
}();

jQuery(document).ready(function() {
	KTDatatablesBasicPaginations.init();
});