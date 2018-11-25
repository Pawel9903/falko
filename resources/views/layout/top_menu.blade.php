<!-- nav -->
<div class="navbar-default navbar-fixed-top">
    <div class="container-fluid">

        {{--<div class="lang-container">--}}
            {{--<nav>--}}
                {{--<ul class = "lang_menu">--}}
                    {{--<li class = "language {{ (Config::get('app.locale') == 'pl') ? 'active' : '' }}"><a href ="{{ url('/locale/pl') }}"><img src="{{ asset('images.blade.php/lang-pl.png') }}" width="16" height="16">  Polski</a></li>--}}
                    {{--<li class = "language {{ (Config::get('app.locale') == 'en') ? 'active' : '' }}"><a href ="{{ url('/locale/en') }}"><img src="{{ asset('images.blade.php/lang-en.png') }}" width="16" height="16">  English</a></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        {{--</div>--}}
        <div class="row">

            <!-- menu mobile display -->
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span></button>

            <!-- logo -->
        {{--<a class="navbar-brand" href="index.html"><img alt="logo" src=""></a>--}}

        <!-- mainmenu start -->
            <div class="menu-init" id="main-menu">
                <nav>
                    <ul>
                        <li class="onStep" data-animation="fadeInRight" data-time="100"><a class="{{ \Request::route()->getName()
 ==  'page.index' ? 'actived' : ''}} link" href="{{ route('page.index') }}">@lang('messages.home')</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="300"><a class="{{ \Request::route()->getName()
 ==  'page.gallery' || \Request::route()->getName()
 ==  'page.gallery.categories'? 'actived' : ''}} link"  href="{{ route('page.gallery.categories') }}">@lang('messages.gallery')</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="200"><a class="{{ \Request::route()->getName()
 ==  'page.about' ? 'actived' : ''}} link" href="{{ route('page.about') }}">@lang('messages.about')</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="600"><a class="{{ \Request::route()->getName()
 ==  'page.offer' ? 'actived' : ''}} link"  href="{{ route('page.offer') }}">@lang('messages.offer')</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="600"><a class="{{ \Request::route()->getName()
 ==  'page.contact' ? 'actived' : ''}} link"  href="{{ route('page.contact') }}">@lang('messages.contact')</a></li>
                        @if(Config::get('app.locale') == 'en')
                            <li  data-animation="fadeInRight" data-time="600" class="onStep {{ (Config::get('app.locale') == 'pl') ? 'active' : '' }}"><a class="link" href ="{{ url('/locale/pl') }}">  Polski</a></li>
                        @elseif(Config::get('app.locale') == 'pl')
                            <li  data-animation="fadeInRight" data-time="600" class="onStep {{ (Config::get('app.locale') == 'en') ? 'active' : '' }}"><a class="link" href ="{{ url('/locale/en') }}">  English</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <!-- mainmenu end -->

        </div>
    </div>
    <!-- container -->
</div>
<!-- nav end -->