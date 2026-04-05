<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
	<title><?php echo htmlspecialchars($product->name); ?> &#8211; BachKhoa Digital</title>
	<?php $ogBase = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost'); ?>
	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="product"/>
	<meta property="og:site_name" content="BachKhoa Digital"/>
	<meta property="og:url" content="<?php echo $ogBase . $_SERVER['REQUEST_URI']; ?>"/>
	<meta property="og:title" content="<?php echo htmlspecialchars($product->name); ?> – BachKhoa Digital"/>
	<meta property="og:description" content="<?php echo htmlspecialchars(mb_substr(strip_tags($product->description ?? ''), 0, 160)); ?>"/>
	<meta property="og:image" content="<?php echo $ogBase; ?>/images/share.jpg"/>
	<meta property="og:image:width" content="1200"/>
	<meta property="og:image:height" content="630"/>
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:title" content="<?php echo htmlspecialchars($product->name); ?> – BachKhoa Digital"/>
	<meta name="twitter:description" content="<?php echo htmlspecialchars(mb_substr(strip_tags($product->description ?? ''), 0, 160)); ?>"/>
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

	<!-- Shared script.js (emoji, GTM, RevSlider, WooCommerce, etc.) -->
	<script src="/js/script.js"></script>

	<!-- Page-specific override -->
	<script>
		var mkdPerPageVars = {
			"vars": {
				"mkdStickyScrollAmount": 750,
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
<?php include resource_path('views/partials/auth-styles.php'); ?>
</style>
</head>

<body class="archive post-type-archive post-type-archive-product theme-baumeister mkd-core-1.2.3 product-template-default single single-product mkd-woo-single-page woocommerce woocommerce-page woocommerce-no-js baumeister-ver-1.6 mkd-grid-1300 mkd-disable-global-padding-bottom mkd-sticky-header-on-scroll-down-up mkd-dropdown-animate-height mkd-header-box mkd-menu-area-shadow-disable mkd-menu-area-in-grid-shadow-disable mkd-menu-area-border-disable mkd-menu-area-in-grid-border-disable mkd-logo-area-border-disable mkd-logo-area-in-grid-border-disable mkd-header-vertical-shadow-disable mkd-header-vertical-border-disable mkd-side-menu-slide-from-right mkd-woocommerce-page mkd-woo-main-page mkd-woocommerce-columns-3 mkd-woo-normal-space mkd-woo-pl-info-below-image mkd-woo-single-thumb-below-image mkd-woo-single-has-pretty-photo mkd-default-mobile-header mkd-sticky-up-mobile-header mkd-header-top-enabled mkd-search-covers-header wpb-js-composer js-comp-ver-6.10.0 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
	<?php include resource_path('views/partials/side-menu.php'); ?>
	<div class="mkd-wrapper">
		<div class="mkd-wrapper-inner">


						<div class="mkd-top-bar-background"></div>
<div class="mkd-top-bar">
				
				<div class="mkd-grid">
				
				<div class="mkd-vertical-align-containers">
					<div class="mkd-position-left">
						<div class="mkd-position-left-inner">

							<a class="mkd-icon-widget-holder" href="https://www.google.com/maps/place/544+Union+Ave,+Brooklyn,+NY+11211,+USA/@40.7171278,-73.9540194,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!2sNew+York,+NY,+USA!3b1!8m2!3d40.7127753!4d-74.0059728!3m4!1s0x89c2595bc660ec21:0x3131cdc6602b7460!8m2!3d40.7171238!4d-73.951"
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
										<a itemprop="url" class="mkd-header-cart"
											href="https://baumeister.qodeinteractive.com/cart/">
											<span class="mkd-cart-icon fa fa-shopping-cart">
												<span
													class="mkd-cart-number">0</span>
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
				</div><!-- end mkd-grid -->



				<div class="mkd-sticky-header">
					<div class="mkd-sticky-holder mkd-menu-center">
						<div class="mkd-grid">
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
												<div class="second">
													<div class="inner">
														<ul>
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
														</ul>
													</div>
												</div>
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
						</div><!-- end mkd-grid -->
					</div>
				</div>


				<form action="https://baumeister.qodeinteractive.com/" class="mkd-search-cover" method="get">
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

			<a id='mkd-back-to-top' href='#'>
				<span class="mkd-icon-stack">
					<i class="mkd-icon-font-awesome fa fa-long-arrow-up "></i> </span>
			</a>

			<div class="mkd-content" style="margin-top: -80px">
				<div class="mkd-content-inner">

<div class="mkd-title-holder mkd-standard-type mkd-preload-background mkd-has-bg-image mkd-bg-parallax" style="height: 521px;background-image:url(https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/shop-title-background-img.jpg);" data-height="521">
			<div class="mkd-title-image">
			<img itemprop="image" src="https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/shop-title-background-img.jpg" alt="a" />
		</div>
		<div class="mkd-title-wrapper" style="height: 521px;padding-top: 80px">
		<div class="mkd-title-inner">
			<div class="mkd-grid">
									<h1 class="mkd-page-title entry-title" style="color: #ffffff"><?php echo htmlspecialchars($product->name); ?></h1>
											</div>
	    </div>
	</div>
</div>

	<div class="mkd-container">
		<div class="mkd-container-inner clearfix">
			<div class="woocommerce-notices-wrapper"></div><div id="product-<?php echo $product->id; ?>" class="product type-product status-publish first <?php echo $product->quantity > 0 ? 'instock' : 'outofstock'; ?> has-post-thumbnail shipping-taxable purchasable product-type-simple">

	<div class="mkd-single-product-content"><div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-3 images bkd-gallery" data-columns="3" style="opacity: 1; transition: opacity .25s ease-in-out;">
<?php
$mainImg = $product->image ?: 'https://via.placeholder.com/800x800?text=No+Image';
$thumbImages = array_values(array_filter([$product->image1, $product->image2, $product->image3]));
$alt = htmlspecialchars($product->name);
?>
	<!-- Main image -->
	<div class="bkd-gallery__main">
		<a href="<?php echo htmlspecialchars($mainImg); ?>" id="bkd-main-link" data-rel="prettyPhoto[woo_single_pretty_photo]">
			<img id="bkd-main-img" src="<?php echo htmlspecialchars($mainImg); ?>" alt="<?php echo $alt; ?>" class="wp-post-image" loading="lazy" />
		</a>
	</div>
	<!-- Thumbnails -->
	<?php if (!empty($thumbImages)): ?>
	<div class="bkd-gallery__thumbs">
		<?php foreach ($thumbImages as $i => $img): ?>
		<div class="bkd-thumb" data-full="<?php echo htmlspecialchars($img); ?>">
			<img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo $alt; ?>" loading="lazy" />
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
</div>
<div class="mkd-single-product-summary">
	<div class="summary entry-summary">
		<h3  itemprop="name" class="mkd-single-product-title"><?php echo htmlspecialchars($product->name); ?></h3>
	<div class="woocommerce-product-rating">
		<div class="star-rating" role="img" aria-label="Rated 3.50 out of 5"><span style="width:70%">Rated <strong class="rating">3.50</strong> out of 5 based on <span class="rating">2</span> customer ratings</span></div>								<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">2</span> customer reviews)</a>
						</div>

<p class="price">
<?php
$hasSale = $product->sale_price > 0 && $product->sale_price < $product->price;
if ($product->price == 0):
?>
	<span class="woocommerce-Price-amount amount"><bdi>Liên hệ</bdi></span>
<?php elseif ($hasSale): ?>
	<del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product->price, 0, ',', '.'); ?>₫</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product->sale_price, 0, ',', '.'); ?>₫</bdi></span></ins>
