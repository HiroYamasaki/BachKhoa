/* ── BKD Auth Section in Side Menu ── */
.bkd-auth-section {
    padding: 20px 0 15px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    margin-bottom: 10px;
}

/* Login Box */
.bkd-login-box .mkd-widget-title-holder {
    margin-bottom: 15px;
}
.bkd-login-box .mkd-widget-title {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.bkd-login-error {
    background: rgba(231, 76, 60, 0.15);
    border-left: 3px solid #e74c3c;
    color: #e74c3c;
    padding: 8px 12px;
    font-size: 13px;
    margin-bottom: 12px;
    border-radius: 2px;
}
.bkd-login-form .bkd-form-group {
    position: relative;
    margin-bottom: 12px;
}
.bkd-login-form .bkd-form-group i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 14px;
}
.bkd-login-form .bkd-form-group input {
    width: 100%;
    padding: 10px 12px 10px 36px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    color: #fff;
    font-size: 14px;
    border-radius: 3px;
    outline: none;
    transition: border-color 0.3s;
    box-sizing: border-box;
}
.bkd-login-form .bkd-form-group input::placeholder {
    color: rgba(255,255,255,0.4);
}
.bkd-login-form .bkd-form-group input:focus {
    border-color: #E8612D;
}
.bkd-remember {
    display: flex;
    align-items: center;
    gap: 6px;
    color: rgba(255,255,255,0.6);
    font-size: 13px;
    margin-bottom: 14px;
    cursor: pointer;
}
.bkd-remember input[type="checkbox"] {
    accent-color: #E8612D;
}
.bkd-login-btn {
    width: 100%;
    padding: 11px 0;
    background: #E8612D;
    color: #fff;
    border: none;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    border-radius: 3px;
    transition: background 0.3s;
}
.bkd-login-btn:hover {
    background: #C0392B;
}

/* User Info (logged in) */
.bkd-user-info {
    text-align: center;
}
.bkd-user-avatar {
    margin-bottom: 10px;
}
.bkd-user-avatar i {
    font-size: 48px;
    color: #E8612D;
}
.bkd-user-details {
    margin-bottom: 14px;
}
.bkd-user-greeting {
    display: block;
    color: rgba(255,255,255,0.5);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 2px;
}
.bkd-user-name {
    display: block;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 2px;
}
.bkd-user-email {
    display: block;
    color: rgba(255,255,255,0.5);
    font-size: 13px;
}
.bkd-logout-form {
    margin-top: 5px;
}
.bkd-logout-btn {
    display: inline-block;
    padding: 8px 24px;
    background: transparent;
    border: 1px solid rgba(255,255,255,0.25);
    color: rgba(255,255,255,0.7);
    font-size: 13px;
    cursor: pointer;
    border-radius: 3px;
    transition: all 0.3s;
}
.bkd-logout-btn:hover {
    border-color: #E8612D;
    color: #E8612D;
}
