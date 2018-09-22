<!-- nav -->
<div class="navbar-default navbar-fixed-top">
    <div class="container-fluid">

        <div class="lang-container">
            <nav>
                <ul class = "lang_menu">
                    <li class = "language {{ (Config::get('app.locale') == 'pl') ? 'active' : '' }}"><a href ="{{ url('/locale/pl') }}"><img src="{{ asset('images/lang-pl.png') }}" width="16" height="16">  Polski</a></li>
                    <li class = "language {{ (Config::get('app.locale') == 'en') ? 'active' : '' }}"><a href ="{{ url('/locale/en') }}"><img src="{{ asset('images/lang-en.png') }}" width="16" height="16">  English</a></li>
                </ul>
            </nav>
        </div>
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
                        <li class="onStep" data-animation="fadeInRight" data-time="100"><a class="actived link" href="{{ route('page.index') }}">Home</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="300"><a class="link"  href="{{ route('page.gallery') }}">Gallery</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="200"><a class="link" href="about-clasic.html">About Me</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="600"><a class="link"  href="contact-clasic.html">Offer</a></li>
                        <li class="onStep" data-animation="fadeInRight" data-time="600"><a  href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- mainmenu end -->

        </div>
    </div>
    <!-- container -->
</div>
<!-- nav end -->