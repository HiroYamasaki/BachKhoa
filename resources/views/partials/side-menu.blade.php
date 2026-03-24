{{-- Side Menu with Login/User Info --}}
<section class="mkd-side-menu">
	<div class="mkd-close-side-menu-holder">
		<a class="mkd-close-side-menu" href="#" target="_self">
			<span aria-hidden="true" class="mkd-icon-font-elegant icon_close "></span>		</a>
	</div>
	<div id="media_image-4" class="widget mkd-sidearea widget_media_image"><img width="217" height="38" src="{{ asset('images/logo.jpg') }}" class="image wp-image-3390  attachment-full size-full" alt="a" loading="lazy" style="max-width: 100%; height: auto;" /></div>

	{{-- ── Login / User Info Section ── --}}
	<div class="bkd-auth-section widget mkd-sidearea">
		@auth
		<div class="bkd-user-info">
			<div class="bkd-user-avatar">
				<i class="fa fa-user-circle"></i>
			</div>
			<div class="bkd-user-details">
				<span class="bkd-user-greeting">Xin chào,</span>
				<span class="bkd-user-name">{{ Auth::user()->name }}</span>
				<span class="bkd-user-email">{{ Auth::user()->email }}</span>
			</div>
			<form method="POST" action="{{ route('logout') }}" class="bkd-logout-form">
				@csrf
				<input type="hidden" name="redirect" value="{{ url()->current() }}">
				<button type="submit" class="bkd-logout-btn">
					<i class="fa fa-sign-out"></i> Đăng xuất
				</button>
			</form>
		</div>
		@else
		<div class="bkd-login-box">
			<div class="mkd-widget-title-holder"><h4 class="mkd-widget-title">Đăng nhập</h4></div>
			@if($errors->has('email'))
			<div class="bkd-login-error">{{ $errors->first('email') }}</div>
			@endif
			<form method="POST" action="{{ route('login') }}" class="bkd-login-form">
				@csrf
				<input type="hidden" name="redirect" value="{{ url()->current() }}">
				<div class="bkd-form-group">
					<i class="fa fa-envelope"></i>
					<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
				</div>
				<div class="bkd-form-group">
					<i class="fa fa-lock"></i>
					<input type="password" name="password" placeholder="Mật khẩu" required>
				</div>
				<label class="bkd-remember">
					<input type="checkbox" name="remember"> Ghi nhớ đăng nhập
				</label>
				<button type="submit" class="bkd-login-btn">Đăng nhập</button>
			</form>
		</div>
		@endauth
	</div>

	<div id="text-7" class="widget mkd-sidearea widget_text"><div class="textwidget"><p>Bach Khoa Digital — Đối tác chuyển đổi số tin cậy của doanh nghiệp Việt Nam.</p></div></div>
	<div id="text-8" class="widget mkd-sidearea widget_text"><div class="mkd-widget-title-holder"><h4 class="mkd-widget-title">Contact</h4></div><div class="textwidget"></div></div>
        <a class="mkd-icon-widget-holder" href="#" target="_self" style="margin: -20px 0 0 0">
                        <span class="mkd-icon-text mkd-no-icon fa fa-map-marker      mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">105 Trần Thị Nơi,</span></span>        </a>
        <a class="mkd-icon-widget-holder" href="#" target="_self" style="margin: -20px 0 0 20px">
                        <span class="mkd-icon-text mkd-no-icon      " style="font-size: 15px"><span class="mkd-icon-text-inner" style="color: #fff">Quận 8, TP. Hồ Chí Minh</span></span>        </a>
        <a class="mkd-icon-widget-holder" href="tel:+84903646288" target="_self" style="margin: 20px 0px 0">
                        <span class="mkd-icon-text mkd-no-icon fa fa-phone      mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">0903 646 288</span></span>        </a>
        <a class="mkd-icon-widget-holder" href="#" target="_self" style="margin: 0 0 20px 28px">
                        <span class="mkd-icon-text mkd-no-icon      " style="font-size: 15px"><span class="mkd-icon-text-inner" style="color: #fff">Thứ 2 - Thứ 7, 8:00 - 17:30</span></span>        </a>
        <a class="mkd-icon-widget-holder" href="mailto:info@bachkhoadigital.com" target="_self" style="margin: 0 0 50px 0">
                        <span class="mkd-icon-text mkd-no-icon fa fa-envelope-o      mkd-icon-has-hover" style="color: #E8612D;font-size: 15px" data-hover-color="#C0392B"><span class="mkd-icon-text-inner" style="color: #fff">info@bachkhoadigital.com</span></span>        </a>
    <div id="text-9" class="widget mkd-sidearea widget_text"><div class="mkd-widget-title-holder"><h4 class="mkd-widget-title">Share</h4></div><div class="textwidget"></div></div>		
		<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: -45px 0 0;" href="https://www.facebook.com/QodeInteractive/" target="_blank">
			<span class="mkd-social-icon-widget fa fa-facebook     "></span>		</a>
		<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: -45px 18px 0px;" href="https://plus.google.com/" target="_blank">
			<span class="mkd-social-icon-widget fa fa-google-plus     "></span>		</a>
		<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: -45px 0 0;" href="https://www.instagram.com/qodeinteractive/" target="_blank">
			<span class="mkd-social-icon-widget fa fa-instagram     "></span>		</a>
		<a class="mkd-social-icon-widget-holder mkd-icon-has-hover" data-hover-color="#C0392B" style="color: #fff;;font-size: 14px;margin: -45px 0 0 20px;" href="https://www.pinterest.com/qodeinteractive/" target="_blank">
			<span class="mkd-social-icon-widget fa fa-pinterest     "></span>		</a>
</section>
