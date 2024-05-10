<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
<div class="rts-blog-post-area shape-blog-one rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.blog_p')</span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.project_title')
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-5">
            @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog post -->
                    <div class="rts-blog-post-area-one" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="thumbnail" href="{{ route('blogid',$blog->id) }}"><img src="/storage/{{$blog->image}}" alt="Blog_post_images"></a>
                        <a href="{{ route('blogid',$blog->id) }}">
                            <h5 class="title">
                            {{$blog['title_'. \App::getLocale()]}}
                            </h5>
                        </a>
                        <div class="blog-footer">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                <span>{{$blog->date}}</span>
                            </div>
                            <div class="time user">
                                <i class="far fa-user"></i>
                                <span>{{$blog->client}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- single blog post End -->
                </div>
           @endforeach   
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="appoinment-area-one mt--120 mt_sm--60">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- appoinment left area -->
                                <div class="appoinment-left">
                                    <div class="title-area">
                                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                          @lang('index.contact_p')
                                        </span>
                                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_title')
                                        </h3>
                                        <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_text')
                                        </p>
                                        <div class="communicate-area" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/01.svg" alt="creative_icon">
                                            <div class="details-area">
                                                <span>@lang('index.contact_gmail')</span>
                                                <a href="mailto:info@dora.com">info@dora.com</a>
                                            </div>
                                        </div>
                                        <div class="communicate-area mt--30" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/02.svg" alt="creative_icon">
                                            <div class="details-area">
                                                <span>@lang('index.contact_number')</span>
                                                <a href="tel:+998935135324">+998 93 513 53 24</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- appoinment left area End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- appoinment-right -->
                                <div class="appoinment-right">
                                    <form action="#">
                                        <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                            <label for="name">@lang('index.name')</label>
                                            <input type="text" id="name" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                            <label for="Email">@lang('index.number')</label>
                                            <input type="text" id="Email" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                            <label for="message">@lang('index.message')</label>
                                            <textarea id="message"></textarea>
                                        </div>
                                        <button class="rts-btn btn-primary mt--30">@lang('index.submit')</button>
                                    </form>
                                </div>
                                <!-- appoinment-right End -->
                            </div>
                        </div>
                    </div>
                    <div class="appoinment-shape">
                        <img class="shape-1 shape" src="assets/images/appoinment/shape/01.png" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
                        <img class="shape shape-2" src="assets/images/appoinment/shape/02.png" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>