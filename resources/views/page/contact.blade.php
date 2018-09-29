@extends('layout.master')

@section('content')

    <!-- subtitle -->
    <div class="container-fluid">
        <div class="row">
            <div class="no-gutter">

                <!-- main subtitle -->
                <div class="onStep" data-animation="fadeInLeft" data-time="0">
                    <div class="imgbg-page" style="background-image:url('{{ asset('storage/'.$contact->image) }}')"></div>

                    <!-- subtitle -->
                    <div class="col-md-12 overlay-clasic">
                        <div class="subtitle">
                            <h2>
                                Contact Us
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

    <!-- section contact -->
    <section class="whitepage no-top no-bottom">
        <div class="container-fluid">
            <div class="row">
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
                            <div class="space-double">
                            </div>
                            <!-- spacer end -->

                            <!-- address -->
                            <div class="col-md-4 col-xs-12 onStep" data-animation="fadeInUp" data-time="300">
                                <h5>HERE YOU FIND US</h5>
                                <p>{{ $contact->address }}</p>
                                <div class="space-half"></div>
                            </div>

                            <div class="col-md-3 col-xs-12 onStep" data-animation="fadeInUp" data-time="600">
                                <h5>CALL US</h5>
                                <p>{{ $contact->phone }}</p>
                                <div class="space-half"></div>
                            </div>

                            <div class="col-md-4 col-xs-12 onStep" data-animation="fadeInUp" data-time="900">
                                <h5>EMAIL US</h5>
                                <a class="link"  href="mailto:service@stock.com?Subject=Hello%20There">{{ $contact->email }}</a>
                                <div class="space-half"></div>
                            </div>
                            <!-- address end -->

                            <!-- contact form -->
                            <div class="col-md-12 col-xs-12">
                                <div class="contact onStep" data-animation="fadeInDown" data-time="1200">
                                    <form action="#" class="row" id="form1" method="post" name="form1">
                                        <input id="name" name="name" placeholder="your name" type="text"> <input id="email" name="email" placeholder="your e-mail" type="text">
                                        <div class="error" id="error_email">Please check your email</div>
                                        <textarea cols="50" id="message" name="message" placeholder="your enquiry" rows="4"></textarea>
                                        <div class="error" id="error_message">Please check your message</div>
                                        <div class="success" id="mail_success">Thank you. Your message has been sent.</div>
                                        <div class="error" id="mail_failed">Error, email not sent</div>
                                        <div class="space-half"></div>
                                        <button id="send" class="btn-contact" type="submit">SENT NOW</button>
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
