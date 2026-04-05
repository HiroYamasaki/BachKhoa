<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
	<title>FAQ &#8211; BachKhoa Digital</title>
	<?php $ogBase = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost'); ?>
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="BachKhoa Digital"/>
	<meta property="og:url" content="<?php echo $ogBase; ?>/faq"/>
	<meta property="og:title" content="Câu Hỏi Thường Gặp – BachKhoa Digital"/>
	<meta property="og:description" content="Tổng hợp câu hỏi thường gặp về dịch vụ hạ tầng mạng, camera, tổng đài IP và giải pháp CNTT."/>
	<meta property="og:image" content="<?php echo $ogBase; ?>/images/share.jpg"/>
	<meta property="og:image:width" content="1200"/>
	<meta property="og:image:height" content="630"/>
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:title" content="Câu Hỏi Thường Gặp – BachKhoa Digital"/>
	<meta name="twitter:description" content="Tổng hợp câu hỏi thường gặp về dịch vụ hạ tầng mạng, camera, tổng đài IP và giải pháp CNTT."/>
	<meta name="twitter:image" content="<?php echo $ogBase; ?>/images/share.jpg"/>
	<meta name='robots' content='max-image-preview:large' />

	<link rel='dns-prefetch' href='//fonts.googleapis.com' />

	<!-- Shared CSS (same as home) -->
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-includes/css/dist/block-library/style.min.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/style.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/modules.min.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/elegant-icons@0.0.1/style.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/linea-iconset@1.0.0/styles.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://cdn.linearicons.com/free/1.0.0/icon-font.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/dripicons/dripicons.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.16' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/woocommerce.min.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/woocommerce-responsive.min.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/style_dynamic.css?ver=1639748974' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/modules-responsive.min.css?ver=6.0.11' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/css/style_dynamic_responsive.css?ver=1639748974' type='text/css' media='all' />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald%3A300%2C400%2C500%7CPoppins%3A300%2C400%2C500&subset=latin-ext&ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' href='https://baumeister.qodeinteractive.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.10.0' type='text/css' media='all' />

	<!-- JS libs -->
	<script src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'></script>
	<script src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'></script>
	<script src='https://baumeister.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.5' async></script>
	<script src='https://baumeister.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.5' async></script>

	<!-- Page-specific override -->
	<script>
		var mkdPerPageVars = {
			"vars": {
				"mkdStickyScrollAmount": 800,
				"mkdHeaderTransparencyHeight": 0,
				"mkdHeaderVerticalWidth": 0
			}
		};
	</script>

	<noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
<style>
/* ===== CUSTOM CURSOR ===== */
*, *::before, *::after { cursor: none !important; }
#bk-cursor-dot {
    position: fixed; top: 0; left: 0; pointer-events: none; z-index: 99999;
    width: 10px; height: 10px; border-radius: 50%;
    background: #E8612D;
    will-change: transform;
    transition: width .15s ease, height .15s ease, background .2s ease, opacity .2s ease, border-radius .15s ease;
}
#bk-cursor-ring {
    position: fixed; top: 0; left: 0; pointer-events: none; z-index: 99998;
    width: 36px; height: 36px; border-radius: 50%;
    border: 2px solid #E8612D;
    will-change: transform;
    transition: width .35s cubic-bezier(.25,.46,.45,.94), height .35s cubic-bezier(.25,.46,.45,.94), border-color .2s ease, background .2s ease, opacity .2s ease, border-width .2s ease;
    opacity: 0.7;
}
body.cursor--link #bk-cursor-dot { width: 6px; height: 6px; background: #fff; }
body.cursor--link #bk-cursor-ring { width: 52px; height: 52px; border-color: #E8612D; background: rgba(232,97,45,0.10); }
body.cursor--btn #bk-cursor-dot {
    width: 48px; height: 48px;
    background: rgba(232,97,45,0.18);
    border-radius: 50%;
    border: 2px solid #E8612D;
}
body.cursor--btn #bk-cursor-ring {
    width: 68px; height: 68px;
    border-color: #C0392B;
    border-width: 3px;
    background: rgba(192,57,43,0.08);
    opacity: 1;
}
#bk-cursor-dot.bk-click {
    animation: bk-ripple .45s ease-out forwards;
}
@keyframes bk-ripple {
    0%   { transform: translate(-50%,-50%) scale(1); opacity: 1; }
    60%  { transform: translate(-50%,-50%) scale(2.2); opacity: 0.3; }
    100% { transform: translate(-50%,-50%) scale(1); opacity: 1; }
}
body.cursor--menu #bk-cursor-dot {
    width: 6px; height: 6px;
    background: #E8612D;
}
body.cursor--menu #bk-cursor-ring {
    width: 44px; height: 44px;
    border-color: transparent;
    background: rgba(232,97,45,0.22);
    opacity: 1;
    border-width: 0;
}
body.cursor--partner #bk-cursor-dot { width: 8px; height: 8px; background: #fff; }
body.cursor--partner #bk-cursor-ring { width: 70px; height: 70px; border-color: #fff; background: rgba(255,255,255,0.08); }
body.cursor--slider #bk-cursor-dot { width: 12px; height: 12px; background: #E8612D; }
body.cursor--slider #bk-cursor-ring { width: 60px; height: 60px; border-color: rgba(232,97,45,0.5); background: rgba(232,97,45,0.07); }
body.cursor--text #bk-cursor-dot { width: 3px; height: 26px; border-radius: 2px; background: #E8612D; }
body.cursor--text #bk-cursor-ring { width: 0; height: 0; opacity: 0; }
body.cursor--img #bk-cursor-dot { width: 14px; height: 14px; background: #fff; border-radius: 50%; }
body.cursor--img #bk-cursor-ring { width: 80px; height: 80px; border-color: rgba(255,255,255,0.6); background: rgba(255,255,255,0.04); }
/* ===== state: over orange background ===== */
body.cursor--on-orange #bk-cursor-dot {
    width: 12px; height: 12px;
    background: #1b1b1b;
    border: 2px solid #fff;
    border-radius: 50%;
}
body.cursor--on-orange #bk-cursor-ring {
    width: 44px; height: 44px;
    border: 2px solid rgba(255,255,255,0.8);
    background: rgba(255,255,255,0.12);
    opacity: 1;
}
/* ===== TECH PARTICLE CANVAS ===== */
#bk-tech-canvas {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: 99997;
}
.mkd-top-bar {
    padding-bottom: 30px !important;
    margin-bottom: -30px !important;
    position: relative !important;
    z-index: 100 !important;
}
header.mkd-page-header .mkd-position-right {
    right: 30px !important;
}
/* ===== TABS ===== */
.mkd-tabs .mkd-tabs-nav li.active > a {
    color: #E8612D !important;
    border-bottom: 2px solid #E8612D;
}
/* ===== ACCORDION ===== */
.mkd-accordion-title {
    cursor: pointer;
}
.mkd-accordion-title.mkd-accordion-title-active .mkd-tab-title {
    color: #E8612D;
}
<?php include resource_path('views/partials/auth-styles.php'); ?>
</style>
</head>

<body class="page-template page-template-full-width page-template-full-width-php page page-id-113 theme-baumeister mkd-core-1.2.3 woocommerce-no-js baumeister-ver-1.6 mkd-grid-1300 mkd-disable-global-padding-bottom mkd-sticky-header-on-scroll-down-up mkd-dropdown-animate-height mkd-header-box mkd-menu-area-shadow-disable mkd-menu-area-in-grid-shadow-disable mkd-menu-area-border-disable mkd-menu-area-in-grid-border-disable mkd-logo-area-border-disable mkd-logo-area-in-grid-border-disable mkd-header-vertical-shadow-disable mkd-header-vertical-border-disable mkd-side-menu-slide-from-right mkd-woocommerce-columns-3 mkd-woo-normal-space mkd-woo-pl-info-below-image mkd-woo-single-thumb-below-image mkd-woo-single-has-pretty-photo mkd-default-mobile-header mkd-sticky-up-mobile-header mkd-header-top-enabled mkd-search-covers-header wpb-js-composer js-comp-ver-6.10.0 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
	<!-- ===== SIDE MENU ===== -->
	<?php include resource_path('views/partials/side-menu.php'); ?>

	<!-- ===== WRAPPER ===== -->
	<div class="mkd-wrapper">
		<div class="mkd-wrapper-inner">

			<!-- ===== TOP BAR ===== -->
						<div class="mkd-top-bar-background"></div>
