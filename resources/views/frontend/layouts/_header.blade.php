<!--Topbar-->
<div class="header-main">
    @include(_get_frontend_layout_path('navs.top'))
    @include(_get_frontend_layout_path('navs.mobile'))

    <div class="horizontal-main clearfix">
        <div class="horizontal-mainwrapper container clearfix d-flex align-items-center justify-content-between">
            <div class="desktoplogo" style="flex: 0 0 240px;">
                <a href="{{ url('/') }}"><img src="{{ asset('images/branding/logo.png') }}" alt="Kylinlist Logo"></a>
            </div>
            @include(_get_frontend_layout_path('navs.menu'))
        </div>
    </div>
</div>
