<div>
    <!-- Well begun is half done. - Aristotle -->
</div>
<div class="rts-about-us-area rts-section-gap service-bg-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <img src="assets/images/about-us/01.jpg" alt="creative_about">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-one-area">
                        <div class="title-area">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.about_p')</span>
                            <h3 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.about')
                            </h3>
                        </div>
                        <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            @lang('index.about_text')
                        </p>
                        
                        <h4 class="d-none">@lang('index.official_partner')</h4>
                        <div class="row partners-wrapper gap-3 d-none">
                            <div class="col-sm-6 col-lg-3 bg-light rounded">
                                <img src="assets/images/brand/moysklad.png" alt="МойСклад">
                            </div>
                            <div class="col-sm-6 col-lg-3 bg-light rounded">
                                <img src="assets/images/brand/amocrm.png" alt="AmoCRM">
                            </div>
                            <div class="col-sm-6 col-lg-3 bg-light rounded">
                                <img src="assets/images/brand/google.png" alt="Google">
                            </div>
                            <div class="col-sm-6 col-lg-3 bg-light rounded d-none">
                                <img src="assets/images/brand/yandex.png" alt="Yandex">
                            </div>
                        </div>
                        <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{route('about')}}" class="rts-btn btn-primary">@lang('index.buttons.more-details')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .partners-wrapper div {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .partners-wrapper img{
            aspect-ratio: 3/2;
            object-fit: contain;
        }
    </style>