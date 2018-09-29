@extends('layout.master')

@section('content')

    <!-- subtitle -->
    <div class="container-fluid">
        <div class="row">
            <div class="no-gutter">

                <!-- main subtitle -->
                <div class="onStep" data-animation="fadeInLeft" data-time="0">
                    <div class="imgbg-page" style="background-image:url({{ asset('storage/'.$offerPage->image) }})"></div>

                    <!-- subtitle -->
                    <div class="col-md-12 overlay-clasic">
                        <div class="subtitle">
                            <h2>
                                Oferta
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

    <!-- section blog -->
    <section class="whitepage no-bottom no-top offer-container">
        <div class="container">
            <div class="row">

                <!-- left content -->
                @foreach($offerCategories as $category)

                <div class="col-md-12">
                    <div class="sp-padding">
                        <div class="onStep" data-animation="fadeInUp" data-time="300">

                                <!-- article -->
                                <article class="">
                                    <div class="post-image col-md-6">
                                        <img alt="blog-img" class="img-responsive" src="{{ 'storage/'.$category->image }}">
                                    </div>
                                    <div class="col-md-6">
                                            <h5 class="offer-header">{{ $category->header }}</h5>
                                                {{--@php--}}
                                                {{--$get_category = $category->offerList::where('locale_id', Session::get('locale_number',1))->get()--}}
                                                {{--@endphp--}}
                                           {!! $offerList[$category->id-1]->text !!}
                                    </div>
                                </article>
                                <!-- article end -->

                            {{--<!-- next prev blog -->--}}
                            {{--<div id="pagination">--}}
                                {{--<span class="pagina-num">Page 1 of 3</span>--}}
                                {{--<a class="current" href="#">1</a>--}}
                                {{--<a class="inactive" href="#">2</a>--}}
                                {{--<a class="inactive" href="#">3</a>--}}
                                {{--<span class="pull-right">--}}
                  {{--<a class="link"  href= "#">prev</a>--}}
                  {{--<a class="link"  href="#">next</a>--}}
                  {{--</span>--}}
                            </div>
                            <!-- next prev blog end -->
                        </div>
                    </div>
                @endforeach

            </div>
                <!-- left content end -->
            </div>
        </div>
    </section>
    <!-- section blog end -->

@endsection
@section('footer')
    @include('layout.footer')
@endsection