<div class="mkd-top-bar">
				
				<div class="mkd-grid">
				
				<div class="mkd-vertical-align-containers">
					<div class="mkd-position-left">
						<div class="mkd-position-left-inner">
							<a class="mkd-icon-widget-holder" href="https://www.google.com/maps/place/105+Tr%E1%BA%A7n+Th%E1%BB%8B+N%C6%A1i,+Qu%E1%BA%ADn+12,+TP.HCM"
								target="_blank" style="margin: 0 17px 0 0">
								<span class="mkd-icon-text mkd-no-icon fa fa-map-marker      mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">105 Trần Thị Nơi, Q.8, TP.HCM</span></span> </a>
							<div class="widget mkd-separator-widget">
								<div class="mkd-separator-holder clearfix  mkd-separator-center mkd-separator-normal">
									<div class="mkd-separator" style="border-color: rgba(255,255,255,0.25);border-style: solid;width: 1px;border-bottom-width: 20px"></div>
								</div>
							</div>
							<a class="mkd-icon-widget-holder" href="tel:+84903646288"
								target="_self" style="margin: 0 17px">
								<span class="mkd-icon-text mkd-no-icon fa fa-phone      mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">0903 646 288</span></span> </a>
							<div class="widget mkd-separator-widget">
								<div class="mkd-separator-holder clearfix  mkd-separator-center mkd-separator-normal">
									<div class="mkd-separator" style="border-color: rgba(255,255,255,0.25);border-style: solid;width: 1px;border-bottom-width: 20px"></div>
								</div>
							</div>
							<a class="mkd-icon-widget-holder" href="mailto:info@bachkhoadigital.com" target="_self" style="margin: 0 0 0 17px">
								<span class="mkd-icon-text mkd-no-icon fa fa-envelope-o      mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">info@bachkhoadigital.com</span></span> </a>
						</div>
					</div>
					<div class="mkd-position-right">
						<div class="mkd-position-right-inner">
							<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px" href="https://twitter.com/QodeInteractive" target="_blank">
								<span class="mkd-social-icon-widget fa fa-twitter     "></span> </a>

							<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: 0 15px;" href="https://www.facebook.com/QodeInteractive/" target="_blank">
								<span class="mkd-social-icon-widget fa fa-facebook     "></span> </a>

							<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: 0 15px 0 0;" href="https://plus.google.com/discover" target="_blank">
								<span class="mkd-social-icon-widget fa fa-google-plus     "></span> </a>

							<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: 0 15px 0 0;" href="https://www.linkedin.com/company/qode-themes/" target="_blank">
								<span class="mkd-social-icon-widget fa fa-linkedin     "></span> </a>
							<div class="widget mkd-separator-widget">
								<div class="mkd-separator-holder clearfix  mkd-separator-center mkd-separator-normal">
									<div class="mkd-separator" style="border-color: rgba(255,255,255,0.25);border-style: solid;width: 1px;border-bottom-width: 20px"></div>
								</div>
							</div>
<div class="widget mkd-separator-widget"><div class="mkd-separator-holder clearfix  mkd-separator-center mkd-separator-normal">
	<div class="mkd-separator" style="border-color: rgba(255,255,255,0);border-style: solid;width: 15px"></div>
</div>
</div><div id="media_image-5" class="widget widget_media_image mkd-top-bar-widget"><img width="49" height="25" src="/images/map_banner.png" class="image wp-image-1063  attachment-full size-full" alt="a" loading="lazy" style="max-width: 100%; height: auto;" /></div>
						</div>
					</div>
				</div>
				
				</div>
				
			</div>

			<!-- ===== HEADER ===== -->
			<header class="mkd-page-header">
				
				<div class="mkd-grid">
				
				<div class="mkd-menu-area mkd-menu-center">
					<div class="mkd-vertical-align-containers">
						<div class="mkd-position-left">
							<div class="mkd-position-left-inner">
								<div class="mkd-logo-wrapper" style="display:none!important"></div>
								<a href="/" style="display:inline-flex;align-items:center;height:100%">
									<img src="/images/logo.jpg" alt="Bach Khoa Digital" class="bkd-logo">
								</a>
							</div>
						</div>
						<div class="mkd-position-center">
							<div class="mkd-position-center-inner">

								<nav class="mkd-main-menu mkd-drop-down mkd-default-nav">
									<ul id="menu-main-menu-navigation" class="clearfix">
										<li id="nav-menu-item-379" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/about-us" class=""><span class="item_outer"><span class="item_text">Giới thiệu</span></span></a></li>
										<li id="nav-menu-item-383" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="/shop" class=""><span class="item_outer"><span class="item_text">Cửa Hàng</span><i class="mkd-menu-arrow fa fa-angle-down"></i></span></a>