<?php else: ?>
	<span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product->price, 0, ',', '.'); ?>₫</bdi></span>
<?php endif; ?>
</p>
<div class="woocommerce-product-details__short-description">
	<p><?php
    $shortDesc = $product->short_description ?? '';
    $shortDesc = strip_tags($shortDesc, '<br><strong><em><b><i>');
    echo html_entity_decode($shortDesc, ENT_QUOTES, 'UTF-8');
    ?></p>
</div>

	
	<div class="bkd-cart-row">
		<div class="bkd-qty-wrap">
			<button type="button" class="bkd-qty-btn" id="bkd-qty-minus">&#8722;</button>
			<span class="bkd-qty-value" id="bkd-qty-value">1</span>
			<button type="button" class="bkd-qty-btn" id="bkd-qty-plus">&#43;</button>
		</div>
		<button type="button" class="single_add_to_cart_button button alt">Liên hệ đặt hàng</button>
	</div>

	
<div class="product_meta">

	
	
		<span class="sku_wrapper">SKU: <span class="sku"><?php echo htmlspecialchars($product->sku); ?></span></span>

	<?php if ($product->category): ?>
	<span class="posted_in">Category: <a href="/shop?category=<?php echo urlencode($product->category); ?>" rel="tag"><?php echo htmlspecialchars($product->category); ?></a></span>
	<?php endif; ?>
	<?php if ($product->tag): ?>
	<span class="tagged_as">Tags: <?php
		$tags = array_map('trim', explode(',', $product->tag));
		$tagLinks = [];
		foreach ($tags as $t) {
			$tagLinks[] = '<a href="/shop?tag=' . urlencode($t) . '" rel="tag">' . htmlspecialchars($t) . '</a>';
		}
		echo implode(', ', $tagLinks);
	?></span>
	<?php endif; ?>
	
</div>
<div class="mkd-woo-social-share-holder"><span>Share:</span><div class="mkd-social-share-holder mkd-list">
		<ul>
		<li class="mkd-facebook-share">
	<a itemprop="url" class="mkd-share-link" href="#" onclick="window.open(&#039;http://www.facebook.com/sharer.php?u=https%3A%2F%2Fbaumeister.qodeinteractive.com%2Fproduct%2Felectric-drill%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);">
					<span class="mkd-social-network-icon social_facebook"></span>
			</a>
