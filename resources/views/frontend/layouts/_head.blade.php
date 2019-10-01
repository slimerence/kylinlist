<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0f75ff">
    <meta name="theme-color" content="#2ddcd3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{ asset('images/branding/fav.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/branding/fav.png') }}" />

    <!-- Title -->
    <title>Kylinlist</title>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Dashboard Css -->
    <link href="/assets/css/dashboard_new.css" rel="stylesheet" />
    <link href="/assets/css/custom.css" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link rel="stylesheet" href="/assets/fonts/fonts/font-awesome.min.css">


    <!--Horizontal Menu-->
    <link href="/assets/plugins/Horizontal2/Horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet" />
    <link href="/assets/plugins/Horizontal2/Horizontal-menu/horizontal.css" rel="stylesheet" />
    <link href="/assets/plugins/Horizontal2/Horizontal-menu/color-skins/color.css" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- Cookie css -->
    <link href="/assets/plugins/cookie/cookie.css" rel="stylesheet">

    <!-- Zoom Plugin -->
    <link href="/assets/plugins/ecomerce/jquery.exzoom.css" rel="stylesheet" />

    <!-- Countdown css-->
    <link href="/assets/plugins/count-down/flipclock.css" rel="stylesheet" />

    <!-- Owl Theme css-->
    <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    @if(isset($sideBar))
    <!-- Sidemenu Css -->
    <link href="/assets/plugins/toggle-sidebar/sidemenu2.css" rel="stylesheet" />
    @endif

    <!-- Tabs Style -->
    <link href="/assets/plugins/tabs/style.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!--Font icons-->
    <link href="/assets/plugins/iconfonts/plugin.css" rel="stylesheet">
    <link href="/assets/plugins/iconfonts/icons.css" rel="stylesheet">
    @if(isset($vuejs))
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    @endif

</head>
