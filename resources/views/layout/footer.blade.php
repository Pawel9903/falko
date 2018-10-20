
<!-- subfooter -->
<section aria-label="footer" class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="logo">
                    {{--<img alt="logo" src="img/logo.png">--}}
                </div>

                <p>
                    {{ $info->description }}
                </p>
            </div>

            <div class="col-md-3 col-xs-12">
                <h3>
                    CONTACT INFO
                </h3>

                <address>
                    <span>{{ $info->address }}</span> <span><strong>PHONE:</strong> {{ $info->phone }}</span> <span><strong>EMAIL:</strong> <a href="mailto:{{$info->email}}">{{$info->email}}</a></span> <span><strong>SITE:</strong> <a href="{{$info->site}}">{{$info->site}}</a></span>
                </address>
            </div>

            <div class="col-md-3 col-xs-12">

                <h3>
                    RECENT POSTS
                </h3>

                <div class="recent">
                    <a href="#">
                        <div class="date">
                            <div class="month">
                                <span class="date-month">22</span> <span class="name-month">APR</span>
                            </div>
                        </div>

                        <div class="news">
                            Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante
                        </div></a>
                </div>

                <div class="recent">
                    <a href="#">
                        <div class="date">
                            <div class="month">
                                <span class="date-month">22</span> <span class="name-month">APR</span>
                            </div>
                        </div>

                        <div class="news">
                            Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante
                        </div></a>
                </div>

                <div class="recent">
                    <a href="#">
                        <div class="date">
                            <div class="month">
                                <span class="date-month">22</span> <span class="name-month">APR</span>
                            </div>
                        </div>

                        <div class="news">
                            Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante
                        </div></a>
                </div>

            </div>

            <div class="col-md-3 col-xs-12">
                <h3>
                    PHOTO STREAM
                </h3>
                <div id="flickr-photo-stream">
                    <script src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08" type="text/javascript">
                    </script>
                    <div class="clearfix">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- subfooter end -->
<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                © PG 2018. all rights reseverd.
            </div>

            <div class="col-md-6">
                <div class="right">
                    <div class="footer-icons">
                        <a  href="{{ $info->fb }}"><span class="ti-facebook"></span></a>
                        <a  href="{{ $info->twitter }}"><span class="ti-twitter"></span></a>
                        <a  href="{{ $info->instagram }}"><span class="ti-instagram"></span></a>
                        <a  href="{{ $info->linkedin }}"><span class="ti-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->


