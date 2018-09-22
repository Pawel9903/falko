@extends('layout.master')

@section('content')
    <!-- preloader -->
    <div class="bg-preloader"></div>
    <div class="preloader">
        <div class="mainpreloader">
            <img class="logo-preloader" alt="preloaderlogo" src="{{ asset('img/logo-preloader.png') }}"> <span>loading</span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- content wraper -->
    <div class="content-wrapper">
        <!-- subtitle -->
        <div class="container-fluid">
            <div class="row">
                <div class="no-gutter">

                    <!-- main subtitle -->
                    <div class="onStep" data-animation="fadeInLeft" data-time="0">
                        <div class="imgbg-page" style="background-image:url('{{ asset('storage/'.$gallery->image) }}')"></div>

                        <!-- subtitle -->
                        <div class="col-md-12 overlay-clasic">
                            <div class="subtitle">
                                <h2>
                                    {{ $gallery->header }}
                                </h2>
                            </div>
                        </div>
                        <!-- subtitle end -->

                    </div>
                    <!-- main subtitle end -->

                </div>
            </div>
        </div>
        <!-- subtitle end -->

        <!-- section -->
        <section class="whitepage no-top no-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-gutter">

                        <!-- col -->
                        <div class="col-md-12 p-90 gallery-div">
                            <div class="sp-padding">

                                <!-- filter project -->
                                <div class="onStep" data-animation="fadeInUp" data-time="900">
                                    <div class="filter-wraper">
                                        <ul id="filter-porto">

                                            @foreach($categories as $category)
                                                <li class="filt-projects c-categories" data-project="{{ '.pho_'.$category->id }}">{{ $category->name }}
                                                </li>
                                            @endforeach

                                            <li class="filt-projects active c-categories" data-project="*">ALL ALBUM
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- filter project end -->

                                <!-- start gallery -->
                                <div class="no-gutter onStep" data-animation="fadeInUp" data-time="600" id="projects-wrap">
                                    <div class="row">
                                        @foreach($categories as $category)
                                            @foreach($category->images as $image)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pers {{ 'pho_'.$category->id }} ">
                                                    <div class="gal-pro big-img">
                                                        <a title="{{ $image->name }}" href="{{ 'storage/'.$image->image }}">
                                                            <div class="hovereffect">
                                                                <img alt="imageportofolio" class="img-responsive" src="{{ 'storage/'.$image->image }}">
                                                                <div class="overlay">
                                                                    <h3>
                                                                        {{ $category->name }}
                                                                    </h3>
                                                                    <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                                <!-- gallery end -->

                                <!-- spacer -->
                                <div class="space-half"></div>
                                <!-- spacer -->

                                <div class="btn-load onStep" data-animation="fadeInDown" data-time="300">
                                    <a href="#">Loadmore</a>
                                </div>

                            </div>
                        </div>
                        <!-- col end -->

                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->


        <section class="yellowpage">
            <div class="container">
                <div class="row">

                    <div class="col-md-7 pull-left">
                        <div class="onStep" data-animation="fadeInLeft" data-time="300">
                            <div class="main-text onStep" data-animation="fadeInLeft" data-time="300">
                                Quisquam deserunt nostrum venenatis consectetuer?
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="right">
                            <div class="btn-yellow onStep" data-animation="fadeInRight" data-time="600">
                                <a href="#">Let us know</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- subfooter -->
        <section aria-label="footer" class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="logo">
                            {{--<img alt="logo" src="img/logo.png">--}}
                        </div>

                        <p>
                            Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida
                            id, odio. Maecenas suscipit, risus et eleifend imperdiet, nisi orci ullamcorper massa adipiscing.
                        </p>
                    </div>

                    <div class="col-md-3 col-xs-12">
                        <h3>
                            CONTACT INFO
                        </h3>

                        <address>
                            <span>129 Park street, New York City, NY 10903</span> <span><strong>PHONE:</strong> (+6221) 000 888 999</span> <span><strong>EMAIL:</strong> <a href=
                                                                                                                                                                            "mailto:companyname@gmail.com">companyname@gmail.com</a></span> <span><strong>SITE:</strong> <a href="#">www.companyname.com</a></span>
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
                                <a  href="#"><span class="ti-facebook"></span></a>
                                <a  href="#"><span class="ti-twitter"></span></a>
                                <a  href="#"><span class="ti-instagram"></span></a>
                                <a  href="#"><span class="ti-dribbble"></span></a>
                                <a  href="#"><span class="ti-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- ScrolltoTop -->
        <div id="totop">
            <span class="ti-angle-up"></span>
        </div>
        <!-- ScrolltoTop end -->

@endsection
