<!-- footer area start -->
<div class="rts-footer-three-area rts-section-gapTop footer-three-bg">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <div class="single-footer-three-wized">
                    <div class="header">
                        <a href="/">
                            <img src="/assets/images/logo/dora-logo-white.svg" alt="Footer_logo">
                        </a>
                    </div>
                    <div class="body left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <p class="disc">
                            @lang('index.dora_dream')
                        </p>
                        <ul class="social-area">
                            <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a target="_blank" aria-label="Facebook"
                                    href="https://www.facebook.com/doradev.uz"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                <a target="_blank" aria-label="YouTube"
                                    href="https://www.youtube.com/@doradigital"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                <a target="_blank" aria-label="Linkedin"
                                    href="https://www.linkedin.com/company/dora-holding/"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                <a target="_blank"  aria-label="Instagram"
                                    href="https://instagram.com/dora.uz"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                <a target="_blank"  aria-label="Telegram"
                                    href="https://t.me/dora_support"><i class="fab fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="footer-right-three">
                    <!-- single wized -->
                    <div class="single-footer-three-wized" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="header">
                            <h5 class="title">
                                Our Solution
                            </h5>
                        </div>
                        <div class="body">
                            <ul class="list">
                                <li><a href="/service"><i class="fa-solid fa-angles-right"></i>@lang('index.website_development')</a></li>
                                <li><a href="/service"><i class="fa-solid fa-angles-right"></i>@lang('index.advertising')</a></li>
                                <li><a href="/service"><i class="fa-solid fa-angles-right"></i>@lang('index.social_media_add')</a></li>
                                <li><a href="{{route('contact')}}"><i class="fa-solid fa-angles-right"></i>@lang('index.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single wized end -->
                    <!-- single wized -->
                    <div class="single-footer-three-wized" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="header">
                            <h5 class="title">
                                @lang('index.contact')
                            </h5>
                        </div>
                        <div class="body">
                            <!-- single map area -->
                            <div class="rts-footer-contact">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <a href="#" class="map">
                                    @lang('index.address')
                                </a>
                            </div>
                            <!-- single map area End -->
                            <!-- single map area -->
                            <div class="rts-footer-contact">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <a href="tel:+998935135324" class="call">
                                    +998 (93) 512 53 24
                                </a>
                            </div>
                            <!-- single map area End -->
                        </div>
                    </div>
                    <!-- single wized end -->
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright-area -->
<div class="rts-copyright-area-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">
                    <div class="left">
                        <a href="#">Privacy Terms</a>
                        <a href="/contact">@lang('index.contact')</a>
                    </div>
                    <div class="mid">
                        <p>@lang('index.footer_p') 2021  <a href="https://dora.uz">DORA</a></p>
                    </div>
                    <div class="right">
                        <a href="#">Privacy Terms</a>
                        <a href="/about">@lang('index.about')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- copyright-area End -->

<div class="rts-footer-area-one rts-section-gap footer-one-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="footer-right-one">
                    <div class="single-wized-footer">
                        <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            @lang('index.website_development')
                        </h5>


                        <ul class="list">

                            @foreach($siteservices as $item)
                            <li><a class="multi" href="{{ route('siteservicesID', $item->id) }}">
                                    {{ $item['title_' . \App::getLocale()] }}
                                </a></li>
                            @endforeach

                        </ul>

                    </div>
                    <div class="single-wized-footer">
                        <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            @lang('index.advertising')
                        </h5>
                        <ul class="list">

                            @foreach($designservices as $designservice)
                            <li><a class="multi" href="{{ route('designservicesID', $designservice->id) }}">
                                    {{ $designservice['title_' . \App::getLocale()] }}
                                </a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="single-wized-footer">
                        <h5 class="title-heading" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            @lang('index.social_media_add')
                        </h5>
                        <ul class="list">

                            @foreach($seoservices as $seoservice)
                            <li><a class="multi" href="{{ route('seoservicesID', $seoservice->id) }}">
                                    {{ $seoservice['title_' . \App::getLocale()] }}
                                </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer area end -->
<!-- ENd Footer Area -->