</li><li class="mkd-twitter-share">
	<a itemprop="url" class="mkd-share-link" href="#" onclick="window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+ https://baumeister.qodeinteractive.com/product/electric-drill/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);">
					<span class="mkd-social-network-icon social_twitter"></span>
			</a>
</li><li class="mkd-pinterest-share">
	<a itemprop="url" class="mkd-share-link" href="#" onclick="popUp=window.open(&#039;http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fbaumeister.qodeinteractive.com%2Fproduct%2Felectric-drill%2F&amp;description=Electric+Drill&amp;media=&amp;media=https%3A%2F%2Fbaumeister.qodeinteractive.com%2Fwp-content%2Fuploads%2F2017%2F11%2Fshop-img-1.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;">
					<span class="mkd-social-network-icon social_pinterest"></span>
			</a>
</li>	</ul>
</div></div>
	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
							<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
					<a href="#tab-description">
						Description					</a>
				</li>
							<li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
					<a href="#tab-additional_information">
						Additional information					</a>
				</li>
							<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
					<a href="#tab-reviews">
						Reviews (2)					</a>
				</li>
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
				
	<h2>Description</h2>

<?php
$descContent = $product->long_description ?: $product->short_description;
if ($descContent) {
    // Strip chat wrapper divs but keep basic formatting tags
    $descContent = strip_tags($descContent, '<p><br><strong><em><ul><ol><li><b><i>');
    // Decode HTML entities
    $descContent = html_entity_decode($descContent, ENT_QUOTES, 'UTF-8');
    // Remove excessive blank lines
    $descContent = preg_replace('/(\s*\n){3,}/', "\n\n", trim($descContent));
    // Remove lines that are only whitespace/non-breaking spaces
    $descContent = preg_replace('/^\s*$/m', '', $descContent);
    $descContent = preg_replace('/\n{3,}/', "\n\n", $descContent);
    echo $descContent;
} else {
    echo '<p>Chưa có mô tả.</p>';
}
?>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
				
	<h2>Additional information</h2>

<table class="woocommerce-product-attributes shop_attributes">
			<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
			<th class="woocommerce-product-attributes-item__label">Weight</th>
			<td class="woocommerce-product-attributes-item__value">3.5 kg</td>
		</tr>
			<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">
			<th class="woocommerce-product-attributes-item__label">Dimensions</th>
			<td class="woocommerce-product-attributes-item__value">40 &times; 15 &times; 35 cm</td>
		</tr>
	</table>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
				<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">
			2 reviews for <span>Electric Drill</span>		</h2>

					<ol class="commentlist">
				<li class="review even thread-even depth-1" id="li-comment-6">

	<div id="comment-6" class="comment_container">

		<img data-del="avatar" src='https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/user-img-2-150x150.png' class='avatar pp-user-avatar avatar-60 photo ' height='60' width='60'/>
		<div class="comment-text">

			<div class="star-rating" role="img" aria-label="Rated 4 out of 5"><span style="width:80%">Rated <strong class="rating">4</strong> out of 5</span></div>
	<p class="meta">
		<strong class="woocommerce-review__author">Dylan Griffin </strong>
				<span class="woocommerce-review__dash">&ndash;</span> <time class="woocommerce-review__published-date" datetime="2017-12-01T12:59:42+00:00">December 1, 2017</time>
	</p>

	<div class="description"><p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet quisque rutrum aenean.</p>
</div>
		</div>
	</div>
</li><!-- #comment-## -->
<li class="review odd alt thread-odd thread-alt depth-1" id="li-comment-7">

	<div id="comment-7" class="comment_container">

		<img data-del="avatar" src='https://baumeister.qodeinteractive.com/wp-content/uploads/2017/11/user-img-4-150x150.png' class='avatar pp-user-avatar avatar-60 photo ' height='60' width='60'/>
		<div class="comment-text">

			<div class="star-rating" role="img" aria-label="Rated 3 out of 5"><span style="width:60%">Rated <strong class="rating">3</strong> out of 5</span></div>
	<p class="meta">
		<strong class="woocommerce-review__author">Philip Hunt </strong>
				<span class="woocommerce-review__dash">&ndash;</span> <time class="woocommerce-review__published-date" datetime="2017-12-01T13:01:00+00:00">December 1, 2017</time>
	</p>

	<div class="description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
		</div>
	</div>
</li><!-- #comment-## -->
			</ol>

						</div>

			<div id="review_form_wrapper">
			<div id="review_form">
					<div id="respond" class="comment-respond">
		<span id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/electric-drill/#respond" style="display:none;">Cancel reply</a></small></span><form action="https://baumeister.qodeinteractive.com/wp-comments-post.php" method="post" id="commentform" class="comment-form"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span class="required-field-message" aria-hidden="true">Required fields are marked <span class="required" aria-hidden="true">*</span></span></p><div class="comment-form-rating"><label for="rating">Your rating&nbsp;<span class="required">*</span></label><select name="rating" id="rating" required>
						<option value="">Rate&hellip;</option>
						<option value="5">Perfect</option>
						<option value="4">Good</option>
						<option value="3">Average</option>
						<option value="2">Not that bad</option>
						<option value="1">Very poor</option>
					</select></div><p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p><p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label><input id="author" name="author" type="text" value="" size="30" required /></p>