<div class="second">
<div class="inner">
<ul>
<li id="nav-menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="/projects" class=""><span class="item_outer"><span class="item_text">Dự án</span></span></a></li>
</ul>
</div>
</div>
</li>
										<li id="nav-menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/blog" class=""><span class="item_outer"><span class="item_text">Tin Tức</span></span></a></li>
										<li id="nav-menu-item-381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=""><span class="item_outer"><span class="item_text">Tài Nguyên</span><i class="mkd-menu-arrow fa fa-angle-down"></i></span></a>
											<div class="second">
												<div class="inner">
													<ul>
														<li id="nav-menu-item-2364" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Standard</span></span></a>
															<ul>
																<li id="nav-menu-item-2367" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/standard-in-grid/" class=""><span class="item_outer"><span class="item_text">In Grid</span></span></a></li>
																<li id="nav-menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/standard-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span></span></a></li>
															</ul>
														</li>
														<li id="nav-menu-item-2404" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Gallery</span></span></a>
															<ul>
																<li id="nav-menu-item-2418" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-in-grid/" class=""><span class="item_outer"><span class="item_text">In Grid</span></span></a></li>
																<li id="nav-menu-item-2414" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-joined-in-grid/" class=""><span class="item_outer"><span class="item_text">Joined/In Grid</span></span></a></li>
																<li id="nav-menu-item-2417" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span></span></a></li>
																<li id="nav-menu-item-2415" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-joined-wide/" class=""><span class="item_outer"><span class="item_text">Joined/Wide</span></span></a></li>
															</ul>
														</li>
														<li id="nav-menu-item-2423" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Masonry</span></span></a>
															<ul>
																<li id="nav-menu-item-2422" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-in-grid/" class=""><span class="item_outer"><span class="item_text">In Grid</span></span></a></li>
																<li id="nav-menu-item-2803" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-joined-in-grid/" class=""><span class="item_outer"><span class="item_text">Joined/In Grid</span></span></a></li>
																<li id="nav-menu-item-2421" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span></span></a></li>
																<li id="nav-menu-item-2802" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-joined-wide/" class=""><span class="item_outer"><span class="item_text">Joined/Wide</span></span></a></li>
															</ul>
														</li>
														<li id="nav-menu-item-2405" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Portfolio Layouts</span></span></a>
															<ul>
																<li id="nav-menu-item-2407" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/three-columns/" class=""><span class="item_outer"><span class="item_text">3 Columns</span></span></a></li>
																<li id="nav-menu-item-2406" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/three-columns-wide/" class=""><span class="item_outer"><span class="item_text">3 Columns Wide</span></span></a></li>
																<li id="nav-menu-item-2412" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/four-columns/" class=""><span class="item_outer"><span class="item_text">4 Columns</span></span></a></li>
																<li id="nav-menu-item-2411" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/four-columns-wide/" class=""><span class="item_outer"><span class="item_text">4 Columns Wide</span></span></a></li>
																<li id="nav-menu-item-2419" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/five-columns-wide/" class=""><span class="item_outer"><span class="item_text">5 Columns Wide</span></span></a></li>
															</ul>
														</li>
														<li id="nav-menu-item-2541" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Portfolio Single</span></span></a>
															<ul>
																<li id="nav-menu-item-2558" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/innovative-project/" class=""><span class="item_outer"><span class="item_text">Small Images</span></span></a></li>
																<li id="nav-menu-item-2560" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/construction-sites/" class=""><span class="item_outer"><span class="item_text">Small Slider</span></span></a></li>
																<li id="nav-menu-item-2554" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/new-structures/" class=""><span class="item_outer"><span class="item_text">Big Images</span></span></a></li>
																<li id="nav-menu-item-2555" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/heavy-equipment/" class=""><span class="item_outer"><span class="item_text">Big Slider</span></span></a></li>
																<li id="nav-menu-item-2556" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/frame-construction/" class=""><span class="item_outer"><span class="item_text">Gallery</span></span></a></li>
																<li id="nav-menu-item-2557" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/wood-flooring/" class=""><span class="item_outer"><span class="item_text">Masonry</span></span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li id="nav-menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/faq" class=""><span class="item_outer"><span class="item_text">FAQ</span></span></a></li>
										<li id="nav-menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us" class=""><span class="item_outer"><span class="item_text">Liên Hệ</span></span></a></li>
									</ul>
								</nav>

							</div>
						</div>
						<div class="mkd-position-right">
							<div class="mkd-position-right-inner">
								<a class="mkd-search-opener mkd-icon-has-hover" href="javascript:void(0)">
									<span class="mkd-search-opener-wrapper">
										<i class="mkd-icon-font-awesome fa fa-search "></i> </span>
								</a>
								<div class="mkd-shopping-cart-holder" style="padding: 0 24px 0 10px">
									<div class="mkd-shopping-cart-inner">
										<a itemprop="url" class="mkd-header-cart" href="https://baumeister.qodeinteractive.com/cart/">
											<span class="mkd-cart-icon fa fa-shopping-cart">
												<span class="mkd-cart-number">0</span>
											</span>
										</a>
										<div class="mkd-shopping-cart-dropdown">
											<ul>
												<li class="mkd-empty-cart">No products in the cart.</li>
											</ul>
										</div>
									</div>
								</div>
								<a class="mkd-side-menu-button-opener mkd-icon-has-hover" href="javascript:void(0)">
									<span class="mkd-side-menu-icon">
										<i class="mkd-icon-font-awesome fa fa-bars "></i> </span>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				</div>

				<!-- ===== STICKY HEADER ===== -->
				<div class="mkd-sticky-header">
				<div class="mkd-sticky-holder mkd-menu-center">
					<div class="mkd-grid">
						<div class="mkd-vertical-align-containers">
							<div class="mkd-position-left">
								<div class="mkd-position-left-inner">
									<div class="mkd-logo-wrapper">
										<a href="/" style="height: 25px;">
											<img class="mkd-normal-logo" src="/images/logo.jpg" alt="Bach Khoa Digital">
											<img class="mkd-dark-logo" src="/images/logo.jpg" alt="Bach Khoa Digital">
											<img class="mkd-light-logo" src="/images/logo.jpg" alt="Bach Khoa Digital">
										</a>
									</div>
								</div>
							</div>
							<div class="mkd-position-center">
								<div class="mkd-position-center-inner">

<nav class="mkd-main-menu mkd-drop-down mkd-sticky-nav">
	<ul id="menu-main-menu-navigation-1" class="clearfix">
		<li id="sticky-nav-menu-item-379" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/about-us" class=""><span class="item_outer"><span class="item_text">Giới thiệu</span><span class="plus"></span></span></a></li>
		<li id="sticky-nav-menu-item-383" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="/shop" class=""><span class="item_outer"><span class="item_text">Cửa Hàng</span><span class="plus"></span><i class="mkd-menu-arrow fa fa-angle-down"></i></span></a>
<div class="second">
<div class="inner">
<ul>
<li id="sticky-nav-menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="/projects" class=""><span class="item_outer"><span class="item_text">Dự án</span><span class="plus"></span></span></a></li>
</ul>
</div>
</div>
</li>
		<li id="sticky-nav-menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/blog" class=""><span class="item_outer"><span class="item_text">Tin Tức</span><span class="plus"></span></span></a></li>
		<li id="sticky-nav-menu-item-381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="#" class=""><span class="item_outer"><span class="item_text">Tài Nguyên</span><span class="plus"></span><i class="mkd-menu-arrow fa fa-angle-down"></i></span></a>
			<div class="second"><div class="inner"><ul>
				<li id="sticky-nav-menu-item-2364" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Standard</span><span class="plus"></span></span></a>
					<ul>
						<li id="sticky-nav-menu-item-2367" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/standard-in-grid/" class=""><span class="item_outer"><span class="item_text">In Grid</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2366" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/standard-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span><span class="plus"></span></span></a></li>
					</ul>
				</li>
				<li id="sticky-nav-menu-item-2404" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Gallery</span><span class="plus"></span></span></a>
					<ul>
						<li id="sticky-nav-menu-item-2418" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-in-grid/" class=""><span class="item_outer"><span class="item_text">In Grid</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2414" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-joined-in-grid/" class=""><span class="item_outer"><span class="item_text">Joined/In Grid</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2417" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2415" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/gallery-joined-wide/" class=""><span class="item_outer"><span class="item_text">Joined/Wide</span><span class="plus"></span></span></a></li>
					</ul>
				</li>
				<li id="sticky-nav-menu-item-2423" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Masonry</span><span class="plus"></span></span></a>
					<ul>
						<li id="sticky-nav-menu-item-2422" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-in-grid/" class=""><span class="item_outer"><span class="item_text">In Grid</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2803" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-joined-in-grid/" class=""><span class="item_outer"><span class="item_text">Joined/In Grid</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2421" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-wide/" class=""><span class="item_outer"><span class="item_text">Wide</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2802" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/masonry-joined-wide/" class=""><span class="item_outer"><span class="item_text">Joined/Wide</span><span class="plus"></span></span></a></li>
					</ul>
				</li>
				<li id="sticky-nav-menu-item-2405" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Portfolio Layouts</span><span class="plus"></span></span></a>
					<ul>
						<li id="sticky-nav-menu-item-2407" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/three-columns/" class=""><span class="item_outer"><span class="item_text">3 Columns</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2406" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/three-columns-wide/" class=""><span class="item_outer"><span class="item_text">3 Columns Wide</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2412" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/four-columns/" class=""><span class="item_outer"><span class="item_text">4 Columns</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2411" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/four-columns-wide/" class=""><span class="item_outer"><span class="item_text">4 Columns Wide</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2419" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="https://baumeister.qodeinteractive.com/portfolio/five-columns-wide/" class=""><span class="item_outer"><span class="item_text">5 Columns Wide</span><span class="plus"></span></span></a></li>
					</ul>
				</li>
				<li id="sticky-nav-menu-item-2541" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub"><a href="#" class=""><span class="item_outer"><span class="item_text">Portfolio Single</span><span class="plus"></span></span></a>
					<ul>
						<li id="sticky-nav-menu-item-2558" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/innovative-project/" class=""><span class="item_outer"><span class="item_text">Small Images</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2560" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/construction-sites/" class=""><span class="item_outer"><span class="item_text">Small Slider</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2554" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/new-structures/" class=""><span class="item_outer"><span class="item_text">Big Images</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2555" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/heavy-equipment/" class=""><span class="item_outer"><span class="item_text">Big Slider</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2556" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/frame-construction/" class=""><span class="item_outer"><span class="item_text">Gallery</span><span class="plus"></span></span></a></li>
						<li id="sticky-nav-menu-item-2557" class="menu-item menu-item-type-post_type menu-item-object-portfolio-item "><a href="https://baumeister.qodeinteractive.com/portfolio-item/wood-flooring/" class=""><span class="item_outer"><span class="item_text">Masonry</span><span class="plus"></span></span></a></li>
					</ul>
				</li>
			</ul></div></div>
		</li>
		<li id="sticky-nav-menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/faq" class=""><span class="item_outer"><span class="item_text">FAQ</span><span class="plus"></span></span></a></li>
		<li id="sticky-nav-menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us" class=""><span class="item_outer"><span class="item_text">Liên Hệ</span><span class="plus"></span></span></a></li>
	</ul>
</nav>

								</div>
							</div>
							<div class="mkd-position-right">
								<div class="mkd-position-right-inner">
									<a style="margin: 0 24px 4px 0;" class="mkd-search-opener mkd-icon-has-hover" href="javascript:void(0)">
										<span class="mkd-search-opener-wrapper">
											<i class="mkd-icon-font-awesome fa fa-search "></i> </span>
									</a>
									<a class="mkd-side-menu-button-opener mkd-icon-has-hover" href="javascript:void(0)">
										<span class="mkd-side-menu-icon">
											<i class="mkd-icon-font-awesome fa fa-bars "></i> </span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

				<!-- ===== SEARCH COVER ===== -->
				<form action="/" class="mkd-search-cover" method="get">
					<div class="mkd-container">
						<div class="mkd-container-inner clearfix">
							<div class="mkd-form-holder-outer">
								<div class="mkd-form-holder">
									<div class="mkd-form-holder-inner">
										<input type="text" placeholder="Search" name="s" class="mkd_search_field" autocomplete="off" />
										<div class="mkd-search-close">
											<a href="#">
												<i class="mkd-icon-font-awesome fa fa-times "></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</header>

			<!-- ===== MOBILE HEADER ===== -->
			<header class="mkd-mobile-header">
				<div class="mkd-mobile-header-inner">
					<div class="mkd-mobile-header-holder">
						<div class="mkd-grid">
							<div class="mkd-vertical-align-containers">
								<div class="mkd-vertical-align-containers">
									<div class="mkd-mobile-menu-opener">
										<a href="javascript:void(0)">
											<span class="mkd-mobile-menu-icon">
												<span aria-hidden="true" class="mkd-icon-font-elegant icon_menu "></span> </span>
										</a>
									</div>
									<div class="mkd-position-center">
										<div class="mkd-position-center-inner">
											<div class="mkd-mobile-logo-wrapper" style="display:none!important"></div>
											<a href="/" style="display:inline-flex;align-items:center;height:100%">
												<img src="/images/logo.jpg" alt="Bach Khoa Digital" class="bkd-mobile-logo">
											</a>
										</div>
									</div>
									<div class="mkd-position-right">
										<div class="mkd-position-right-inner">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<nav class="mkd-mobile-nav">
						<div class="mkd-grid">
							<ul id="menu-main-menu-navigation-2" class="">
								<li id="mobile-menu-item-379" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/about-us" class=""><span>Giới thiệu</span></a></li>
								<li id="mobile-menu-item-383" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has_sub"><a href="/shop" class=""><span>Cửa Hàng</span></a><span class="mobile_arrow"><i class="mkd-sub-arrow fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
									<ul class="sub_menu">
										<li id="mobile-menu-item-553" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/projects" class=""><span>Dự án</span></a></li>
									</ul>
								</li>
								<li id="mobile-menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/blog" class=""><span>Tin Tức</span></a></li>
								<li id="mobile-menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/faq" class=""><span>FAQ</span></a></li>
								<li id="mobile-menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/contact-us" class=""><span>Liên Hệ</span></a></li>
							</ul>
						</div>
					</nav>

				</div>
			</header>

			<!-- ===== BACK TO TOP ===== -->
			<a id='mkd-back-to-top' href='#'>
                <span class="mkd-icon-stack">
                     <i class="mkd-icon-font-awesome fa fa-long-arrow-up "></i>
                </span>
			</a>

			<!-- ===== MAIN CONTENT ===== -->
			<div class="mkd-content" style="margin-top: -80px">
				<div class="mkd-content-inner">

<!-- ===== HERO / TITLE ===== -->
<div class="mkd-title-holder mkd-centered-type mkd-preload-background mkd-has-bg-image mkd-bg-parallax" style="height: 595px;background-image:url(https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/p5h-faq-1.jpg);" data-height="515">
	<div class="mkd-title-image">
		<img itemprop="image" src="https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/p5h-faq-1.jpg" alt="FAQ BachKhoa Digital" />
	</div>
	<div class="mkd-title-wrapper" style="height: 515px;padding-top: 80px">
		<div class="mkd-title-inner">
			<div class="mkd-grid">
				<h1 class="mkd-page-title entry-title" style="color: #1b1b1b">Câu Hỏi Thường Gặp</h1>
				<p class="mkd-page-subtitle" style="color: #8b8b8b;padding: 0 16%">Tổng hợp những câu hỏi phổ biến về dịch vụ hạ tầng mạng, camera an ninh, tổng đài IP và các giải pháp CNTT của BachKhoa Digital.</p>
			</div>
		</div>
	</div>
</div>

<!-- ===== FAQ CONTENT ===== -->
<div class="mkd-full-width">
	<div class="mkd-full-width-inner">
		<div class="mkd-grid-row">
			<div class="mkd-page-content-holder mkd-grid-col-12">
				<section class="wpb-content-wrapper">

<!-- Section 1: Image + Tabs -->
<div class="mkd-row-grid-section-wrapper" style="background-color:#ffffff">
<div class="mkd-row-grid-section">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1512050565683">
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="mkd-single-image-holder">
					<div class="mkd-si-inner" style="background-image: url(https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/p5-faq.jpg)">
						<img width="1026" height="800" src="https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/p5-faq.jpg" class="attachment-full size-full" alt="BachKhoa Digital FAQ" loading="lazy" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="mkd-elements-holder mkd-one-column mkd-responsive-mode-768">
					<div class="mkd-eh-item" data-item-class="mkd-eh-custom-6954" data-1024-1280="112px 0 172px 0" data-768-1024="27px 0 73px 0" data-680-768="27px 0 73px 0" data-680="62px 0 72px 0">
						<div class="mkd-eh-item-inner">
							<div class="mkd-eh-item-content mkd-eh-custom-6954" style="padding: 112px 0 172px 0">
								<div class="mkd-tabs mkd-tabs-standard">
									<ul class="mkd-tabs-nav clearfix">
										<li><a href="#tab-thong-tin">Thông Tin Chung</a></li>
										<li><a href="#tab-dich-vu">Dịch Vụ</a></li>
										<li><a href="#tab-ho-tro">Hỗ Trợ</a></li>
									</ul>
									<div class="mkd-tab-container" id="tab-thong-tin">
										<div class="wpb_text_column wpb_content_element">
											<div class="wpb_wrapper">
												<p>BachKhoa Digital là đơn vị chuyên cung cấp giải pháp công nghệ thông tin toàn diện cho doanh nghiệp. Chúng tôi có đội ngũ kỹ sư giàu kinh nghiệm, cam kết mang đến dịch vụ chất lượng cao với chi phí hợp lý. Với hơn nhiều năm hoạt động, chúng tôi đã phục vụ hàng trăm khách hàng trên khắp cả nước.</p>
											</div>
										</div>
									</div>
									<div class="mkd-tab-container" id="tab-dich-vu">
										<div class="wpb_text_column wpb_content_element">
											<div class="wpb_wrapper">
												<p>Chúng tôi cung cấp đa dạng dịch vụ bao gồm: thiết kế và thi công hạ tầng mạng doanh nghiệp, lắp đặt hệ thống camera an ninh giám sát, triển khai tổng đài điện thoại IP, và các dịch vụ IT chuyên nghiệp khác. Mỗi giải pháp đều được tùy chỉnh theo nhu cầu cụ thể của từng khách hàng.</p>
											</div>
										</div>
									</div>
									<div class="mkd-tab-container" id="tab-ho-tro">
										<div class="wpb_text_column wpb_content_element">
											<div class="wpb_wrapper">
												<p>BachKhoa Digital cung cấp dịch vụ hỗ trợ kỹ thuật 24/7 cho tất cả khách hàng. Đội ngũ kỹ thuật viên luôn sẵn sàng xử lý sự cố nhanh chóng, đảm bảo hệ thống hoạt động ổn định. Chúng tôi cũng cung cấp dịch vụ bảo trì định kỳ và nâng cấp hệ thống theo yêu cầu.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<!-- Section 2: Accordion + Section Title -->
