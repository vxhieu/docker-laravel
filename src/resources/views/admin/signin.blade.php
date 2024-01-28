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
    @vite(['resources/js/main.js'])
</head>
<body >
<div id="app">
</div>
</body>
<script src="{{ asset('_themes/OneUI/assets/js/oneui.app.min.js')}}"></script>

<!-- jQuery (required for jQuery Validation plugin) -->

<script src="{{ asset('_themes/OneUI/assets/js/lib/jquery.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('_themes/OneUI/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{ asset('_themes/OneUI/assets/js/pages/op_auth_signin.min.js')}}"></script>
{{--<script  src="{{ asset('_themes/OneUI/assets/js/auth/auth.js')}}" defer="defer"></script>--}}
<script src="{{ asset('_themes/OneUI/assets/js/oneui.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('_themes/js/plugins/chart.js/chart.umd.js')}}"></script>

<!-- Page JS Code -->
<script  src="{{ asset('_themes/js/pages/be_pages_dashboard_v1.min.js')}}

</body>
</html>