<p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label><input id="email" name="email" type="email" value="" size="30" required /></p>
<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='253' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><!-- Anti-spam plugin wordpress.org/plugins/anti-spam/ --><div class="wantispam-required-fields"><input type="hidden" name="wantispam_t" class="wantispam-control wantispam-control-t" value="1774245990" /><div class="wantispam-group wantispam-group-q" style="clear: both;">
					<label>Current ye@r <span class="required">*</span></label>
					<input type="hidden" name="wantispam_a" class="wantispam-control wantispam-control-a" value="2026" />
					<input type="text" name="wantispam_q" class="wantispam-control wantispam-control-q" value="7.3.3" autocomplete="off" />
				  </div>
<div class="wantispam-group wantispam-group-e" style="display: none;">
					<label>Leave this field empty</label>
					<input type="text" name="wantispam_e_email_url_website" class="wantispam-control wantispam-control-e" value="" autocomplete="off" />
				  </div>
</div><!--\End Anti-spam plugin --></form>	</div><!-- #respond -->
				</div>
		</div>
	
	<div class="clear"></div>
</div>
			</div>
		
			</div>

	</div>

	</div></div>
	<section class="related products">

					<h2>Sản phẩm liên quan</h2>
				
		<ul class="products columns-4">
<?php foreach ($related as $index => $rp):
	$rPos = $index % 4;
	$rPosClass = '';
	if ($rPos === 0) $rPosClass = 'first';
	if ($rPos === 3) $rPosClass = 'last';
	$rHasSale = $rp->sale_price > 0 && $rp->sale_price < $rp->price;
?>
			<li class="product type-product status-publish <?php echo $rPosClass; ?> instock has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="mkd-pl-inner"><div class="mkd-pl-image">
	<?php if ($rHasSale): ?><span class="mkd-onsale">Sale</span><?php endif; ?>
	<img width="800" height="800" src="<?php echo htmlspecialchars($rp->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?php echo htmlspecialchars($rp->name); ?>" loading="lazy" />
	<div class="mkd-pl-text"><div class="mkd-pl-text-outer"><div class="mkd-pl-text-inner"><a href="/product-detail?id=<?php echo $rp->id; ?>" class="button product_type_simple add_to_cart_button" data-product_id="<?php echo $rp->id; ?>" data-product_sku="<?php echo htmlspecialchars($rp->sku); ?>" rel="nofollow">Xem chi tiết</a></div></div></div></div><a href="/product-detail?id=<?php echo $rp->id; ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a></div><div class="mkd-pl-text-wrapper"><div class="mkd-pl-title-price-holder"><h5 class="mkd-product-list-title"><a href="/product-detail?id=<?php echo $rp->id; ?>"><?php echo htmlspecialchars($rp->name); ?></a></h5>
	<span class="price">
	<?php if ($rp->price == 0): ?>
		<span class="woocommerce-Price-amount amount"><bdi>Liên hệ</bdi></span>
	<?php elseif ($rHasSale): ?>
		<del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rp->price, 0, ',', '.'); ?>₫</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rp->sale_price, 0, ',', '.'); ?>₫</bdi></span></ins>
	<?php else: ?>
		<span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rp->price, 0, ',', '.'); ?>₫</bdi></span>
	<?php endif; ?>
	</span>
</div><?php if ($rp->category): ?><div class="mkd-pl-categories"><a href="/shop?category=<?php echo urlencode($rp->category); ?>" rel="tag"><?php echo htmlspecialchars($rp->category); ?></a></div><?php endif; ?></div></li>
<?php endforeach; ?>
		</ul>

	</section>
	</div>

		</div>
	</div>
