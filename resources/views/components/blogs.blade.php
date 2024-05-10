<!-- our latest news area start -->
    <div class="rts-blog-area-h2 rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area-btn-wrapper">
                        <div class="title-area text-start">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.blogs.desc')</span>
                            <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.blogs.title')</h2>
                        </div>
                        <a class="rts-btn btn-primary" href="/blog">@lang('index.buttons.view-all')</a>
                    </div>
                </div>
            </div>
            <div class="row g-24">
                @foreach ($blogs -> sortByDesc('id')->take(3) as $blog)
                <!-- single blog area -->
                <div class="col-lg-4">
                    <div class="blog-single-two-wrapper" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <a href="{{ route('blogid',$blog->id) }}" class="thumbnail">
                            <img src="/storage/{{$blog->image}}" alt="{{$blog['title_'. \App::getLocale()]}}">
                        </a>
                        <div class="inner">
                            <div class="body">
                                <div class="date">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>{{$blog->date}}</span>
                                </div>
                                <a href="{{ route('blogid',$blog->id) }}">
                                    <h5 class="title">
                                        {{$blog['title_'. \App::getLocale()]}}
                                    </h5>
                                </a>
                                <a href="{{ route('blogid',$blog->id) }}" class="rts-read-more">@lang('index.buttons.more-details')<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog end -->
                @endforeach
            </div>
        </div>
    </div>
<!-- our latest news area end -->