<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
          content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('_themes/OneUI/assets/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{ asset('_themes/OneUI/assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('_themes/OneUI/assets/media/favicons/apple-touch-icon-180x180.png')}}">

    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('_themes/OneUI/assets/css/oneui.min.css')}}">
    <link rel="stylesheet" id="css-main"
          href="{{ asset('_themes/OneUI/assets/media/favicons/apple-touch-icon-180x180.png')}}">
</head>
<body>
<!-- Page Content -->
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="hero-static d-flex align-items-center">
            <div class="content">
                <div class="row justify-content-center push">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <!-- Sign In Block -->
                        <div class="block block-rounded mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Sign In</h3>
                                <div class="block-options">
                                    <a class="btn-block-option fs-sm" href="op_auth_reminder.html">Forgot Password?</a>
                                    <a class="btn-block-option" href="op_auth_signup.html" data-bs-toggle="tooltip"
                                       data-bs-placement="left" title="New Account">
                                        <i class="fa fa-user-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                                    <p class="fw-medium text-muted">
                                        Welcome, please login.
                                    </p>

                                    <!-- Sign In Form -->
                                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-signin">
                                        @csrf
                                        <div class="py-3">
                                            <div class="mb-4">
                                                <input type="text" class="form-control form-control-alt form-control-lg"
                                                       id="login-username" name="login-username" placeholder="Username">
                                            </div>
                                            <div class="mb-4">
                                                <input type="password"
                                                       class="form-control form-control-alt form-control-lg"
                                                       id="login-password" name="login-password" placeholder="Password">
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="login-remember" name="login-remember">
                                                    <label class="form-check-label" for="login-remember">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6 col-xl-5">
                                                <button  class="btn w-100 btn-alt-primary" id="signin-button">
                                                    <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
                <div class="fs-sm text-muted text-center">
                    <strong>Created by FGC Techlution</strong> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Content -->

<script src="{{ asset('_themes/OneUI/assets/js/oneui.app.min.js')}}"></script>

<!-- jQuery (required for jQuery Validation plugin) -->

<script src="{{ asset('_themes/OneUI/assets/js/lib/jquery.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('_themes/OneUI/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Page JS Code -->
<script  src="{{ asset('_themes/OneUI/assets/js/pages/op_auth_signin.min.js')}}"></script>
<script  src="{{ asset('_themes/OneUI/assets/js/auth/auth.js')}}" defer="defer"></script>
</body>
</html>
