

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

	<!-- begin:: Subheader -->
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-container  kt-container--fluid ">
			<div class="kt-subheader__main">
				<h3 class="kt-subheader__title">Pagination Options Examples</h3>
				<span class="kt-subheader__separator kt-hidden"></span>
				<div class="kt-subheader__breadcrumbs">
					<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link">
					DataTables </a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link">
					Basic </a>
					<span class="kt-subheader__breadcrumbs-separator"></span>
					<a href="" class="kt-subheader__breadcrumbs-link">
					Pagination Options </a>

					<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
				</div>
			</div>
			<div class="kt-subheader__toolbar">
				<div class="kt-subheader__wrapper">
					<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Reports" data-placement="top"><i class="flaticon2-writing"></i></a>
					<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Calendar" data-placement="top"><i class="flaticon2-hourglass-1"></i></a>
					<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
						<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon2-add-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
							<ul class="kt-nav kt-nav--active-bg" role="tablist">
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-psd"></i>
										<span class="kt-nav__link-text">Document</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" role="tab">
										<i class="kt-nav__link-icon flaticon2-supermarket"></i>
										<span class="kt-nav__link-text">Message</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
										<span class="kt-nav__link-text">Product</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" role="tab">
										<i class="kt-nav__link-icon flaticon2-chart2"></i>
										<span class="kt-nav__link-text">Report</span>
										<span class="kt-nav__link-badge">
											<span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">pdf</span>
										</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-sms"></i>
										<span class="kt-nav__link-text">Post</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-avatar"></i>
										<span class="kt-nav__link-text">Customer</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
						<a href="#" class="btn btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0 0" aria-haspopup="true" aria-expanded="false">
							Reports
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<ul class="kt-nav kt-nav--active-bg" id="kt_nav_1" role="tablist">
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-psd"></i>
										<span class="kt-nav__link-text">Products</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" role="tab" id="kt_nav_link_1">
										<i class="kt-nav__link-icon flaticon2-supermarket"></i>
										<span class="kt-nav__link-text">Customers</span>
										<span class="kt-nav__link-badge">
											<span class="kt-badge kt-badge--success kt-badge--inline kt-badge--rounded">6</span>
										</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
										<span class="kt-nav__link-text">Orders</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
										<span class="kt-nav__link-text">Reports</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" role="tab" id="kt_nav_link_2">
										<i class="kt-nav__link-icon flaticon2-chart2"></i>
										<span class="kt-nav__link-text">Console</span>
										<span class="kt-nav__link-badge">
											<span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">new</span>
										</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="" class="kt-nav__link">
										<i class="kt-nav__link-icon flaticon2-sms"></i>
										<span class="kt-nav__link-text">Settings</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end:: Subheader -->

	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<?= $this->load->view('_part/notify') ?>
		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Danh Sach Don Hang
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">

				<!--begin: Datatable -->
				<table class="table table-striped- table-bordered table-hover table-checkable table-order" id="kt_table_1">
					<thead>
						<tr>
							<th>Order ID</th>
							<th>Record ID</th>
							<th>Country</th>
							<th>Ship City</th>
							<th>Ship Address</th>
							<th>Phone</th>
							<th>Company Name</th>
							<th>Created Date</th>
							<th>Status</th>
							<th>Type</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($dataBody['listOrder']) && !empty($dataBody['listOrder'])) { foreach ($dataBody['listOrder'] as $key => $order) { ?>
							<tr>
								<td><?= $order['id'] ?></td>
								<td><?= $order['id'] ?></td>
								<td>China</td>
								<td>Tieba</td>
								<td><?= $order['address'] ?></td>
								<td><?= $order['phone'] ?></td>
								<td>Gleichner, Ziemann and Gutkowski</td>
								<td>2/12/2018</td>
								<td><?= $order['status'] ?></td>
								<td>2</td>
								<td nowrap><?= $order['id'] ?></td>
							</tr>
							<?php }}  ?>


							<tr>
								<td>15</td>
								<td>36987-3005</td>
								<td>Portugal</td>
								<td>Bacelo</td>
								<td>548 Morrow Terrace</td>
								<td>Christa Jacmar</td>
								<td>Brakus-Hansen</td>
								<td>8/17/2017</td>
								<td>1</td>
								<td>2</td>
								<td nowrap>7</td>
							</tr>
							<tr>
								<td>16</td>
								<td>67510-0062</td>
								<td>South Africa</td>
								<td>Pongola</td>
								<td>02534 Hauk Trail</td>
								<td>Shandee Goracci</td>
								<td>Bergnaum, Thiel and Schuppe</td>
								<td>7/24/2016</td>
								<td>5</td>
								<td>3</td>
								<td nowrap>6</td>
							</tr>
							<tr>
								<td>17</td>
								<td>36987-2542</td>
								<td>Russia</td>
								<td>Novokizhinginsk</td>
								<td>19427 Sloan Road</td>
								<td>Jerrome Colvie</td>
								<td>Kreiger, Glover and Connelly</td>
								<td>3/4/2016</td>
								<td>3</td>
								<td>1</td>
								<td nowrap></td>
							</tr>
							<tr>
								<td>18</td>
								<td>11673-479</td>
								<td>Brazil</td>
								<td>Conceição das Alagoas</td>
								<td>191 Stone Corner Road</td>
								<td>Michaelina Plenderleith</td>
								<td>Legros-Gleichner</td>
								<td>2/21/2018</td>
								<td>1</td>
								<td>2</td>
								<td nowrap></td>
							</tr>
							<tr>
								<td>19</td>
								<td>47781-264</td>
								<td>Ukraine</td>
								<td>Yasinya</td>
								<td>1481 Sauthoff Place</td>
								<td>Lombard Luthwood</td>
								<td>Haag LLC</td>
								<td>1/21/2016</td>
								<td>1</td>
								<td>2</td>
								<td nowrap></td>
							</tr>
							<tr>
								<td>20</td>
								<td>42291-712</td>
								<td>Indonesia</td>
								<td>Kembang</td>
								<td>9029 Blackbird Point</td>
								<td>Leonora Chevin</td>
								<td>Mann LLC</td>
								<td>9/6/2017</td>
								<td>2</td>
								<td>3</td>
								<td nowrap></td>
							</tr>
							<tr>
								<td>21</td>
								<td>64679-154</td>
								<td>Mongolia</td>
								<td>Sharga</td>
								<td>102 Holmberg Park</td>
								<td>Tannie Seakes</td>
								<td>Blanda Group</td>
								<td>7/31/2016</td>
								<td>6</td>
								<td>3</td>
								<td nowrap></td>
							</tr>
							<tr>
								<td>22</td>
								<td>49348-055</td>
								<td>China</td>
								<td>Guxi</td>
								<td>45 Butterfield Street</td>
								<td>Yardley Wetherell</td>
								<td>Gerlach-Schultz</td>
								<td>4/3/2017</td>
								<td>2</td>
								<td>2</td>
								<td nowrap></td>
							</tr>
							<tr>
								<td>23</td>
								<td>47593-438</td>
								<td>Portugal</td>
								<td>Viso</td>
								<td>97 Larry Center</td>
								<td>Bryn Peascod</td>
								<td>Larkin and Sons</td>
								<td>5/22/2016</td>
								<td>6</td>
								<td>1</td>
								<td nowrap></td>
							</tr>

						</tbody>
					</table>

					<!--end: Datatable -->
				</div>
			</div>
		</div>


<!-- local datatable modal -->
<div id="kt_modal_KTDatatable_local" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content" style="min-height: 590px;">
			<div class="modal-header">
				<h5 class="modal-title">
					Chi tiet don hang
					<!-- <small>tat ca san pham trong don hang</small> -->
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
			<div class="modal-footer">
				<button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
			</div>
		</div>
	</div>
</div>


		<!-- end:: Content -->
	</div>