<div class="mkd-row-grid-section-wrapper" style="background-color:#ffffff">
<div class="mkd-row-grid-section">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1512143535385">
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-12">
		<div class="vc_column-inner vc_custom_1511441261259">
			<div class="wpb_wrapper">
				<div class="mkd-accordion-holder mkd-ac-default mkd-accordion mkd-ac-boxed clearfix">
					<h5 class="mkd-accordion-title">
						<span class="mkd-tab-title">Dịch vụ hạ tầng mạng bao gồm những gì?</span>
					</h5>
					<div class="mkd-accordion-content">
						<div class="mkd-accordion-content-inner">
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">
									<p>Dịch vụ hạ tầng mạng của BachKhoa Digital bao gồm: tư vấn thiết kế hệ thống mạng LAN/WAN, thi công cáp mạng có cấu trúc, cung cấp và cấu hình thiết bị mạng (Switch, Router, Firewall, Access Point), triển khai hệ thống WiFi doanh nghiệp, và bảo trì hệ thống định kỳ.</p>
								</div>
							</div>
						</div>
					</div>
					<h5 class="mkd-accordion-title">
						<span class="mkd-tab-title">Camera an ninh có những loại nào?</span>
					</h5>
					<div class="mkd-accordion-content">
						<div class="mkd-accordion-content-inner">
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">
									<p>Chúng tôi cung cấp đa dạng các loại camera: camera IP, camera analog HD, camera WiFi, camera PTZ, camera nhận diện khuôn mặt và camera chuyên dụng cho từng môi trường cụ thể. Hệ thống được tích hợp đầu ghi hình và phần mềm quản lý chuyên nghiệp, hỗ trợ xem từ xa qua điện thoại.</p>
								</div>
							</div>
						</div>
					</div>
					<h5 class="mkd-accordion-title">
						<span class="mkd-tab-title">Tổng đài IP hoạt động như thế nào?</span>
					</h5>
					<div class="mkd-accordion-content">
						<div class="mkd-accordion-content-inner">
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">
									<p>Tổng đài IP (IP PBX) sử dụng giao thức Internet để truyền tải cuộc gọi, giúp tiết kiệm chi phí liên lạc đáng kể. Hệ thống hỗ trợ nhiều tính năng hiện đại như: trả lời tự động IVR, ghi âm cuộc gọi, chuyển hướng cuộc gọi thông minh, hội nghị truyền hình, và tích hợp CRM.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0 vc_col-xs-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="mkd-elements-holder mkd-one-column mkd-responsive-mode-768">
					<div class="mkd-eh-item" data-item-class="mkd-eh-custom-6342" data-1024-1280="16px 0 50px 5.9%" data-768-1024="83px 0 0 0" data-680-768="83px 0 0 0" data-680="85px 0 0 0">
						<div class="mkd-eh-item-inner">
							<div class="mkd-eh-item-content mkd-eh-custom-6342" style="padding: 16px 0 71px 5.9%">
								<div class="mkd-section-title-holder mkd-st-standard mkd-st-title-left mkd-st-normal-space">
									<div class="mkd-st-inner">
										<h3 class="mkd-st-title" style="color: #1b1b1b">
											Mục tiêu và chiến lược<br /> phát triển bền vững
										</h3>
										<p class="mkd-st-text" style="line-height: 30px;margin-top: 34px">
											BachKhoa Digital cam kết mang đến giải pháp công nghệ tối ưu, giúp doanh nghiệp nâng cao hiệu quả hoạt động và bảo mật thông tin. Chúng tôi không ngừng cập nhật công nghệ mới, đào tạo đội ngũ chuyên môn cao, và xây dựng mối quan hệ đối tác lâu dài với khách hàng. Sứ mệnh của chúng tôi là trở thành đơn vị hàng đầu trong lĩnh vực giải pháp CNTT tại Việt Nam, đồng hành cùng doanh nghiệp trong kỷ nguyên chuyển đổi số.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

				</section>
			</div>
		</div>
	</div>
</div>

