@include('layout.head')
    <body>
        <div class="content-wrapper">

            @include('layout.top_menu')

                <!-- preloader -->
                <div class="bg-preloader"></div>
                <div class="preloader">
                    <div class="mainpreloader">
                        <img class="logo-preloader" alt="preloaderlogo" src="{{ asset('img/logo-preloader.png') }}"> <span>@lang('messages.loading')</span>
                    </div>
                </div>
                <!-- preloader end -->

                @yield('content')
                @yield('footer')

            <!-- ScrolltoTop -->
                <div id="totop">
                    <span class="ti-angle-up"></span>
                </div>
                <!-- ScrolltoTop end -->
            {{--<script src="{{ asset('js/template.js') }}" type="text/javascript"></script>--}}
            <!-- plugin JS -->
                <script src="{{ asset('plugin/pluginsstock.js') }}" type="text/javascript"></script>
                <!-- stock JS -->
                <script src="{{ asset('js/stock.js') }}" type="text/javascript"></script>
                <script src="{{ asset('vendor/jscroll/dist/jquery.jscroll.min.js') }}" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.7/jquery.jscroll.min.js"></script>

                @yield('script')
        </div>
    </body>
</html>