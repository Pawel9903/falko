@include('layout.head')
    <body class="home">
    <!-- preloader -->
    <div class="bg-preloader"></div>
    <div class="preloader">
        <div class="mainpreloader">
            <img class="logo-preloader" alt="preloaderlogo" src="{{ asset('img/logo-preloader.png') }}"> <span>loading</span>
        </div>
    </div>

    @include('layout.top_menu')
    <!-- preloader end -->
<!-- main menu -->
<!-- content wraper -->
<div class="content-wrapper">

    <!-- home -->
    <!-- background slider -->
    <div id="home">

        <!-- main gallery big -->
        <div class="owl-carousel" id="owl-slider-home">
            @foreach($sliders as $slider)

                <div class="item imgbg" style="background-image:url('{{ asset('storage/'.$slider->image) }}')">
                    <!-- intro -->
                    <div class="overlay-main v-align">
                        <div class="col-md-10 col-xs-11">
                            <h1 class="onStep" data-animation="fadeInDown" data-time="900">
                                 {{ $slider->subheader }}
                            </h1>

                            <h3 class="onStep" data-animation="fadeInLeft" data-time="600">
                                {{ $slider->header }}
                            </h3>

                            <div class="btn-main onStep" data-animation="fadeInUp" data-time="1200">
                                <a href="{{ $slider->link }}">Sprawdź<span class="ti-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- intro end -->
                </div>

            @endforeach

        </div>
        <!-- main gallery big end -->

        <!-- Status slider -->
        <div id="owlStatus">
            <div class="owlItems">
                <div class="result">
                </div>
            </div>

            <div class="seperator">
                /
            </div>

            <div class="currentItem">
                <div class="result">
                </div>
            </div>
        </div>
        <!-- Status slider end -->

        <!-- toggle gallery -->
        <div class="nav-bottom">
            <div id="opengal">
                <i class="fa fa-angle-up"></i>
            </div>
        </div>
        <!-- toggle gallery end -->

        <!-- gallery -->
        <div class="bottom-option">
            <!-- close gallery -->
            <div class="nav-bottom-close">
                <span>x</span>
            </div>
            <!-- close gallery end -->

            <!-- main gallery small -->
            <div id="projectsSmall" class="owl-carousel">
                @foreach($sliders as $slider)
                    <div class="item"><img alt="{{ $slider->header }}" src="{{ asset('storage/'.$slider->image) }}"></div>
                @endforeach
            </div>
            <!-- main gallery small end -->


        </div>
        <!-- gallery end -->


        <!-- info gallery -->
        <!-- button gallery -->
        <div class="info-gal">
            <span>+</span>
        </div>
        <!-- button gallery -->

        <!-- main info gallery -->
        <div class="main-info-gal">
            <div class="block-info-gal"></div>
            <!-- button close -->
            <div class="info-gal-close">
                <span>x</span>
            </div>
            <!-- button close end -->

            <!-- content -->
            <div class="overlay-main-info v-align">
                <div class="col-md-5 col-xs-11">
                    <h2>
                        Stock Art Photography
                    </h2>

                    <p>
                        velit pariatur quis aute minim dolor reprehenderit in pariatur amet sit et est aute sunt id consequat amet nostrud non exercitation laboris Excepteur ex anim sint adipisicing enim id anim dolore do sint.
                    </p>

                    <p>D / Maiden / Photographer<br>
                        e-mail <a href="mailto:desmon25@live.com">desmon25@live.com</a>
                    </p>
                    <p>07 / 08 / 2017</p>

                </div>
            </div>
            <!-- content end -->
        </div>
        <!-- main info gallery -->
        <!-- info gallery end -->

    </div>
    <!-- background slider end -->
    <!-- home end -->

    <!-- ScrolltoTop -->
    <div id="totop">
        <span class="ti-angle-up"></span>
    </div>
    <!-- ScrolltoTop end -->

</div>
<!-- content wraper end -->

    {{--<script src="{{ asset('js/template.js') }}" type="text/javascript"></script>--}}
    <!-- plugin JS -->
    <script src="{{ asset('plugin/pluginsstock.js') }}" type="text/javascript"></script>
    <!-- stock JS -->
    <script src="{{ asset('js/stock.js') }}" type="text/javascript"></script>
    </body>
</html>