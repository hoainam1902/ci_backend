
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<?= $this->load->view('_part/notify') ?>
<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Chinh Sua Don Hang</h3>
		</div>
	</div>

	<!--begin::Form-->
	<form class="kt-form kt-form--label-right" method="post">
		<div class="kt-portlet__body">
			<div class="form-group row">
				<div class="col-lg-6">
					<label>Full Name:</label>
					<input type="text" name="fullname" value="<?= $order['fullname'] ?>" class="form-control" placeholder="Enter full name">
					<span class="form-text text-muted">Please enter your full name</span>
				</div>
				<div class="col-lg-6">
					<label class="">Phone Number:</label>
					<input type="number" name="phone" value="<?= $order['phone'] ?>" class="form-control" placeholder="Enter contact number">
					<span class="form-text text-muted">Please enter your contact number</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-lg-6">
					<label>Address:</label>
					<div class="kt-input-icon">
						<input type="text" name="address" value="<?= $order['address'] ?>" class="form-control" placeholder="Enter your address">
						<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
					</div>
					<span class="form-text text-muted">Please enter your address</span>
				</div>
				<div class="col-lg-6">
					<label class="">Postcode:</label>
					<div class="kt-input-icon">
						<input type="text" name="note" class="form-control" value="<?= $order['note'] ?>" placeholder="Enter your note">
						<span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
					</div>
					<span class="form-text text-muted">Please enter your note</span>
				</div>
			</div>
			<!-- <div class="form-group row">
				<div class="col-lg-6">
					<label>User Group:</label>
					<div class="kt-radio-inline">
						<label class="kt-radio kt-radio--solid">
							<input type="radio" name="example_2" checked value="2"> Sales Person
							<span></span>
						</label>
						<label class="kt-radio kt-radio--solid">
							<input type="radio" name="example_2" value="2"> Customer
							<span></span>
						</label>
					</div>
					<span class="form-text text-muted">Please select user group</span>
				</div>
			</div> -->
		</div>
		<div class="kt-portlet__foot">
			<div class="kt-form__actions">
				<div class="row">
					<div class="col-lg-6">
						<button type="submit" class="btn btn-primary">Save Change</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
					<!-- <div class="col-lg-6 m--align-right">
						<button type="reset" class="btn btn-danger">Delete</button>
					</div> -->
				</div>
			</div>
		</div>
	</form>

	<!--end::Form-->
</div>

</div>