</div> <!-- close div.content_inner -->
	</div> <!-- close div.content -->
				</div> <!-- close div.mkd-content-inner -->
			</div> <!-- close div.mkd-content -->
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
	<link rel='stylesheet' id='rs-plugin-settings-css' href='https://baumeister.qodeinteractive.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.5' type='text/css' media='all' />
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.6.4' id='swv-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.6.4' id='contact-form-7-js'></script>
	<script type='text/javascript' src='https://export.qodethemes.com/_toolbar/assets/js/rbt-modules.js?ver=6.0.11' id='rabbit_js-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.0.0' id='js-cookie-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.0.0' id='woocommerce-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.0.0' id='wc-cart-fragments-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/wp-user-avatar/assets/js/frontend.min.js?ver=4.3.0' id='ppress-frontend-script-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker.js?ver=1.16.1' id='gtm4wp-form-move-tracker-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/ui/tabs.min.js?ver=1.13.1' id='jquery-ui-tabs-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.1' id='jquery-ui-accordion-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.16' id='mediaelement-core-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.0.11' id='mediaelement-migrate-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.0.11' id='wp-mediaelement-js'></script>
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
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/mkd-core/shortcodes/countdown/assets/js/plugins/jquery.countdown.min.js?ver=6.0.11' id='countdown-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/mkd-core/shortcodes/counter/assets/js/plugins/counter.js?ver=6.0.11' id='counter-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/mkd-core/shortcodes/counter/assets/js/plugins/absoluteCounter.min.js?ver=6.0.11' id='absoluteCounter-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/mkd-core/shortcodes/custom-font/assets/js/plugins/typed.js?ver=6.0.11' id='typed-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/mkd-core/shortcodes/full-screen-sections/assets/js/plugins/jquery.fullPage.min.js?ver=6.0.11' id='fullPage-js'></script>
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js' id='easypiechart-js' crossorigin='anonymous'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.7.0.0' id='select2-js'></script>
	<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyBQTukooUgzxI6RBwRGdF2OPbHJ8BEowC8&#038;ver=6.0.11' id='baumeister-mikado-google-map-api-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/themes/baumeister/assets/js/modules.min.js?ver=6.0.11' id='baumeister-mikado-modules-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.1' id='jquery-ui-mouse-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.1' id='jquery-ui-slider-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js?ver=7.0.0' id='wc-jquery-ui-touchpunch-js'></script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/accounting/accounting.min.js?ver=0.4.2' id='accounting-js'></script>
	<script type='text/javascript' id='wc-price-slider-js-extra'>
/* <![CDATA[ */
var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
/* ]]> */
</script>
	<script type='text/javascript' src='https://baumeister.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min.js?ver=7.0.0' id='wc-price-slider-js'></script>
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
            el.style.setProperty('background-color', '#E8612D', 'important');
            el.style.setProperty('color', '#ffffff', 'important');
        } else if (isYellowColor) {
            el.style.setProperty('color', '#E8612D', 'important');
        }
        if (bc === 'rgb(253, 185, 19)' || bc === 'rgb(231, 160, 34)') {
            el.style.setProperty('border-color', '#E8612D', 'important');
        }
    });
});
</script>

<!-- ===== BACH KHOA DIGITAL: Override màu vàng → Đỏ Cam (load CUỐI CÙNG, sau mọi CSS) ===== -->
<style id="bkd-color-override">
    body.single-product .mkd-btn.mkd-btn-solid,
    body.single-product a.mkd-btn.mkd-btn-solid,
    body.single-product .mkd-btn.mkd-btn-medium.mkd-btn-solid,
    body.single-product a.mkd-btn.mkd-btn-medium.mkd-btn-solid,
    body.single-product a.mkd-btn.mkd-btn-small.mkd-btn-solid,
    body.single-product a.mkd-btn.mkd-btn-large.mkd-btn-solid,
    body.single-product a.mkd-btn.mkd-btn-full-width.mkd-btn-solid,
    body.single-product a.mkd-btn.mkd-btn-solid.mkd-btn-icon,
    body.single-product a.mkd-btn.mkd-btn-medium.mkd-btn-solid.mkd-btn-icon {
        background-color: #E8612D !important;
        background-image: linear-gradient(135deg, #E8612D 0%, #C0392B 100%) !important;
        border-color: #E8612D !important;
        color: #ffffff !important;
    }
    body.single-product .mkd-btn.mkd-btn-solid:hover,
    body.single-product a.mkd-btn.mkd-btn-solid:hover,
    body.single-product a.mkd-btn.mkd-btn-medium.mkd-btn-solid:hover,
    body.single-product a.mkd-btn.mkd-btn-full-width.mkd-btn-solid:hover {
        background-color: #C0392B !important;
        background-image: linear-gradient(135deg, #C0392B 0%, #9B1B1B 100%) !important;
        border-color: #C0392B !important;
    }
    body.single-product .mkd-btn.mkd-btn-solid .mkd-btn-text,
    body.single-product a.mkd-btn.mkd-btn-solid .mkd-btn-text { color: #ffffff !important; }
    body.single-product .mkd-btn.mkd-btn-solid .mkd-btn-icon,
    body.single-product a.mkd-btn.mkd-btn-solid .mkd-btn-icon {
        background-color: #C0392B !important;
        background-image: none !important;
        color: #ffffff !important;
    }

    body.single-product .mkd-main-menu > ul > li.mkd-active-item > a,
    body.single-product .mkd-main-menu > ul > li.mkd-active-item > a span,
    body.single-product .mkd-main-menu > ul > li.current-menu-item > a,
    body.single-product .mkd-main-menu > ul > li > a:hover,
    body.single-product .mkd-main-menu > ul > li > a:hover span { color: #E8612D !important; }
    body.single-product .mkd-main-menu > ul > li.mkd-active-item > a::after,
    body.single-product .mkd-main-menu > ul > li > a:hover::after { background-color: #E8612D !important; }

    body.single-product .mkd-drop-down .second .inner ul li a:hover,
    body.single-product .mkd-drop-down .second .inner ul li.current-menu-item > a { color: #E8612D !important; }

    body.single-product .mkd-post-info-category a,
    body.single-product .mkd-post-info-category a:hover { color: #ffffff !important; background-color: #E8612D !important; border-color: #E8612D !important; }
    body.single-product .mkd-post-info-author .mkd-post-info-author-link,
    body.single-product a.mkd-post-info-author-link { color: #E8612D !important; }

    body.single-product .mkd-st-title-line { background-color: #E8612D !important; }
    body.single-product .woocommerce span.onsale { background-color: #E8612D !important; }

    body.single-product .mkd-back-to-top a,
    body.single-product #mkd-back-to-top a { background-color: #E8612D !important; }

    body.single-product .mkd-container { padding-top: 50px; }

    body.single-product .mkd-page-footer,
    body.single-product .mkd-footer-top-holder,
    body.single-product .mkd-footer-bottom-holder { background-color: #2B2B2B !important; }
    body.single-product .mkd-footer-top-holder *,
    body.single-product .mkd-footer-bottom-holder * { color: #cccccc !important; }
    body.single-product .mkd-footer-top-holder .mkd-widget-title,
    body.single-product .mkd-footer-top-holder h4,
    body.single-product .mkd-footer-bottom-holder h4 { color: #ffffff !important; }
    body.single-product .mkd-sidebar .mkd-widget-title { color: #1b1b1b !important; }
    body.single-product .mkd-footer-top-holder a:hover,
    body.single-product .mkd-footer-bottom-holder a:hover { color: #E8612D !important; }

    /* ── Star rating: dùng Unicode ★ thay icon font WooCommerce (tránh lỗi CORS) ── */
    body.single-product .star-rating {
        font-family: Arial, Georgia, serif !important;
        letter-spacing: 2px;
        width: 6em !important;
    }
    body.single-product .star-rating::before {
        content: "★★★★★" !important;
        color: #ddd !important;
        font-family: Arial, Georgia, serif !important;
        letter-spacing: 2px;
    }
    body.single-product .star-rating span {
        padding-top: 1.2em !important;
    }
    body.single-product .star-rating span::before {
        content: "★★★★★" !important;
        color: #E8612D !important;
        font-family: Arial, Georgia, serif !important;
        letter-spacing: 2px;
    }

    /* ── Product detail: two-column layout (gallery left, summary right) ── */
    body.single-product .mkd-single-product-content {
        display: flex !important;
        flex-wrap: wrap !important;
        gap: 40px !important;
    }
    body.single-product .woocommerce-product-gallery {
        flex: 0 0 48% !important;
        max-width: 48% !important;
    }
    body.single-product .mkd-single-product-summary {
        flex: 0 0 48% !important;
        max-width: 48% !important;
    }

    /* ── Gallery: main image + thumbnails row below ── */
    body.single-product .bkd-gallery {
        display: flex !important;
        flex-direction: column !important;
        gap: 10px !important;
    }
    body.single-product .bkd-gallery__main {
        width: 100% !important;
        border: 1px solid #eee !important;
        background: #f8f8f8 !important;
        overflow: hidden !important;
    }
    body.single-product .bkd-gallery__main img {
        width: 100% !important;
        height: auto !important;
        display: block !important;
        transition: opacity 0.2s ease !important;
    }
    body.single-product .bkd-gallery__thumbs {
        display: flex !important;
        gap: 8px !important;
        flex-wrap: nowrap !important;
    }
    body.single-product .bkd-thumb {
        flex: 1 1 0 !important;
        max-width: calc(33.333% - 6px) !important;
        border: 2px solid #ddd !important;
        cursor: pointer !important;
        overflow: hidden !important;
        background: #f8f8f8 !important;
        transition: border-color 0.2s !important;
    }
    body.single-product .bkd-thumb img {
        width: 100% !important;
        height: auto !important;
        display: block !important;
        transition: transform 0.2s !important;
    }
    body.single-product .bkd-thumb:hover img {
        transform: scale(1.05) !important;
    }
    body.single-product .bkd-thumb--active {
        border-color: #E8612D !important;
    }

    /* ── Product title ── */
    body.single-product .mkd-single-product-title {
        font-size: 28px !important;
        margin-bottom: 5px !important;
    }

    /* ── Price ── */
    body.single-product .summary .price {
        font-size: 26px !important;
        font-weight: 700 !important;
        margin-bottom: 15px !important;
        display: block !important;
    }

    /* ── Quantity + Add to cart row ── */
    .bkd-cart-row {
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        margin: 20px 0 !important;
    }
    .bkd-qty-wrap {
        display: flex !important;
        align-items: center !important;
        border: 1px solid #ddd !important;
        border-radius: 3px !important;
    }
    .bkd-qty-btn {
        width: 36px !important;
        height: 40px !important;
        border: none !important;
        background: #f5f5f5 !important;
        cursor: pointer !important;
        font-size: 18px !important;
        color: #333 !important;
        line-height: 1 !important;
        user-select: none;
        transition: color 0.2s, background 0.2s !important;
    }
    .bkd-qty-btn:hover {
        color: #E8612D !important;
        background: #eee !important;
    }
    .bkd-qty-value {
        display: inline-block !important;
        width: 50px !important;
        height: 40px !important;
        line-height: 40px !important;
        text-align: center !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        color: #1b1b1b !important;
        background: #fff !important;
        border-left: 1px solid #ddd !important;
        border-right: 1px solid #ddd !important;
    }
    body.single-product .single_add_to_cart_button {
        background-color: #1b1b1b !important;
        border-color: #1b1b1b !important;
        color: #ffffff !important;
        padding: 12px 35px !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        cursor: pointer !important;
        transition: all 0.3s ease !important;
    }
    body.single-product .single_add_to_cart_button:hover {
        background-color: #E8612D !important;
        border-color: #E8612D !important;
    }

    /* ── Product meta (SKU, Category, Tags) ── */
    body.single-product .product_meta {
        margin-top: 20px !important;
        padding-top: 15px !important;
        border-top: 1px solid #eee !important;
    }
    body.single-product .product_meta span {
        display: block !important;
        margin-bottom: 5px !important;
        font-size: 14px !important;
    }
    body.single-product .product_meta a:hover { color: #E8612D !important; }

    /* ── Social share ── */
    body.single-product .mkd-woo-social-share-holder {
        margin-top: 20px !important;
        padding-top: 15px !important;
        border-top: 1px solid #eee !important;
    }
    body.single-product .mkd-woo-social-share-holder .mkd-social-network-icon:hover { color: #E8612D !important; }

    /* ── Tabs: dark background, white text, active/hover orange ── */
    body.single-product .woocommerce-tabs {
        clear: both !important;
        width: 100% !important;
        margin-top: 40px !important;
    }
    body.single-product .woocommerce-tabs .tabs.wc-tabs {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 0 30px 0 !important;
        display: flex !important;
        gap: 0 !important;
        border-bottom: none !important;
    }
    body.single-product .woocommerce-tabs .tabs.wc-tabs li {
        margin: 0 !important;
        padding: 0 !important;
        border: none !important;
        background: none !important;
    }
    body.single-product .woocommerce-tabs .tabs.wc-tabs li a {
        display: block !important;
        padding: 12px 25px !important;
        background-color: #2B2B2B !important;
        color: #ffffff !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        text-decoration: none !important;
        text-transform: capitalize !important;
        border: none !important;
        transition: background-color 0.3s ease !important;
    }
    body.single-product .woocommerce-tabs .tabs.wc-tabs li a:hover,
    body.single-product .woocommerce-tabs .tabs.wc-tabs li.active a {
        background-color: #E8612D !important;
        color: #ffffff !important;
    }
    body.single-product .woocommerce-tabs .woocommerce-Tabs-panel {
        padding: 20px 0 !important;
    }

    /* ── Related products ── */
    body.single-product .related.products {
        clear: both !important;
        margin-top: 50px !important;
        padding-top: 30px !important;
        border-top: 1px solid #eee !important;
    }
    body.single-product .related.products h2 {
        font-size: 22px !important;
        margin-bottom: 25px !important;
    }
    body.single-product .related.products ul.products {
        display: flex !important;
        gap: 20px !important;
        list-style: none !important;
        padding: 0 !important;
    }
    body.single-product .related.products ul.products li.product {
        flex: 1 !important;
    }
    body.single-product .related.products .mkd-pl-image {
        position: relative !important;
        width: 100% !important;
        padding-top: 100% !important;
        overflow: hidden !important;
        background: #f8f8f8 !important;
    }
    body.single-product .related.products .mkd-pl-image > img {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
    }

    /* ── Tab panels: hide all, show only active ── */
    body.single-product .woocommerce-Tabs-panel {
        display: none !important;
    }
    body.single-product .woocommerce-Tabs-panel.bkd-tab-active {
        display: block !important;
    }

    /* ── Reviews section ── */
    body.single-product .woocommerce-Reviews .commentlist {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    body.single-product .woocommerce-Reviews .commentlist .review {
        margin-bottom: 0 !important;
        padding: 0 !important;
    }
    body.single-product .woocommerce-Reviews .comment_container {
        display: flex !important;
        gap: 15px !important;
        padding: 20px 0 !important;
        margin: 0 !important;
        border-bottom: 1px solid #eee !important;
    }
    body.single-product .woocommerce-Reviews .comment_container > img {
        border-radius: 50% !important;
        flex-shrink: 0 !important;
        width: 60px !important;
        height: 60px !important;
        object-fit: cover !important;
    }
    body.single-product .woocommerce-Reviews .comment-text {
        flex: 1 !important;
    }
    body.single-product .woocommerce-Reviews .comment-text .meta {
        margin: 5px 0 10px !important;
        font-size: 13px !important;
        color: #888 !important;
    }
    body.single-product .woocommerce-Reviews .comment-text .meta strong {
        color: #1b1b1b !important;
        font-size: 14px !important;
    }
    body.single-product .woocommerce-Reviews .comment-text .description p {
        font-size: 14px !important;
        line-height: 1.6 !important;
        color: #555 !important;
        margin: 0 !important;
    }
    body.single-product .woocommerce-Reviews-title {
        font-size: 18px !important;
        margin-bottom: 10px !important;
        padding-bottom: 15px !important;
        border-bottom: 1px solid #eee !important;
    }

    /* ── Review form ── */
    body.single-product #review_form_wrapper {
        margin-top: 30px !important;
        padding-top: 20px !important;
        border-top: 1px solid #eee !important;
    }
    body.single-product .comment-reply-title {
        font-size: 18px !important;
        font-weight: 600 !important;
        display: block !important;
        margin-bottom: 15px !important;
    }
    body.single-product .comment-form label {
        display: block !important;
        font-size: 14px !important;
        margin-bottom: 5px !important;
        font-weight: 600 !important;
    }
    body.single-product .comment-form input[type="text"],
    body.single-product .comment-form input[type="email"],
    body.single-product .comment-form textarea {
        width: 100% !important;
        padding: 10px !important;
        border: 1px solid #ddd !important;
        font-size: 14px !important;
        box-sizing: border-box !important;
        margin-bottom: 15px !important;
    }
    body.single-product .comment-form textarea {
        resize: vertical !important;
        min-height: 120px !important;
    }
    body.single-product .comment-form select {
        padding: 8px 12px !important;
        border: 1px solid #ddd !important;
        font-size: 14px !important;
        margin-bottom: 15px !important;
    }
    body.single-product .comment-form .comment-form-cookies-consent {
        display: flex !important;
        align-items: flex-start !important;
        gap: 8px !important;
        font-size: 13px !important;
    }
    body.single-product .comment-form .comment-form-cookies-consent input {
        margin-top: 3px !important;
    }
    body.single-product #review_form .submit {
        background-color: #E8612D !important;
        border: none !important;
        color: #fff !important;
        padding: 12px 30px !important;
        cursor: pointer !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: background-color 0.3s ease !important;
    }
    body.single-product #review_form .submit:hover {
        background-color: #C0392B !important;
    }
    body.single-product .comment-form-rating {
        margin-bottom: 15px !important;
    }
    body.single-product .comment-notes {
        font-size: 13px !important;
        color: #888 !important;
        margin-bottom: 15px !important;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        body.single-product .mkd-single-product-content {
            flex-direction: column !important;
        }
        body.single-product .woocommerce-product-gallery,
        body.single-product .mkd-single-product-summary {
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }
    }
</style>

<!-- QUANTITY BUTTONS JS -->
<script>
(function(){
    var span  = document.getElementById('bkd-qty-value');
    var minus = document.getElementById('bkd-qty-minus');
    var plus  = document.getElementById('bkd-qty-plus');
    if (!span || !minus || !plus) return;

    minus.addEventListener('click', function(){
        var val = parseInt(span.textContent, 10) || 1;
        if (val > 1) span.textContent = val - 1;
    });
    plus.addEventListener('click', function(){
        var val = parseInt(span.textContent, 10) || 1;
        span.textContent = val + 1;
    });
})();
</script>

<!-- GALLERY SWITCHER JS -->
<script>
(function(){
    var mainImg  = document.getElementById('bkd-main-img');
    var mainLink = document.getElementById('bkd-main-link');
    var thumbs   = document.querySelectorAll('.bkd-thumb');
    if (!mainImg || !thumbs.length) return;

    thumbs.forEach(function(thumb){
        thumb.addEventListener('click', function(){
            var full = thumb.getAttribute('data-full');
            if (!full) return;

            // Fade out, swap, fade in
            mainImg.style.opacity = '0';
            setTimeout(function(){
                mainImg.src = full;
                if (mainLink) mainLink.href = full;
                mainImg.style.opacity = '1';
            }, 150);

            // Active state
            thumbs.forEach(function(t){ t.classList.remove('bkd-thumb--active'); });
            thumb.classList.add('bkd-thumb--active');
        });
    });
})();
</script>

<!-- TAB SWITCHING JS -->
<script>
(function(){
    var tabs = document.querySelectorAll('.woocommerce-tabs .tabs.wc-tabs li');
    var panels = document.querySelectorAll('.woocommerce-tabs .woocommerce-Tabs-panel');
    if (!tabs.length || !panels.length) return;

    // Activate first tab by default
    tabs[0].classList.add('active');
    panels[0].classList.add('bkd-tab-active');

    tabs.forEach(function(tab){
        tab.addEventListener('click', function(e){
            e.preventDefault();
            var target = tab.querySelector('a').getAttribute('href').replace('#','');

            // Deactivate all
            tabs.forEach(function(t){ t.classList.remove('active'); });
            panels.forEach(function(p){ p.classList.remove('bkd-tab-active'); });

            // Activate clicked
            tab.classList.add('active');
            var panel = document.getElementById(target);
            if (panel) panel.classList.add('bkd-tab-active');
        });
    });
})();
</script>

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
    var ALL_STATES = 'cursor--link cursor--partner cursor--slider cursor--text cursor--btn cursor--img cursor--menu';
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

</body>

</html>
