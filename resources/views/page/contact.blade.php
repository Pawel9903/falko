@extends('layout.master')

@section('title', 'Kontakt - falkiewiczphoto.pl')
@section('desc', "Zapraszam do kontaktu i skorzystania z profesjonalnych usług fotografa. Oferuję usługi fotograficzne w zakresie sesji ślubnych, sportowych, wydarzeń kulturalncyh.")

@section('content')

    {{--<!-- subtitle -->--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="no-gutter">--}}

                {{--<!-- main subtitle -->--}}
                {{--<div class="onStep" data-animation="fadeInLeft" data-time="0">--}}
                    {{--<div class="imgbg-page" style="background-image:url('{{ asset('storage/'.$contact->image) }}')"></div>--}}

                    {{--<!-- subtitle -->--}}
                    {{--<div class="col-md-12 overlay-clasic">--}}
                        {{--<div class="subtitle">--}}
                            {{--<h2>--}}
                                {{--@lang('messages.contact')--}}
                            {{--</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- subtitle end -->--}}

                {{--</div>--}}
                {{--<!-- main subtitle end -->--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- subtitle end -->

    <div  class="row">
        <div class="c-header-container col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pull-left">

            <!-- row content -->
            <div class="row">

                <!-- article -->
                <div class="col-md-12">

                    <!-- spacer-->
                    <div class="space-single hidden-sm hidden-xs">
                    </div>
                    <!-- spacer-->

                    <h1 class="onStep c-h1" data-animation="fadeInRight" data-time="600">
                        @lang('messages.contact') <span class="devider"></span>
                    </h1>

                </div>
                <!-- article end -->

            </div>
            <!-- row content end -->
        </div>
    </div>


    {{--<h1 class="c-header">@lang('messages.contact')</h1>--}}

    <!-- section contact -->
    <section  class="whitepage no-top no-bottom">
        <div class="container-fluid">
            <div class="row" style="padding-top: 50px">
                <div class="no-gutter">

                    {{--<!-- content left -->--}}
                    {{--<div class="col-md-4 col-xs-12 onStep" data-animation="fadeInLeft" data-time="0">--}}
                        {{--<div id="map"></div>--}}
                    {{--</div>--}}
                    {{--<!-- content left end -->--}}

                    <!-- content right -->
                    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">

                        <!-- row content -->
                        <div class="row">

                            <!-- spacer-->
                            {{--<div class="space-double">--}}
                            </div>
                            <!-- spacer end -->

                            <!-- address -->
                            <div class="col-md-4 col-xs-12 onStep" data-animation="fadeInUp" data-time="300">
                                <h5>@lang('messages.myAddress')</h5>
                                <p>{{ $info->address }}</p>
                                <div class="space-half"></div>
                            </div>

                            <div class="col-md-3 col-xs-12 onStep" data-animation="fadeInUp" data-time="600">
                                <h5>@lang('messages.call')</h5>
                                <p>{{ $info->phone }}</p>
                                <div class="space-half"></div>
                            </div>

                            <div class="col-md-4 col-xs-12 onStep" data-animation="fadeInUp" data-time="900">
                                <h5>@lang('messages.write')</h5>
                                <a class="link"  href="mailto:service@stock.com?Subject=Hello%20There">{{ $info->email }}</a>
                                <div class="space-half"></div>
                            </div>
                            <!-- address end -->

                            <!-- contact form -->
                            <div class="col-md-12 col-xs-12">
                                <div class="contact onStep" data-animation="fadeInDown" data-time="1200">
                                    <form action="{{ route('mail.contact') }}" class="row" id="form1" method="post" name="form1">
                                        @csrf
                                        <input id="name" name="name" placeholder="@lang('messages.yourName')" type="text">
                                        @if($errors->has('name'))
                                            <div class="error">{{$errors->first('name')}}</div>
                                        @endif
                                        <input id="phone" name="phone" placeholder="@lang('messages.yourPhone')" type="text">
                                        @if($errors->has('phone'))
                                            <div class="error">{{$errors->first('phone')}}</div>
                                        @endif
                                        <input id="email" name="email" placeholder="@lang('messages.yourEmail')" type="text">
                                        @if($errors->has('email'))
                                            <div class="error">{{$errors->first('email')}}</div>
                                        @endif
                                        <textarea cols="50" id="message" name="message" placeholder="@lang('messages.yourMessage')" rows="4"></textarea>
                                        @if($errors->has('message'))
                                            <div class="error">{{$errors->first('message')}}</div>
                                        @endif
                                        {{--<div class="success" id="mail_success">Thank you. Your message has been sent.</div>--}}
                                        {{--<div class="error" id="mail_failed">Error, email not sent</div>--}}
                                        @if(session('contact_success'))
                                        <div class="" id="">{{ session('contact_success') }}</div>
                                        @endif
                                        <div class="space-half"></div>
                                        <button id="send" class="btn-contact" type="submit">@lang('messages.sent')</button>
                                    </form>
                                </div>
                            </div>

                            <!-- contact form end -->

                            <!-- spacer -->
                            <div class="space-single"></div>

                        </div>
                        <!-- row content end -->
                    </div>
                    <!-- content right end -->

                </div>
            </div>
        </div>
    </section>
    <!-- section contact end -->

@endsection
@section('footer')
    @include('layout.footer')
@endsection
