<!-- begin::Body -->

	<body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">


		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">

				<!--begin::Item-->
				<div class="kt-grid__item  kt-grid--hor">

					<!--begin::Heade-->
					<div class="kt-login-v2__head">
						<div class="kt-login-v2__logo">
							<a href="#">
								<img src="assets/media/logos/logo-5.png" alt="" />
							</a>
						</div>
						<div class="kt-login-v2__signup">
							<span>Don't have an account?</span>
							<a href="#" class="kt-link kt-font-brand">Sign Up</a>
						</div>
					</div>

					<!--begin::Head-->
				</div>

				<!--end::Item-->

				<!--begin::Item-->
				<div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">

					<!--begin::Body-->
					<div class="kt-login-v2__body">

						<!--begin::Wrapper-->
						<div class="kt-login-v2__wrapper">
							<div class="kt-login-v2__container">
								<div class="kt-login-v2__title">
									<h3>Sign to Account</h3>
								</div>

								<!--begin::Form-->
								<form class="kt-login-v2__form kt-form" method="post" autocomplete="off">
									<div class="form-group">
										<input class="form-control <?= isset($invalid['email']) ? 'is-invalid' : '' ?>" type="text" placeholder="Email" name="email" autocomplete="off">
										<div class="invalid-feedback"><?= !empty($invalid['email']) ? $invalid['email'] : '' ?></div>
										<!-- <span class="form-text text-muted">Example help text that remains unchanged.</span> -->
									</div>
									<div class="form-group">
										<input class="form-control <?= isset($invalid['password']) ? 'is-invalid' : '' ?>" type="password" placeholder="Password" name="password" autocomplete="off">
										<div class="invalid-feedback"><?= !empty($invalid['password']) ? $invalid['password'] : '' ?></div>
									</div>

									<!--begin::Action-->
									<div class="kt-login-v2__actions">
										<a href="#" class="kt-link kt-link--brand">
											Forgot Password ?
										</a>
										<button type="submit" id="btnLogin" class="btn btn-brand btn-elevate btn-pill">Sign In</button>
									</div>

									<!--end::Action-->
								</form>

								<!--end::Form-->

								<!--begin::Separator-->
								<div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>

								<!--end::Separator-->

								<!--begin::Options-->
								<h3 class="kt-login-v2__desc">Or sign with social account</h3>
								<div class="kt-login-v2__options">
									<a href="#" class="btn btn-facebook btn-pill">
										<i class="fab fa-facebook-f"></i>
										Facebook
									</a>
									<a href="#" class="btn btn-twitter btn-pill">
										<i class="fab fa-twitter"></i>
										Twitter
									</a>
									<a href="#" class="btn btn-google btn-pill">
										<i class="fab fa-google"></i>
										Google
									</a>
								</div>

								<!--end::Options-->
							</div>
						</div>

						<!--end::Wrapper-->

						<!--begin::Image-->
						<div class="kt-login-v2__image">
							<img src="assets/media/misc/bg_icon.svg" alt="">
						</div>

						<!--begin::Image-->
					</div>

					<!--begin::Body-->
				</div>

				<!--end::Item-->

				<!--begin::Item-->
				<div class="kt-grid__item">
					<div class="kt-login-v2__footer">
						<div class="kt-login-v2__link">
							<a href="#" class="kt-link kt-font-brand">Privacy</a>
							<a href="#" class="kt-link kt-font-brand">Legal</a>
							<a href="#" class="kt-link kt-font-brand">Contact</a>
						</div>
						<div class="kt-login-v2__info">
							<a href="#" class="kt-link">&copy; 2018 Webshop</a>
						</div>
					</div>
				</div>

				<!--end::Item-->
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5578eb",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/custom/user/login.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>