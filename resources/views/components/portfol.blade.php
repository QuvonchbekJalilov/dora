    <!-- rts project area start -->
    <div class="rts-project-area rts-section-gap bgproject-area">
        <div class="container">
            <div class="title-area-btn-wrapper">
                <div class="title-area text-start">
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_portfolio_title')</h3>
                </div>
                <a class="rts-btn btn-primary" href="/portfolio">@lang('index.buttons.view-all')</a>
            </div>
            <div class="row g-24">
                @foreach ($portfolio -> sortByDesc('created_at')->take(3) as $port)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 {{$port['category_'. \App::getLocale()]}}" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="rts-product-one">
                            <div class="thumbnail-area">
                                <img src="/storage/{{$port->image}}" alt="Business_Finbiz">
                                <a class="rts-btn btn-primary rounded" href="{{ route('portshow',$port->id) }}"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="product-contact-wrapper">
                                <a href="{{ route('portshow',$port->id) }}">
                                    <h5 class="title">{{$port->title_uz}}</h5>
                                </a>
                                <!-- <span>{{$port['category_'. \App::getLocale()]}}</span> -->
                            </div>
                        </div>
                    </div>
                @endforeach

               
            </div>
        </div>
    </div>
    <!-- rts project area end -->
