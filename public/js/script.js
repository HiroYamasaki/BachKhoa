// === Google Tag Manager - dataLayer setup ===
var gtm4wp_datalayer_name = "dataLayer";
var dataLayer = dataLayer || [];

// === WP Emoji Settings ===
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/baumeister.qodeinteractive.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.11"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);

// === WooCommerce Add To Cart Params ===
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/baumeister.qodeinteractive.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};

// === Google Tag Manager - dataLayer content ===
var dataLayer_content = {"pagePostType":"frontpage","pagePostType2":"single-page","pagePostAuthor":"admin"};
dataLayer.push( dataLayer_content );

// === Google Tag Manager - init ===
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTQ2BTD');

// === Revolution Slider - setREVStartSize ===
function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };

// === Revolution Slider 1 - init call ===
setREVStartSize({c: 'rev_slider_1_1',rl:[1920,1720,778,480],el:[970,670,800,500],gw:[1300,800,600,300],gh:[970,670,800,500],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider11"]!==undefined) {window.RS_MODULES.modules["revslider11"].once = false;window.revapi1 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}

// === Revolution Slider 12 - init call ===
setREVStartSize({c: 'rev_slider_12_2',rl:[1920,1720,778,480],el:[800,600,600,500],gw:[1300,800,600,300],gh:[800,600,600,500],type:'hero',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider122"]!==undefined) {window.RS_MODULES.modules["revslider122"].once = false;window.revapi12 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}

// === RS_MODULES setup ===
window.RS_MODULES = window.RS_MODULES || {};
window.RS_MODULES.modules = window.RS_MODULES.modules || {};
window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
window.RS_MODULES.defered = false;
window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
window.RS_MODULES.type = 'compiled';

// === WooCommerce - JS class fix ===
(function () {
	var c = document.body.className;
	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
	document.body.className = c;
})();

// === Revolution Slider - double jQuery error check ===
if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}

// === Contact Form 7 params ===
var wpcf7 = {"api":{"root":"https:\/\/baumeister.qodeinteractive.com\/wp-json\/","namespace":"contact-form-7\/v1"}};

// === WooCommerce params ===
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};

// === WooCommerce Cart Fragments params ===
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_2e8d52155cfc814f182a3f4fb6df83ed","fragment_name":"wc_fragments_2e8d52155cfc814f182a3f4fb6df83ed","request_timeout":"5000"};

// === WP User Avatar (ppress) params ===
var pp_ajax_form = {"ajaxurl":"https:\/\/baumeister.qodeinteractive.com\/wp-admin\/admin-ajax.php","confirm_delete":"Are you sure?","deleting_text":"Deleting...","deleting_error":"An error occurred. Please try again.","nonce":"cc863a4005","disable_ajax_form":"false","is_checkout":"0","is_checkout_tax_enabled":"0"};

// === MediaElement L10n ===
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};

// === MediaElement JS Settings ===
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};

// === Baumeister Mikado Global Vars ===
var mkdGlobalVars = {"vars":{"mkdAddForAdminBar":0,"mkdElementAppearAmount":-100,"mkdAjaxUrl":"https:\/\/baumeister.qodeinteractive.com\/wp-admin\/admin-ajax.php","mkdStickyHeaderHeight":70,"mkdStickyHeaderTransparencyHeight":70,"mkdTopBarHeight":60,"mkdLogoAreaHeight":0,"mkdMenuAreaHeight":160,"mkdMobileHeaderHeight":70}};
var mkdPerPageVars = {"vars":{"mkdStickyScrollAmount":1000,"mkdHeaderTransparencyHeight":0,"mkdHeaderVerticalWidth":0}};

// === Revolution Slider - Initialisation Scripts ===
var	tpj = jQuery;

var	revapi1,revapi12;

if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider11"] = {once: RS_MODULES.modules["revslider11"]!==undefined ? RS_MODULES.modules["revslider11"].once : undefined, init:function() {
	window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
	if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
	window.revapi1 = jQuery(window.revapi1);
	if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
	revapi1.revolutionInit({
			revapi:"revapi1",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			duration:3000,
			visibilityLevels:"1920,1720,778,480",
			gridwidth:"1300,800,600,300",
			gridheight:"970,670,800,500",
			lazyType:"smart",
			perspective:600,
			perspectiveType:"local",
			editorheight:"970,670,800,500",
			responsiveLevels:"1920,1720,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				mouseScrollNavigation:false,
				wheelCallDelay:1000,
				onHoverStop:false,
				arrows: {
					enable:true,
					style:"mikado-gyges",
					hide_onmobile:true,
					hide_under:1025,
					left: {
						h_offset:0
					},
					right: {
						h_offset:0
					}
				},
				bullets: {
					enable:true,
					tmp:"",
					style:"mikado-gyges",
					hide_over:1024,
					v_offset:120,
					space:20
				}
			},
			parallax: {
				levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
				type:"mouse"
			},
			fanim: {
				in:{"o":0},
				out:{"a":false},
				speed:300
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:false,
				visible_area:"20%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript

if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider122"] = {once: RS_MODULES.modules["revslider122"]!==undefined ? RS_MODULES.modules["revslider122"].once : undefined, init:function() {
	window.revapi12 = window.revapi12===undefined || window.revapi12===null || window.revapi12.length===0  ? document.getElementById("rev_slider_12_2") : window.revapi12;
	if(window.revapi12 === null || window.revapi12 === undefined || window.revapi12.length==0) { window.revapi12initTry = window.revapi12initTry ===undefined ? 0 : window.revapi12initTry+1; if (window.revapi12initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider122"].init()}); return;}
	window.revapi12 = jQuery(window.revapi12);
	if(window.revapi12.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_12_2"); return;}
	revapi12.revolutionInit({
			revapi:"revapi12",
			sliderType:"hero",
			DPR:"dpr",
			sliderLayout:"fullwidth",
			visibilityLevels:"1920,1720,778,480",
			gridwidth:"1300,800,600,300",
			gridheight:"800,600,600,500",
			lazyType:"smart",
			perspective:600,
			perspectiveType:"local",
			editorheight:"800,600,600,500",
			responsiveLevels:"1920,1720,778,480",
			progressBar:{disableProgressBar:true},
			navigation: {
				onHoverStop:false
			},
			parallax: {
				levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
				type:"mouse"
			},
			viewPort: {
				global:true,
				globalDist:"-200px",
				enable:true,
				visible_area:"1%"
			},
			fallbacks: {
				allowHTML5AutoPlayOnAndroid:true
			},
	});
	
}} // End of RevInitScript

if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};

// === Pie Chart Initialization ===
jQuery(window).on('load', function() {
    if (!jQuery.fn.easyPieChart) return;
    jQuery('.mkd-pc-percentage').each(function() {
        var $el = jQuery(this);
        if ($el.data('easyPieChart')) return;
        var percent = parseInt($el.data('percent'), 10) || 0;
        var barColor = $el.data('bar-color') || '#E8612D';
        var trackColor = $el.data('track-color') || '#eeeeee';
        $el.easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 4,
            size: 174,
            animate: 1500,
            onStep: function(from, to, currentValue) {
                $el.find('.mkd-pc-percent').text(Math.round(currentValue));
            }
        });
    });
});
