@extends('layout.master')

@section('title', 'Kontakt - falkiewiczphoto.pl')
@section('desc', "Zapraszam do kontaktu i skorzystania z profesjonalnych usług fotografa. Oferuję usługi fotograficzne w zakresie sesji ślubnych, sportowych, wydarzeń kulturalncyh.")


@section('content')



    <div class="row">
        <div class="c-header-container col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pull-left">

            <!-- row content -->
            <div class="row">

                <!-- article -->
                <div class="col-md-12">

                    <!-- spacer-->
                    <div class="space-single hidden-sm hidden-xs">
                    </div>
                    <!-- spacer-->

                    <h1 class="onStep c-h1" data-animation="fadeInRight" data-time="600">
                        @lang('messages.gallery') <span class="devider"></span>
                    </h1>

                </div>
                <!-- article end -->

            </div>
            <!-- row content end -->
        </div>
    </div>


    {{--<h1 class="c-header">@lang('messages.gallery')</h1>--}}


    <section class="whitepage no-top no-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="no-gutter">

                    <!-- col -->
                    <div style="padding-top: 0" class="col-md-12 p-90 gallery-div">
                        <div style="padding-top: 0" class="sp-padding">

                        <!-- start gallery -->
                            <div class="no-gutter onStep" data-animation="fadeInUp" data-time="600" id="projects-wrap">
                                <div class="row">
                                    @foreach($categories as $category)
                                        <div class=" col-md-6 col-sm-6 col-xs-12 item pers {{ 'pho_'.$category->id }} ">
                                            <div class="gal-pro">
                                                <a title="{{ $category->name }}" href="{{ route('page.gallery',['id' => $category->id, 'name' => str_replace( [' ', '/', ','], "-",$category->name)]) }}">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive" src="{{ asset('storage/'.$category->image) }}">
                                                        <div class="overlay">
                                                            <h3>
                                                                {{ $category->name }}
                                                            </h3>
                                                            <p>@lang('messages.moreDetail')<span class="ti-angle-right"></span></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- gallery end -->

                            <!-- spacer -->
                            {{--<div class="space-half"></div>--}}
                            <!-- spacer -->

                            {{--<div class="btn-load onStep" data-animation="fadeInDown" data-time="300">--}}
                                {{--<a href="#">@lang('messages.loadmore')</a>--}}
                            {{--</div>--}}

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
                            @lang('messages.likeGallery')
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="right">
                        <div class="btn-yellow onStep" data-animation="fadeInRight" data-time="600">
                            <a href="{{ route('page.contact') }}">@lang('messages.contactMe')</a>
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
