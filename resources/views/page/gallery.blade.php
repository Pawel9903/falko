@extends('layout.master')

@section('content')

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

@endsection
@section('footer')
    @include('layout.footer')
@endsection
