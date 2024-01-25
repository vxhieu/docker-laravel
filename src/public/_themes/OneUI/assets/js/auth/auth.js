/**
 *
 * Author: HieuVx - Created Date:24/01/2024
 * **/
$(document).ready(function() {
    $('#signin-button').on('click', function(event) {
        event.preventDefault(); // Prevent the default form submission
        const LOGIN_ENDPOINT = '/api/auth/login';
        const COOKIE_NAME = 'portal_ecommerce';
        var username = $('#login-username').val();
        var password = $('#login-password').val();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: LOGIN_ENDPOINT,
            data: {
                username: username,
                password: password,
            },
            success: function(response) {
                var token = response.token;
                var tokenExpires = response.token_expires_in;
                saveToken(COOKIE_NAME, token, tokenExpires);
                window.location.href = '/admin/dashboard';
            },
            error: function(error) {
                console.error('Login failed:', error);
            }
        });
    });
    function saveToken(name, token, expirationDate) {
        document.cookie = name + "=" + 'token=' + token + '; expires=' + expirationDate + '; path=/';
    }
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(";").shift();
    }

});
