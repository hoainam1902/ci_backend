
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
	<div class="kt-header-mobile__logo">
		<a href="index.html">
			<img alt="Logo" src="assets/media/logos/logo-1.png" />
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
		<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
	</div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

		<!-- begin:: Aside -->
		<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
		<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

			<!-- begin:: Aside -->
			<div class="kt-aside__brand   kt-grid__item" id="kt_aside_brand">
				<div class="kt-aside__brand-logo">
					<a href="index.html">
						<img alt="Logo" src="assets/media/logos/logo-1.png" />
					</a>
				</div>
				<div class="kt-aside__brand-tools">
					<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
				</div>
			</div>

			<!-- end:: Aside -->

			<!-- begin:: Aside Menu -->
			<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
				<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
					<ul class="kt-menu__nav ">
						<!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-chart-bar"></i><span class="kt-menu__link-text">Dashboards</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
							<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
								<ul class="kt-menu__subnav">
									<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Dashboards</span></span></li>
									<li class="kt-menu__item " aria-haspopup="true"><a href="index.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Brand Aside</span></a></li>
									<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/aside-light.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Light Aside</span></a></li>
									<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/aside-navy.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Navy Aside</span></a></li>
								</ul>
							</div>
						</li> -->
						 
						
						<li class="kt-menu__item kt-menu__item--submenu <?= isCurrentURLMathWith('user.order') ? 'kt-menu__item--open' : '' ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-calendar"></i><span class="kt-menu__link-text">Order</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
							<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
								<ul class="kt-menu__subnav">
									
									<li class="kt-menu__item <?= isCurrentURLMathWith('user.order') ? 'kt-menu__item--active' : '' ?>" aria-haspopup="true"><a href="<?= route('user/order') ?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">My Order</span></a></li>
									
								</ul>
							</div>
						</li>
						<li class="kt-menu__item  kt-menu__item--submenu <?= (isCurrentURLMathWith('user.profile') || isCurrentURLMathWith('user.change-password')) ? 'kt-menu__item--open' : '' ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-diagram"></i><span class="kt-menu__link-text">My Account</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
							<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
								<ul class="kt-menu__subnav">
									<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Account Info</span></span></li>
									<li class="kt-menu__item <?= isCurrentURLMathWith('user.profile') ? 'kt-menu__item--active' : '' ?>" aria-haspopup="true"><a href="<?= route('user/profile') ?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Account Info</span></a></li>
									<li class="kt-menu__item <?= isCurrentURLMathWith('user.change-password') ? 'kt-menu__item--active' : '' ?>" aria-haspopup="true"><a href="<?= route('user/change-password') ?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Change Password</span></a></li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<!-- end:: Aside Menu -->
		</div>

		<!-- end:: Aside -->
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">

			<!-- begin:: Header -->
			<div id="kt_header" class="kt-header kt-grid__item " data-ktheader-minimize="on">
				<div class="kt-container  kt-container--fluid ">

					<!-- begin:: Subheader -->
					<div class="kt-subheader   kt-grid__item">
						<div class="kt-subheader__main">
							<h3 class="kt-subheader__title"><?= $title ?></h3>
							<span class="kt-subheader__separator kt-hidden"></span>
							<?= $breadcrumbs ?>
						</div>
					</div>

					<!-- begin:: Topbar -->
					<div class="kt-header__topbar">

						<!--begin: Search -->
						<div class="kt-header__topbar-item kt-header__topbar-item--search">
							<div class="kt-header__topbar-wrapper">
								<div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact" id="kt_quick_search_inline">
									<form method="get" class="kt-quick-search__form">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
											<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
											<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
										</div>
									</form>
									<div data-toggle="dropdown" data-offset="0,15px"></div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
										<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--end: Search -->

						<!--begin: Search -->
						<div class="kt-header__topbar-item kt-header__topbar-item--search kt-hidden">
							<div class="kt-input-icon kt-input-icon--right">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="kt-input-icon__icon kt-input-icon__icon--right">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>

						<!--end: Search -->

						<!--begin: Quick Actions -->
						<div class="kt-header__topbar-item dropdown">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px">
								<span class="kt-header__topbar-icon"><i class="fa fa-cog"></i></span>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
								<div class="kt-head" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
									<h3 class="kt-head__title">Quick Actions</h3>
								</div>
								<div class="kt-grid-nav">
									<a href="#" class="kt-grid-nav__item">
										<div class="kt-grid-nav__item-icon"><i class="flaticon-computer"></i></div>
										<div class="kt-grid-nav__item-title">Customers</div>
										<div class="kt-grid-nav__item-desc">per department</div>
									</a>
									<a href="#" class="kt-grid-nav__item">
										<div class="kt-grid-nav__item-icon"><i class="flaticon-business"></i></div>
										<div class="kt-grid-nav__item-title">Orders</div>
										<div class="kt-grid-nav__item-desc">latest orders</div>
									</a>
									<a href="#" class="kt-grid-nav__item">
										<div class="kt-grid-nav__item-icon"><i class="flaticon-line-graph"></i></div>
										<div class="kt-grid-nav__item-title">Reports</div>
										<div class="kt-grid-nav__item-desc">finance & accounting</div>
									</a>
									<a href="#" class="kt-grid-nav__item">
										<div class="kt-grid-nav__item-icon"><i class="flaticon-settings"></i></div>
										<div class="kt-grid-nav__item-title">Administration</div>
										<div class="kt-grid-nav__item-desc">settings and logs</div>
									</a>
								</div>
							</div>
						</div>

						<!--end: Quick Actions -->

						<!--begin: Quick Panel Toggler -->
						<div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
							<div class="kt-header__topbar-wrapper">
								<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i class="fa fa-copy"></i></span>
							</div>
						</div>

						<!--end: Quick Panel Toggler -->

						<!--begin: Languages -->
						<div class="kt-header__topbar-item kt-header__topbar-item--langs">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
								<span class="kt-header__topbar-icon">
									<img class="" src="assets/media/flags/020-flag.svg" alt="" />
								</span>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
								<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
									<li class="kt-nav__item kt-nav__item--active">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-icon"><img src="assets/media/flags/020-flag.svg" alt="" /></span>
											<span class="kt-nav__link-text">English</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-icon"><img src="assets/media/flags/016-spain.svg" alt="" /></span>
											<span class="kt-nav__link-text">Spanish</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-icon"><img src="assets/media/flags/017-germany.svg" alt="" /></span>
											<span class="kt-nav__link-text">German</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!--end: Languages -->

						<!--begin: Notifications -->
						<div class="kt-header__topbar-item dropdown">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px">
								<span class="kt-header__topbar-icon kt-bg-brand"><i class="fa fa-bell kt-font-light"></i></span>
								<span class="kt-badge kt-badge--danger kt-badge--notify">3</span>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
								<div class="kt-head" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
									<h3 class="kt-head__title">User Notifications</h3>
									<div class="kt-head__sub"><span class="kt-head__desc">23 new notifications</span></div>
								</div>
								<div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220">
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-line-chart kt-font-success"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New order has been received
											</div>
											<div class="kt-notification__item-time">
												2 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-box-1 kt-font-brand"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New customer is registered
											</div>
											<div class="kt-notification__item-time">
												3 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-chart2 kt-font-danger"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												Application has been approved
											</div>
											<div class="kt-notification__item-time">
												3 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-image-file kt-font-warning"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New file has been uploaded
											</div>
											<div class="kt-notification__item-time">
												5 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-user kt-font-info"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New user feedback received
											</div>
											<div class="kt-notification__item-time">
												8 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-pie-chart-2 kt-font-success"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												System reboot has been successfully completed
											</div>
											<div class="kt-notification__item-time">
												12 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-favourite kt-font-focus"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New order has been placed
											</div>
											<div class="kt-notification__item-time">
												15 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item kt-notification__item--read">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-safe kt-font-primary"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												Company meeting canceled
											</div>
											<div class="kt-notification__item-time">
												19 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-psd kt-font-success"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New report has been received
											</div>
											<div class="kt-notification__item-time">
												23 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon-download-1 kt-font-danger"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												Finance report has been generated
											</div>
											<div class="kt-notification__item-time">
												25 hrs ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon-security kt-font-warning"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New customer comment recieved
											</div>
											<div class="kt-notification__item-time">
												2 days ago
											</div>
										</div>
									</a>
									<a href="#" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-pie-chart kt-font-focus"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title">
												New customer is registered
											</div>
											<div class="kt-notification__item-time">
												3 days ago
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>

						<!--end: Notifications -->

						<!--begin: User -->
						<div class="kt-header__topbar-item kt-header__topbar-item--user">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
								<img alt="Pic" src="assets/media/users/300_21.jpg" />

								<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">
								<div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
									<div class="kt-user-card__wrapper">
										<div class="kt-user-card__pic">

											<!--use "kt-rounded" class for rounded avatar style-->
											<img alt="Pic" src="assets/media/users/300_21.jpg" class="kt-rounded-" />
										</div>
										<div class="kt-user-card__details">
											<div class="kt-user-card__name"><?= $_SESSION['userInfo']['fullname'] ?></div>
											<div class="kt-user-card__position">CTO, Loop Inc.</div>
										</div>
									</div>
								</div>
								<ul class="kt-nav kt-margin-b-10">
									<li class="kt-nav__item">
										<a href="custom/profile/personal-information.html" class="kt-nav__link">
											<span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
											<span class="kt-nav__link-text">My Profile</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="custom/profile/overview-1.html" class="kt-nav__link">
											<span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
											<span class="kt-nav__link-text">My Tasks</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="custom/profile/overview-2.html" class="kt-nav__link">
											<span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
											<span class="kt-nav__link-text">Messages</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="custom/profile/account-settings.html" class="kt-nav__link">
											<span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
											<span class="kt-nav__link-text">Settings</span>
										</a>
									</li>
									<li class="kt-nav__separator kt-nav__separator--fit"></li>
									<li class="kt-nav__custom kt-space-between">
										<a href="<?= route('user.logout') ?>" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
										<i class="flaticon2-information kt-label-font-color-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
									</li>
								</ul>
							</div>
						</div>

						<!--end: User -->
					</div>

					<!-- end:: Topbar -->
				</div>
			</div>

			<!-- end:: Header -->


						