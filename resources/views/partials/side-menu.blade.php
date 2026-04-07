{{-- Side Menu with AJAX Login/User Info --}}
<section class="mkd-side-menu">
	<div class="mkd-close-side-menu-holder">
		<a class="mkd-close-side-menu" href="#" target="_self">
			<span aria-hidden="true" class="mkd-icon-font-elegant icon_close "></span>		</a>
	</div>
	<div id="media_image-4" class="widget mkd-sidearea widget_media_image"><img width="217" height="38" src="{{ asset('images/logo.jpg') }}" class="image wp-image-3390  attachment-full size-full" alt="a" loading="lazy" style="max-width: 100%; height: auto;" /></div>

	{{-- ── Login / User Info Section ── --}}
	<div class="bkd-auth-section widget mkd-sidearea">
		<div class="bkd-user-info" style="{{ Auth::check() ? '' : 'display:none' }}">
			<div class="bkd-user-avatar">
				<i class="fa fa-user-circle"></i>
			</div>
			<div class="bkd-user-details">
				<span class="bkd-user-greeting">Xin chào,</span>
				<span class="bkd-user-name">{{ Auth::user()?->name }}</span>
				<span class="bkd-user-email">{{ Auth::user()?->email }}</span>
			</div>
			<button type="button" class="bkd-logout-btn" id="bkd-logout-btn">
				<i class="fa fa-sign-out"></i> Đăng xuất
			</button>
			<a href="/admin" class="bkd-admin-link" id="bkd-admin-link" style="{{ Auth::user()?->hasAnyRole(['admin','emp']) ? '' : 'display:none' }}">
				<i class="fa fa-cogs"></i> Quản trị hệ thống
			</a>
		</div>

		<div class="bkd-login-box" style="{{ Auth::check() ? 'display:none' : '' }}">
			<div class="mkd-widget-title-holder"><h4 class="mkd-widget-title">Đăng nhập</h4></div>
			<div class="bkd-login-error" style="display:none"></div>
			<form class="bkd-login-form" id="bkd-login-form">
				<div class="bkd-form-group">
					<i class="fa fa-envelope"></i>
					<input type="email" name="email" placeholder="Email" required>
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

<script>
(function(){
    var csrfToken = '{{ csrf_token() }}';

    // ── LOGIN ──
    var loginForm = document.getElementById('bkd-login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var btn = loginForm.querySelector('.bkd-login-btn');
            var errBox = loginForm.closest('.bkd-login-box').querySelector('.bkd-login-error');
            btn.disabled = true;
            btn.textContent = 'Đang đăng nhập...';
            errBox.style.display = 'none';

            var fd = new FormData(loginForm);
            fd.append('_token', csrfToken);

            fetch('/login', {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
                body: fd,
                credentials: 'same-origin'
            })
            .then(function(r) { return r.json().then(function(d) { return {ok: r.ok, data: d}; }); })
            .then(function(res) {
                if (res.ok && res.data.success) {
                    var section = document.querySelector('.bkd-auth-section');
                    var userInfo = section.querySelector('.bkd-user-info');
                    var loginBox = section.querySelector('.bkd-login-box');
                    userInfo.querySelector('.bkd-user-name').textContent = res.data.user.name;
                    userInfo.querySelector('.bkd-user-email').textContent = res.data.user.email;
                    loginBox.style.display = 'none';
                    userInfo.style.display = '';
                    loginForm.reset();
                    // Show admin link if user has admin or emp role
                    var adminLink = document.getElementById('bkd-admin-link');
                    if (adminLink) {
                        var roles = res.data.user.roles || [];
                        adminLink.style.display = (roles.indexOf('admin') !== -1 || roles.indexOf('emp') !== -1) ? '' : 'none';
                    }
                } else {
                    errBox.textContent = res.data.message || 'Email hoặc mật khẩu không đúng.';
                    errBox.style.display = 'block';
                }
            })
            .catch(function() {
                errBox.textContent = 'Lỗi kết nối. Vui lòng thử lại.';
                errBox.style.display = 'block';
            })
            .finally(function() {
                btn.disabled = false;
                btn.textContent = 'Đăng nhập';
            });
        });
    }

    // ── LOGOUT ──
    var logoutBtn = document.getElementById('bkd-logout-btn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            logoutBtn.disabled = true;

            var fd = new FormData();
            fd.append('_token', csrfToken);

            fetch('/logout', {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
                body: fd,
                credentials: 'same-origin'
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.csrf) csrfToken = data.csrf;
                var section = document.querySelector('.bkd-auth-section');
                section.querySelector('.bkd-user-info').style.display = 'none';
                section.querySelector('.bkd-login-box').style.display = '';
                var adminLink = document.getElementById('bkd-admin-link');
                if (adminLink) adminLink.style.display = 'none';
            })
            .catch(function() {
                window.location.reload();
            })
            .finally(function() {
                logoutBtn.disabled = false;
            });
        });
    }
})();
</script>
