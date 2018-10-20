@extends('layout.master')
@section('content')
    <!-- logo -->
    {{--<a class="navbar-brand" href="index.html"><img alt="logo" src="img/logo.png"></a>--}}

    <!-- section about -->
    <section class="whitepage no-top no-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="no-gutter">

                    <!-- content left -->
                    <div class="col-md-4 fixed onStep" data-animation="fadeInLeft" data-time="0">
                        <div id="bgslideshow">
                            @foreach($about->images_decoded as $image)
                                <div class="imgbg" style="background-image:url('{{ asset('storage/'.$image) }}')"></div>
                            @endforeach
                        </div>

                        <div class="overlay-page v-align">
                            <div class="col-md-10 col-xs-11">
                                <!-- spacer -->
                                <div class="space-double">
                                </div>
                                <div class="space-double">
                                </div>
                                <div class="space-double hidden-sm hidden-xs">
                                </div>
                                <!-- spacer end -->
                                {{--<div class="subtitle">--}}
                                    {{--<h2>--}}
                                        {{--About Us--}}
                                    {{--</h2>--}}
                                {{--</div>--}}
                            </div>
                        </div>

                    </div>
                    <!-- content left end -->

                    <!-- content right -->
                    <div class="col-md-8 scrollit pull-right">
                        <!-- spacer -->
                        <div class="space-single hidden-sm hidden-xs">
                        </div>
                        <!-- spacer end -->

                        <!-- wrapper -->
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pull-left">

                                <!-- row content -->
                                <div class="row">

                                    <!-- article -->
                                    <div class="col-md-12">

                                        <!-- spacer-->
                                        <div class="space-single hidden-sm hidden-xs">
                                        </div>
                                        <!-- spacer-->

                                        <h4 class="onStep" data-animation="fadeInRight" data-time="600">
                                            {{ $about->header }} <span class="devider"></span>
                                        </h4>

                                        <h2 class="onStep" data-animation="fadeInDown" data-time="900">
                                            {{ $about->subheader }}
                                        </h2>
                                    </div>
                                    <!-- article end -->

                                </div>
                                <!-- row content end -->
                            </div>
                        </div>
                        <!-- wrapper end -->
                    </div>
                    <!-- content right end -->


                    <!-- content right -->
                    <div class="col-md-8 col-sm-12 col-xs-12 graypage scrollit pull-right">
                        <!-- spacer-->
                        <div class="space-half">
                        </div>
                        <!-- spacer end -->
                        <!-- wrapper -->
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pull-left">

                                <!-- row content -->
                                <div class="row">

                                    <!-- article -->
                                    <div class="col-md-12">

                                        <div class="onStep" data-animation="fadeInDown" data-time="900">
                                            {!! $about->description !!}
                                        </div>

                                        <!-- spacer-->
                                        <div class="space-half">
                                        </div>
                                        <!-- spacer end -->

                                        <div class="social-icons onStep" data-animation="fadeInDown" data-time="1200">
                                            <a  href="{{ $info->fb }}"><span class="ti-facebook"></span></a>
                                            <a  href="{{ $info->twitter }}"><span class="ti-twitter"></span></a>
                                            <a  href="{{ $info->instagram }}"><span class="ti-instagram"></span></a>
                                            <a  href="{{ $info->linkedin }}"><span class="ti-linkedin"></span></a>
                                        </div>


                                    </div>
                                    <!-- article end -->

                                </div>
                                <!-- row content end -->
                            </div>
                        </div>
                        <!-- wrapper end -->
                        <!-- spacer-->
                        <div class="space-single">
                        </div>
                        <div class="space-double">
                        </div>
                        <!-- spacer end -->
                    </div>
                    <!-- content right end -->

                </div>
            </div>
        </div>
    </section>
    <!-- section about end -->
@endsection
