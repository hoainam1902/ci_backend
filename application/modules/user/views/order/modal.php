

<!-- local datatable modal -->
<div id="kt_modal_KTDatatable_local" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content" style="min-height: 590px;">
			<div class="modal-header">
				<h5 class="modal-title">
					Datatable
					<small>local data source</small>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<!--begin: Search Form -->
				<div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
					<div class="row align-items-center">
						<div class="col-xl-8 order-2 order-xl-1">
							<div class="row align-items-center">
								<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
									<div class="kt-input-icon kt-input-icon--left">
										<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--left">
											<span><i class="la la-search"></i></span>
										</span>
									</div>
								</div>
								<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
									<div class="kt-form__group kt-form__group--inline">
										<div class="kt-form__label">
											<label>Status:</label>
										</div>
										<div class="kt-form__control">
											<select class="form-control bootstrap-select" id="kt_form_status">
												<option value="">All</option>
												<option value="1">Pending</option>
												<option value="2">Delivered</option>
												<option value="3">Canceled</option>
												<option value="4">Success</option>
												<option value="5">Info</option>
												<option value="6">Danger</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
									<div class="kt-form__group kt-form__group--inline">
										<div class="kt-form__label">
											<label>Type:</label>
										</div>
										<div class="kt-form__control">
											<select class="form-control bootstrap-select" id="kt_form_type">
												<option value="">All</option>
												<option value="1">Online</option>
												<option value="2">Retail</option>
												<option value="3">Direct</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
							<a href="#" class="btn btn-default kt-hidden">
								<i class="la la-cart-plus"></i> New Order
							</a>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
						</div>
					</div>
				</div>

				<!--end: Search Form -->
			</div>
			<div class="modal-body modal-body-fit">

				<!--begin: Datatable -->
				<div id="modal_datatable_local_source"></div>

				<!--end: Datatable -->
			</div>
			<div class="modal-footer kt-hidden">
				<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
			</div>
		</div>
	</div>
</div>