</div> <!-- close div.mkd-content-inner -->
</div> <!-- close div.mkd-content -->

			<!-- ===== FOOTER ===== -->
			<footer class="mkd-page-footer">
				<div class="mkd-footer-top-holder">
					<div class="mkd-footer-top-inner mkd-grid">
						<div class="mkd-grid-row mkd-footer-top-alignment-left">
							<div class="mkd-column-content mkd-grid-col-3">
								<div id="media_image-2" class="widget mkd-footer-column-1 widget_media_image"><a href="/"><img width="217" height="38" src="/images/logo.jpg" class="image attachment-full size-full" alt="BachKhoa Digital" loading="lazy" style="max-width: 100%; height: auto;" /></a></div>
								<div id="text-3" class="widget mkd-footer-column-1 widget_text">
									<div class="textwidget">
										<p>BachKhoa Digital cung cấp giải pháp hạ tầng mạng, camera an ninh, tổng đài điện thoại và dịch vụ IT chuyên nghiệp cho doanh nghiệp.</p>
									</div>
								</div>
								<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 15px;margin: 8px 0 0;" href="#" target="_blank">
									<span class="mkd-social-icon-widget fa fa-facebook"></span> </a>

								<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 15px;margin: 8px 20px 0;" href="#" target="_blank">
									<span class="mkd-social-icon-widget fa fa-youtube"></span> </a>

								<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 15px;margin: 8px 0 0;" href="#" target="_blank">
									<span class="mkd-social-icon-widget fa fa-linkedin"></span> </a>
							</div>
							<div class="mkd-column-content mkd-grid-col-3">
								<div id="text-4" class="widget mkd-footer-column-2 widget_text">
									<div class="mkd-widget-title-holder">
										<h4 class="mkd-widget-title">Dịch Vụ Của Chúng Tôi</h4>
									</div>
									<div class="textwidget">
										<p>Giải pháp công nghệ toàn diện cho doanh nghiệp.</p>
									</div>
								</div>
								<a class="mkd-icon-widget-holder" href="#" target="_self" style="margin: -16px 0 0 0">
									<span class="mkd-icon-text mkd-no-icon fa fa-server mkd-icon-has-hover" style="color: #fff;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner">Hạ tầng mạng doanh nghiệp</span></span> </a>
								<div class="widget mkd-separator-widget">
									<div class="mkd-separator-holder clearfix mkd-separator-left mkd-separator-normal">
										<div class="mkd-separator" style="border-color: #fff;border-style: solid;width: 250px;border-bottom-width: 1px;margin-top: 10px;margin-bottom: 14px"></div>
									</div>
								</div>
								<a class="mkd-icon-widget-holder" href="#" target="_self">
									<span class="mkd-icon-text mkd-no-icon fa fa-video-camera mkd-icon-has-hover" style="color: #fff;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner">Camera an ninh giám sát</span></span> </a>
								<div class="widget mkd-separator-widget">
									<div class="mkd-separator-holder clearfix mkd-separator-left mkd-separator-normal">
										<div class="mkd-separator" style="border-color: #fff;border-style: solid;width: 250px;border-bottom-width: 1px;margin-top: 17px;margin-bottom: 14px"></div>
									</div>
								</div>
								<a class="mkd-icon-widget-holder" href="#" target="_self">
									<span class="mkd-icon-text mkd-no-icon fa fa-phone mkd-icon-has-hover" style="color: #fff;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner">Tổng đài điện thoại IP</span></span> </a>
							</div>
							<div class="mkd-column-content mkd-grid-col-3">
								<div id="text-5" class="widget mkd-footer-column-3 widget_text">
									<div class="mkd-widget-title-holder">
										<h4 class="mkd-widget-title">Thông Tin Liên Hệ</h4>
									</div>
									<div class="textwidget"></div>
								</div>
								<a class="mkd-icon-widget-holder" href="#" target="_blank" style="margin: 0 64px 0 0">
									<span class="mkd-icon-text mkd-no-icon fa fa-map-marker mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">105 Trần Thị Nơi, Q.8,</span></span> </a>

								<a class="mkd-icon-widget-holder" href="#" target="_blank" style="margin: 0 0 0 20px">
									<span class="mkd-icon-text mkd-no-icon" style="font-size: 15px"><span class="mkd-icon-text-inner" style="color: #fff">TP. Hồ Chí Minh, Việt Nam</span></span> </a>

								<a class="mkd-icon-widget-holder" href="tel:+84903646288" target="_self" style="margin: 30px 75px 0 0">
									<span class="mkd-icon-text mkd-no-icon fa fa-phone mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">0903 646 288</span></span> </a>

								<a class="mkd-icon-widget-holder" href="#" target="_self" style="margin: 0 0 24px 20px">
									<span class="mkd-icon-text mkd-no-icon" style="font-size: 15px"><span class="mkd-icon-text-inner" style="color: #fff">T2-T7, 8:00 - 17:30</span></span> </a>

								<a class="mkd-icon-widget-holder" href="mailto:info@bachkhoadigital.com" target="_self" style="margin: 0 63px 0 0">
									<span class="mkd-icon-text mkd-no-icon fa fa-envelope-o mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">info@bachkhoadigital.com</span></span> </a>
							</div>
							<div class="mkd-column-content mkd-grid-col-3">
								<div id="text-6" class="widget mkd-footer-column-4 widget_text">
									<div class="mkd-widget-title-holder">
										<h4 class="mkd-widget-title">Văn Phòng</h4>
									</div>
									<div class="textwidget">
										<p>Trụ sở chính tại TP. Hồ Chí Minh, phục vụ khách hàng trên toàn quốc.</p>
									</div>
								</div>
								<div id="media_image-3" class="widget mkd-footer-column-4 widget_media_image"><img width="270" height="142" src="/images/map_footter.png" class="image attachment-full size-full" alt="BachKhoa Digital Office" loading="lazy" style="max-width: 100%; height: auto; opacity: 0.7;" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mkd-footer-bottom-holder">
					<div class="mkd-footer-bottom-inner mkd-grid">
						<div class="mkd-grid-row ">
							<div class="mkd-grid-col-12">
								<div id="text-11" class="widget mkd-footer-bottom-column-1 widget_text">
									<div class="textwidget">
										<p>&copy; 2024 BachKhoa Digital. All Rights Reserved.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div> <!-- close div.mkd-wrapper-inner  -->
	</div> <!-- close div.mkd-wrapper -->

	<!-- ===== SCRIPTS ===== -->
	<link rel='stylesheet' id='rs-plugin-settings-css' href='https://baumeister.qodeinteractive.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.5' type='text/css' media='all' />
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.6.4' id='swv-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.6.4' id='contact-form-7-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/jquery.appear.js?ver=6.0.11' id='appear-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/modernizr.min.js?ver=6.0.11' id='modernizr-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2' id='hoverIntent-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/jquery.plugin.js?ver=6.0.11' id='jquery-plugin-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/owl.carousel.min.js?ver=6.0.11' id='owl-carousel-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/jquery.waypoints.min.js?ver=6.0.11' id='waypoints-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/Chart.min.js?ver=6.0.11' id='chart-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/fluidvids.min.js?ver=6.0.11' id='fluidvids-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js?ver=6.10.0' id='prettyphoto-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/perfect-scrollbar.jquery.min.js?ver=6.0.11' id='perfect-scrollbar-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/ScrollToPlugin.min.js?ver=6.0.11' id='ScrollToPlugin-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/parallax.min.js?ver=6.0.11' id='parallax-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/jquery.waitforimages.js?ver=6.0.11' id='waitforimages-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/jquery.easing.1.3.js?ver=6.0.11' id='jquery-easing-1.3-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=6.10.0' id='isotope-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules/plugins/packery-mode.pkgd.min.js?ver=6.0.11' id='packery-js'></script>
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js' id='easypiechart-js' crossorigin='anonymous'></script>
	<script type='text/javascript' id='baumeister-mikado-modules-js-extra'>
	var mkdGlobalVars = {"vars":{"mkdAddForAdminBar":0,"mkdElementAppearAmount":-100,"mkdStickyHeaderHeight":70,"mkdStickyHeaderTransparencyHeight":70,"mkdTopBarHeight":60,"mkdLogoAreaHeight":0,"mkdMenuAreaHeight":160,"mkdMobileHeaderHeight":70}};
	</script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules.min.js?ver=6.0.11' id='baumeister-mikado-modules-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.10.0' id='wpb_composer_front_js-js'></script>

<!-- Force xóa toàn bộ màu vàng #fdb913/#e7a022 bằng JS sau khi tất cả CSS/JS theme đã load -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.mkd-btn-solid').forEach(function(btn) {
        btn.style.setProperty('background-color', '#E8612D', 'important');
        btn.style.setProperty('background-image', 'linear-gradient(135deg, #E8612D 0%, #C0392B 100%)', 'important');
        btn.style.setProperty('border-color', '#E8612D', 'important');
        var txt = btn.querySelector('.mkd-btn-text');
        if (txt) txt.style.setProperty('color', '#ffffff', 'important');
        var icon = btn.querySelector('.mkd-btn-icon');
        if (icon) {
            icon.style.setProperty('background-color', '#C0392B', 'important');
            icon.style.setProperty('color', '#ffffff', 'important');
        }
    });
    var btt = document.getElementById('mkd-back-to-top');
    if (btt) btt.style.setProperty('background-color', '#E8612D', 'important');
    var allEls = document.querySelectorAll('*');
    allEls.forEach(function(el) {
        var cs = getComputedStyle(el);
        var bg = cs.backgroundColor;
        var color = cs.color;
        var bc = cs.borderColor;
        var isYellowBg = (bg === 'rgb(253, 185, 19)' || bg === 'rgb(231, 160, 34)');
        var isYellowColor = (color === 'rgb(253, 185, 19)' || color === 'rgb(231, 160, 34)');
        if (isYellowBg) {
            /* Skip accordion panels AND any of their descendants (tab panels keep orange) */
            var inPanel = el.closest('.mkd-accordion-content, .mkd-accordion-content-inner');
            if (!inPanel && !el.classList.contains('mkd-accordion-content') && !el.classList.contains('mkd-accordion-content-inner')) {
                el.style.setProperty('background-color', '#E8612D', 'important');
                el.style.setProperty('color', '#ffffff', 'important');
            }
        } else if (isYellowColor) {
            el.style.setProperty('color', '#E8612D', 'important');
        }
        if (bc === 'rgb(253, 185, 19)' || bc === 'rgb(231, 160, 34)') {
            el.style.setProperty('border-color', '#E8612D', 'important');
        }
    });
});
</script>

