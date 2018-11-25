@foreach($images as $image)
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pers {{ 'pho_'.$current_category->id }}">
        <div class="gal-pro big-img">
            <a title="{{ $image->name }}" href="{{ asset('storage/'.$image->image) }}">
                <div class="hovereffect">
                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('storage/'.$image->image) }}">
                    <div class="overlay">
                        <h3>
                            {{ $image->name }}
                        </h3>
                        {{--<p>@lang('messages.moreDetail')<span class="ti-angle-right"></span></p>--}}
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach