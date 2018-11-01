@extends('layout.master')

@section('title', 'Galeria '.$current_category->name.' - falkiewiczphoto.pl')
@section('desc', "Zapraszam do zapoznania się z moim portfolio. Tutaj możesz sprawdzić moje pracę kategori ".$current_category->name)


@section('content')

        {{--<!-- subtitle -->--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="no-gutter">--}}

                    {{--<!-- main subtitle -->--}}
                    {{--<div class="onStep" data-animation="fadeInLeft" data-time="0">--}}
                        {{--<div class="imgbg-page" style="background-image:url('{{ asset('storage/'.$current_category->image) }}')"></div>--}}

                        {{--<!-- subtitle -->--}}
                        {{--<div class="col-md-12 overlay-clasic">--}}
                            {{--<div class="subtitle">--}}
                                {{--<h2>--}}
                                    {{--{{ $current_category->header }}--}}
                                {{--</h2>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- subtitle end -->--}}

                    {{--</div>--}}
                    {{--<!-- main subtitle end -->--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- subtitle end -->--}}

        {{--<h1 class="c-header">{{$current_category->header}}</h1>--}}

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
                            {{$current_category->name}} <span class="devider"></span>
                        </h1>

                    </div>
                    <!-- article end -->

                </div>
                <!-- row content end -->
            </div>
        </div>


        <!-- section -->
        <section class="whitepage no-top no-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-gutter">

                        <!-- col -->
                        <div style="padding-top: 0" class="col-md-12 p-90 gallery-div">
                            <div style="padding-top: 0" class="sp-padding">

                                <!-- filter project -->
                                <div class="onStep" data-animation="fadeInUp" data-time="900">
                                    <div class="filter-wraper">
                                        <ul id="filter-porto">

                                            @foreach($categories as $category)
                                                <li  class="
                                                {{--filt-projects--}}
                                                 c-categories" data-project="{{ '.pho_'.$category->id }}"
                                                ><a style="{{$category->id == $current_category->id ? 'color: #ffc905!important;' : ''}}" href="{{ route('page.gallery',['id' => $category->id, 'name' => str_replace( " ", "-",$category->name)]) }}">{{ $category->name }}</a>
                                                </li>
                                            @endforeach

                                            {{--<li class="filt-projects active c-categories" data-project="*">@lang('messages.allAlbum')--}}
                                            {{--</li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <!-- filter project end -->

                                <!-- start gallery -->
                                <div class="no-gutter onStep" data-animation="fadeInUp" data-time="600" id="projects-wrap">
                                    <div class="row">
                                            @foreach($galleries as $image)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pers {{ 'pho_'.$category->id }} ">
                                                    <div class="gal-pro big-img">
                                                        <a title="{{ $image->name }}" href="{{ asset('storage/'.$image->image) }}">
                                                            <div class="hovereffect">
                                                                <img alt="imageportofolio" class="img-responsive" src="{{ asset('storage/'.$image->image) }}">
                                                                <div class="overlay">
                                                                    <h3>
                                                                        {{ $current_category->name }}
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
                                <div class="space-half"></div>
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
