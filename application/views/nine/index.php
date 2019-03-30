<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php if (isset($page_title)) echo $page_title; else echo "Skills Bank";?></title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/demo/demo9/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<?php if (isset($page_styles)) $this->load->view($page_styles);
                else $this->load->view(THEME.'/page_styles');
        ?>
		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/demo/demo9/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop  m-header__wrapper">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand m-brand--mobile">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="<?=base_url()?>" class="m-brand__logo-wrapper">
										<img alt="" src="<?php echo base_url(); ?>assets/demo/demo9/media/img/logo/logo.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_toggle_mobile" class="m-brand__icon m-brand__toggler m-brand__toggler--left">
										<span></span>
									</a>
									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler">
										<span></span>
									</a>
									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon">
										<i class="flaticon-more"></i>
									</a>
									<!-- END: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--left m-header-head" id="m_header_nav">
							<div class="m-stack m-stack--ver m-stack--desktop">
								<div class="m-stack__item m-stack__item--middle m-stack__item--fit">

									<!-- BEGIN: Aside Left Toggle -->
									<a href="javascript:;" id="m_aside_left_toggle" class="m-aside-left-toggler m-aside-left-toggler--left m_aside_left_toggler">
										<span></span>
									</a>
									<!-- END: Aside Left Toggle -->
								</div>
								<div class="m-stack__item m-stack__item--fluid">

									<!-- BEGIN: Horizontal Menu -->
									<?php if (isset($navigation)) $this->load->view($navigation);
											else $this->load->view(THEME.'/navigation');
									?>
									<!-- END: Horizontal Menu -->
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--middle m-stack__item--center">

							<!-- BEGIN: Brand -->
							<a href="<?=base_url()?>" class="m-brand m-brand--desktop">
								<img alt="" src="<?php echo base_url(); ?>assets/demo/demo9/media/img/logo/logo.png" />
							</a>
							<!-- END: Brand -->
						</div>
						<div class="m-stack__item m-stack__item--right">
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<?php if (isset($user_profile)) $this->load->view($user_profile);
											else $this->load->view(THEME.'/user_profile');
										?>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
			<div id="m_aside_left" class="m-aside-left  m-aside-left--skin-dark ">

				<!-- BEGIN: Aside Menu -->
				<?php if (isset($menu_aside)) $this->load->view($menu_aside);
					else $this->load->view(THEME.'/menu_aside');
				?>
				<!-- END: Aside Menu -->
			</div>
			<!-- END: Left Aside -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--fluid m-container--xxl m-container--full-height">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">

						<!-- BEGIN: Subheader -->
						<div class="m-subheader ">
							<div class="d-flex align-items-center">
								<div class="mr-auto">
									<h3 class="m-subheader__title m-subheader__title--separator"><?php if (isset($content_title)) echo $content_title; else echo "Skills Bank";?></h3>
									<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
										<li class="m-nav__item m-nav__item--home">
											<a href="<?=base_url()?>" class="m-nav__link m-nav__link--icon">
												<i class="m-nav__link-icon la la-home"></i>
											</a>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
						<!-- END: Subheader -->
						<div class="m-content">
							<?php if (isset($content_file)) $this->load->view($content_file);
								else $this->load->view(THEME.'/content_file');
							?>
						</div>
					</div>
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<?php if (isset($footer)) $this->load->view($footer);
                else $this->load->view(THEME.'/footer');
            ?>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/demo/demo9/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="<?php echo base_url(); ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<?php if (isset($page_scripts)) $this->load->view($page_scripts);
                else $this->load->view(THEME.'/page_scripts');
        ?>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>