<!-- ===== BACH KHOA DIGITAL: Override màu vàng → Đỏ Cam ===== -->
<style id="bkd-color-override">
    body.page-id-113 .mkd-btn.mkd-btn-solid,
    body.page-id-113 a.mkd-btn.mkd-btn-solid,
    body.page-id-113 a.mkd-btn.mkd-btn-medium.mkd-btn-solid,
    body.page-id-113 a.mkd-btn.mkd-btn-small.mkd-btn-solid,
    body.page-id-113 a.mkd-btn.mkd-btn-large.mkd-btn-solid,
    body.page-id-113 a.mkd-btn.mkd-btn-full-width.mkd-btn-solid,
    body.page-id-113 a.mkd-btn.mkd-btn-solid.mkd-btn-icon {
        background-color: #E8612D !important;
        background-image: linear-gradient(135deg, #E8612D 0%, #C0392B 100%) !important;
        border-color: #E8612D !important;
        color: #ffffff !important;
    }
    body.page-id-113 .mkd-btn.mkd-btn-solid:hover,
    body.page-id-113 a.mkd-btn.mkd-btn-solid:hover {
        background-color: #C0392B !important;
        background-image: linear-gradient(135deg, #C0392B 0%, #9B1B1B 100%) !important;
        border-color: #C0392B !important;
    }
    body.page-id-113 .mkd-btn.mkd-btn-solid .mkd-btn-text,
    body.page-id-113 a.mkd-btn.mkd-btn-solid .mkd-btn-text { color: #ffffff !important; }
    body.page-id-113 .mkd-btn.mkd-btn-solid .mkd-btn-icon,
    body.page-id-113 a.mkd-btn.mkd-btn-solid .mkd-btn-icon {
        background-color: #C0392B !important;
        color: #ffffff !important;
    }

    body.page-id-113 .mkd-main-menu > ul > li.mkd-active-item > a,
    body.page-id-113 .mkd-main-menu > ul > li.mkd-active-item > a span,
    body.page-id-113 .mkd-main-menu > ul > li.current-menu-item > a,
    body.page-id-113 .mkd-main-menu > ul > li > a:hover,
    body.page-id-113 .mkd-main-menu > ul > li > a:hover span { color: #E8612D !important; }
    body.page-id-113 .mkd-main-menu > ul > li.mkd-active-item > a::after,
    body.page-id-113 .mkd-main-menu > ul > li > a:hover::after { background-color: #E8612D !important; }

    body.page-id-113 .mkd-drop-down .second .inner ul li a:hover,
    body.page-id-113 .mkd-drop-down .second .inner ul li.current-menu-item > a { color: #E8612D !important; }

    body.page-id-113 .mkd-st-title-line { background-color: #E8612D !important; }

    body.page-id-113 .mkd-back-to-top a,
    body.page-id-113 #mkd-back-to-top a { background-color: #E8612D !important; }

    body.page-id-113 .mkd-page-footer,
    body.page-id-113 .mkd-footer-top-holder,
    body.page-id-113 .mkd-footer-bottom-holder { background-color: #2B2B2B !important; }
    body.page-id-113 .mkd-footer-top-holder *,
    body.page-id-113 .mkd-footer-bottom-holder * { color: #cccccc !important; }
    body.page-id-113 .mkd-widget-title,
    body.page-id-113 .mkd-footer-top-holder h4,
    body.page-id-113 .mkd-footer-bottom-holder h4 { color: #ffffff !important; }
    body.page-id-113 .mkd-footer-top-holder a:hover,
    body.page-id-113 .mkd-footer-bottom-holder a:hover { color: #E8612D !important; }

    /* Tab active color override */
    body.page-id-113 .mkd-tabs .mkd-tabs-nav li.ui-state-active a,
    body.page-id-113 .mkd-tabs .mkd-tabs-nav li.ui-tabs-active a { color: #E8612D !important; }
    body.page-id-113 .mkd-tabs .mkd-tabs-nav li.ui-state-active,
    body.page-id-113 .mkd-tabs .mkd-tabs-nav li.ui-tabs-active { border-bottom-color: #E8612D !important; }

    /* Accordion active color override */
    body.page-id-113 .mkd-accordion-holder .mkd-accordion-title.ui-state-active,
    body.page-id-113 .mkd-accordion-holder .mkd-accordion-title.ui-accordion-header-active { border-color: #E8612D !important; }
    body.page-id-113 .mkd-accordion-holder .mkd-accordion-title.ui-state-active .mkd-tab-title,
    body.page-id-113 .mkd-accordion-holder .mkd-accordion-title.ui-accordion-header-active .mkd-tab-title { color: #E8612D !important; }

    /* Tab panels: orange background with white text */
    body.page-id-113 .mkd-tab-container {
        background-color: #E8612D !important;
        color: #ffffff !important;
    }
    body.page-id-113 .mkd-tab-container p,
    body.page-id-113 .mkd-tab-container li,
    body.page-id-113 .mkd-tab-container span,
    body.page-id-113 .mkd-tab-container a {
        color: #ffffff !important;
    }
    /* Accordion content: stay white */
    body.page-id-113 .mkd-accordion-content,
    body.page-id-113 .mkd-accordion-content-inner {
        background-color: transparent !important;
        color: #333333 !important;
    }
    body.page-id-113 .mkd-accordion-content p,
    body.page-id-113 .mkd-accordion-content-inner p {
        color: #333333 !important;
    }
</style>

<!-- CUSTOM CURSOR -->
<div id="bk-cursor-dot"></div>
<div id="bk-cursor-ring"></div>
<canvas id="bk-tech-canvas"></canvas>
<script>
(function(){
    var dot  = document.getElementById('bk-cursor-dot');
    var ring = document.getElementById('bk-cursor-ring');
    if (!dot || !ring) return;

    var mx = window.innerWidth / 2, my = window.innerHeight / 2;
    var rx = mx, ry = my;

    document.addEventListener('mousemove', function(e){
        mx = e.clientX; my = e.clientY;
    }, { passive: true });

    (function tick(){
        dot.style.transform  = 'translate3d(' + mx + 'px,' + my + 'px,0) translate(-50%,-50%)';
        rx += (mx - rx) * 0.15;
        ry += (my - ry) * 0.15;
        ring.style.transform = 'translate3d(' + (rx|0) + 'px,' + (ry|0) + 'px,0) translate(-50%,-50%)';
        requestAnimationFrame(tick);
    })();

    var body = document.body;
    var ALL_STATES = 'cursor--link cursor--partner cursor--slider cursor--text cursor--btn cursor--img cursor--menu cursor--on-orange';
    function clearState(){
        body.classList.remove.apply(body.classList, ALL_STATES.split(' '));
    }

    function bindCursor(selector, state){
        document.querySelectorAll(selector).forEach(function(el){
            el.addEventListener('mouseenter', function(e){ e.stopPropagation(); clearState(); body.classList.add('cursor--' + state); });
            el.addEventListener('mouseleave', clearState);
        });
    }

    document.querySelectorAll('.mkd-btn, .mkd-btn-solid, .mkd-btn-medium').forEach(function(el){
        el.addEventListener('mouseenter', function(e){ e.stopPropagation(); clearState(); body.classList.add('cursor--btn'); });
        el.addEventListener('mouseleave', clearState);
        el.addEventListener('click', function(){
            dot.classList.remove('bk-click');
            void dot.offsetWidth;
            dot.classList.add('bk-click');
            setTimeout(function(){ dot.classList.remove('bk-click'); }, 500);
        });
    });

    document.querySelectorAll('.mkd-main-menu > ul > li > a, .mkd-main-menu > ul > li, nav.mkd-main-menu a').forEach(function(el){
        el.addEventListener('mouseenter', function(e){ e.stopPropagation(); clearState(); body.classList.add('cursor--menu'); });
        el.addEventListener('mouseleave', clearState);
    });

    bindCursor('.bk-partner-item', 'partner');
    bindCursor('.rev_slider_wrapper, .mkd-eh-item, rs-module-wrap', 'slider');
    bindCursor('.mkd-si-inner img, .mkd-footer-top-holder img', 'img');
    bindCursor('h1, h2, h3, h4', 'text');
    bindCursor('p', 'text');
    bindCursor('a, button', 'link');

    document.addEventListener('mouseleave', function(){ dot.style.opacity='0'; ring.style.opacity='0'; });
    document.addEventListener('mouseenter', function(){ dot.style.opacity='1'; ring.style.opacity='0.7'; });

    /* ── Orange-background cursor detection ─────────────────────────
       On every mousemove, check if the element under the pointer sits
       inside an orange-background container (.mkd-tab-container with
       an orange bg, or any element with computed bg = #E8612D).
       If so, switch to cursor--on-orange (dark dot, white ring).
    ─────────────────────────────────────────────────────────────── */
    var ORANGE_BG = 'rgb(232, 97, 45)';
    document.addEventListener('mousemove', function(e) {
        var el = document.elementFromPoint(e.clientX, e.clientY);
        if (!el) return;
        /* Walk up at most 6 ancestors to detect orange bg */
        var check = el;
        var onOrange = false;
        for (var i = 0; i < 6 && check && check !== document.body; i++) {
            var bg = getComputedStyle(check).backgroundColor;
            var inlineBg = check.style && check.style.backgroundColor;
            if (bg === ORANGE_BG || inlineBg === ORANGE_BG || inlineBg.indexOf('232, 97, 45') !== -1) {
                onOrange = true;
                break;
            }
            check = check.parentElement;
        }
        if (onOrange) {
            if (!body.classList.contains('cursor--on-orange')) {
                clearState();
                body.classList.add('cursor--on-orange');
            }
        } else {
            body.classList.remove('cursor--on-orange');
        }
    }, { passive: true });
})();
</script>

<script>
(function () {
    var canvas = document.getElementById('bk-tech-canvas');
    if (!canvas) return;
    var ctx = canvas.getContext('2d', { alpha: true });
    var W = 0, H = 0;
    var N = 70;
    var LINK_SQ = 140 * 140;
    var MOUSE_SQ = 170 * 170;
    var nodes = [];
    var mx = -9999, my = -9999;
    var lastTs = 0, FRAME = 1000 / 30;

    function resize() {
        W = canvas.width  = window.innerWidth;
        H = canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener('resize', function () { resize(); init(); });

    var COLS = ['#E8612D','#FF8C42','#ffffff','#00d4ff'];
    function rCol() {
        var r = Math.random();
        return r < 0.50 ? COLS[0] : r < 0.75 ? COLS[1] : r < 0.90 ? COLS[2] : COLS[3];
    }

    function init() {
        nodes = [];
        for (var i = 0; i < N; i++) {
            var a = Math.random() * Math.PI * 2;
            var s = 0.12 + Math.random() * 0.28;
            nodes.push({
                x: Math.random() * W, y: Math.random() * H,
                vx: Math.cos(a) * s,  vy: Math.sin(a) * s,
                r: 1.5 + Math.random() * 1.5,
                color: rCol(),
                phase: Math.random() * Math.PI * 2
            });
        }
    }
    init();

    document.addEventListener('mousemove', function (e) { mx = e.clientX; my = e.clientY; });
    document.addEventListener('mouseleave', function () { mx = -9999; my = -9999; });

    function draw(ts) {
        requestAnimationFrame(draw);
        if (ts - lastTs < FRAME) return;
        lastTs = ts;

        ctx.clearRect(0, 0, W, H);

        var i, j, n, dx, dy, dSq, alpha;

        for (i = 0; i < N; i++) {
            n = nodes[i];
            n.x += n.vx; n.y += n.vy; n.phase += 0.025;
            if (n.x < 0) n.x += W; else if (n.x > W) n.x -= W;
            if (n.y < 0) n.y += H; else if (n.y > H) n.y -= H;
        }

        ctx.lineWidth = 0.7;
        for (i = 0; i < N - 1; i++) {
            var a = nodes[i];
            for (j = i + 1; j < N; j++) {
                var b = nodes[j];
                dx = a.x - b.x; dy = a.y - b.y;
                dSq = dx*dx + dy*dy;
                if (dSq < LINK_SQ) {
                    alpha = (1 - dSq / LINK_SQ) * 0.3;
                    ctx.globalAlpha = alpha;
                    ctx.strokeStyle = a.color;
                    ctx.beginPath();
                    ctx.moveTo(a.x, a.y);
                    ctx.lineTo(b.x, b.y);
                    ctx.stroke();
                }
            }
        }

        ctx.strokeStyle = '#E8612D';
        ctx.lineWidth   = 0.9;
        for (i = 0; i < N; i++) {
            n = nodes[i];
            dx = n.x - mx; dy = n.y - my;
            dSq = dx*dx + dy*dy;
            if (dSq < MOUSE_SQ) {
                ctx.globalAlpha = (1 - dSq / MOUSE_SQ) * 0.65;
                ctx.beginPath();
                ctx.moveTo(mx, my);
                ctx.lineTo(n.x, n.y);
                ctx.stroke();
            }
        }

        for (i = 0; i < N; i++) {
            n = nodes[i];
            var pulse = 0.55 + 0.45 * Math.sin(n.phase);
            ctx.globalAlpha = pulse;
            ctx.fillStyle   = n.color;
            ctx.beginPath();
            ctx.arc(n.x, n.y, n.r * (0.85 + pulse * 0.3), 0, Math.PI * 2);
            ctx.fill();
        }

        ctx.globalAlpha = 1;
    }
    requestAnimationFrame(draw);
})();
</script>

<!-- Shared script.js loaded at end of body so document.body is available -->
<script src="/js/script.js"></script>

<!-- Tab switching & Accordion (replaces Baumeister modules.min.js behavior) -->
<script>
(function () {
    /* ── TABS ──────────────────────────────────────────────────────── */
    document.querySelectorAll('.mkd-tabs').forEach(function (tabsEl) {
        var navItems   = tabsEl.querySelectorAll('.mkd-tabs-nav li');
        var navLinks   = tabsEl.querySelectorAll('.mkd-tabs-nav a');
        var containers = tabsEl.querySelectorAll('.mkd-tab-container');

        /* Show only the first tab panel on load */
        containers.forEach(function (c, i) {
            c.style.display = i === 0 ? 'block' : 'none';
        });
        if (navItems.length) navItems[0].classList.add('active');

        navLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                var targetId = this.getAttribute('href').replace('#', '');

                /* hide all panels */
                containers.forEach(function (c) { c.style.display = 'none'; });
                /* deactivate all tabs */
                navItems.forEach(function (li) { li.classList.remove('active'); });

                /* show matched panel */
                var target = tabsEl.querySelector('#' + targetId);
                if (target) target.style.display = 'block';

                /* activate clicked tab */
                this.parentElement.classList.add('active');
            });
        });
    });

    /* ── ACCORDION ─────────────────────────────────────────────────── */
    document.querySelectorAll('.mkd-accordion-holder').forEach(function (holder) {
        var titles = holder.querySelectorAll('.mkd-accordion-title');

        /* Collapse all panels initially */
        titles.forEach(function (title) {
            var content = title.nextElementSibling;
            if (content && content.classList.contains('mkd-accordion-content')) {
                content.style.display = 'none';
            }
            title.style.cursor = 'pointer';

            title.addEventListener('click', function () {
                var content = this.nextElementSibling;
                var isOpen  = content && content.style.display !== 'none';

                /* Close all panels in this holder */
                holder.querySelectorAll('.mkd-accordion-content').forEach(function (c) {
                    c.style.display = 'none';
                });
                holder.querySelectorAll('.mkd-accordion-title').forEach(function (t) {
                    t.classList.remove('mkd-accordion-title-active');
                });

                /* Open clicked panel if it was closed */
                if (!isOpen && content) {
                    content.style.display = 'block';
                    this.classList.add('mkd-accordion-title-active');
                }
            });
        });
    });
})();
</script>

</body>

</html>