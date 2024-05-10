<!DOCTYPE html>
<html lang="uz-UZ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="DORA DIGITAL COMPANY" name="author">
    <meta name="language" content="Rus">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/images/fav/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/images/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/images/fav/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/assets/images/fav/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('public/assets/images/fav/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- ========== Page Title ========== -->
    <title>@yield('title')</title>
    <meta name="description" content="@yield('desc')">
    <meta name="keywords"
        content="@yield('keywords')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://dora.uz/">
    <meta property="og:title" content="@yield('title')">
    <meta name='og:image' content="{{ asset('public/assets/images/dora_seo.png') }}">
    <meta property="og:description" content="@yield('desc')">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta property="og:card" content="summary_large_image">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://dora.uz/">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('desc')">
    <meta property="twitter:image" content="{{ asset('public/assets/images/dora_seo.png') }}">
    
    <!--- Theme Color --->
    <meta name="theme-color" content="#0157B4">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94920587, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: "dataLayer"
        });
    </script>
    
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Dora",
          "alternateName": "Dora",
          "url": "https://dora.uz/",
          "logo": "https://dora.uz/assets/images/logo/dora-logo-color.png",
          "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+998935125324",
            "contactType": "sales",
            "contactOption": "TollFree",
            "areaServed": "UZ",
            "availableLanguage": ["Uzbek","Russian","en"]
          },{
            "@type": "ContactPoint",
            "telephone": "+998935135324",
            "contactType": "technical support",
            "contactOption": "HearingImpairedSupported",
            "areaServed": "UZ",
            "availableLanguage": "Uzbek"
          }],
          "sameAs": [
            "https://www.youtube.com/@doradigital",
            "https://instagram.com/dora.uz",
            "https://www.linkedin.com/company/dora-holding/",
            "https://www.facebook.com/doradev.uz",
            "https://dora.uz/"
          ]
        }
        </script>
        
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/94920587" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <meta name="yandex-verification" content="213e0d2ea26bc671" />
    <!-- /Yandex.Metrika counter -->

    <!-- Google tag (gtag.js) NEW -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JXH4F2RX0W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-JXH4F2RX0W');
    </script>

    <!-- OLD
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DXTXVCEL0P"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-DXTXVCEL0P');
    </script>
   -->
    
    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TPW5JGSN');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/fav.png">
    
    <link rel="preload" href="/assets/css/plugins/swiper.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/plugins/swiper.min.css"></noscript>

    
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="/assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/hover-revel.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPW5JGSN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- header one -->
    <!-- header one -->
    <header class="header-one header--sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-4">
                    <!-- logo area start -->
                    <a href="{{route('index')}}" class="thumbnail">
                        <img class="active-light" src="/assets/images/logo/dora-logo-color.png" alt="DORA Logo">
                        <img class="active-dark" src="/assets/images/logo/dora-logo-white.svg" alt="DORA Logo">
                    </a>
                    <!-- logo area end -->
                </div>
                <div class="col-lg-7 d-none d-xl-block">
                    <div class="main-header">
                        <nav class="main-nav">
                            <ul class="mainmenu">
                                <li>
                                    <a href="{{route('index')}}">@lang('index.home')</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">@lang('index.about')</a>
                                </li>
                                <li class="has-droupdown">
                                    <a href="/service">@lang('index.services')</a>
                                    <ul class="submenu home-mega home-mega2">
                                        <li class="m-1">
                                            <ul style="display: flex; flex-direction: column; justify-content: start; align-items: flex-start;"
                                                class="multiple">
                                                <li>
                                                    <h6>@lang('index.website_development')</h6>
                                                </li>
                                                @foreach($siteservices as $item)
                                                <li><a class="multi" href="{{ route('siteservicesID', $item->id) }}">
                                                        {{ $item['title_' . \App::getLocale()] }}
                                                    </a></li>
                                                @endforeach



                                            </ul>
                                        </li>
                                        <li class="m-1">
                                            <ul style="display: flex; flex-direction: column; justify-content: start; align-items: flex-start;"
                                                class="multiple">
                                                <li>
                                                    <h6>@lang('index.advertising')</h6>
                                                </li>

                                                @foreach($designservices as $designservice)
                                                <li><a class="multi"
                                                        href="{{ route('designservicesID', $designservice->id) }}">
                                                        {{ $designservice['title_' . \App::getLocale()] }}
                                                    </a></li>
                                                @endforeach

                                            </ul>
                                        </li>

                                </li>
                                <li class="m-1">
                                    <ul style="display: flex; flex-direction: column; justify-content: start; align-items: flex-start;"
                                        class="multiple">
                                        <li>
                                            <h6>@lang('index.social_media_add')</h6>
                                        </li>

                                        @foreach($seoservices as $seoservice)
                                        <li><a class="multi" href="{{ route('seoservicesID', $seoservice->id) }}">
                                                {{ $seoservice['title_' . \App::getLocale()] }}
                                            </a></li>
                                        @endforeach

                                    </ul>
                                </li>
                            </ul>
                            </li>

                            <li>
                                <a href="{{route('price')}}">@lang('index.prices')</a>
                            </li>
                            <li>
                                <a href="{{route('portfolio')}}">@lang('index.portfolio')</a>
                            </li>
                            <li>
                                <a href="{{route('blog')}}">@lang('index.blog')</a>
                            </li>

                            <li>
                                <a href="{{route('contact')}}">@lang('index.contact')</a>
                            </li>

                            <li class="has-droupdown ">
                                <a href="#">@lang('index.language')</a>
                                <ul class="submenu">
                                    <li><a class="single" href="/lang/ru"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#1435a1" d="M1 11H31V21H1z"></path><path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#fff"></path><path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#c53a28"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg> RU</a></li>
                                    <li><a class="single" href="/lang/uz"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#fff" d="M1 11H31V21H1z"></path><path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#4498b3"></path><path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#55b44b"></path><path fill="#be2a2c" d="M1 12H31V13H1z"></path><path fill="#be2a2c" d="M1 19H31V20H1z"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path><path d="M7.417,6.51c-.127-.021-.257-.033-.39-.033-1.291,0-2.338,1.047-2.338,2.338s1.047,2.338,2.338,2.338c.133,0,.263-.012,.39-.033-1.105-.186-1.948-1.146-1.948-2.305s.843-2.119,1.948-2.305Z" fill="#fff"></path><path fill="#fff" d="M9.741 10.181L9.564 9.635 9.387 10.181 8.813 10.181 9.277 10.518 9.1 11.063 9.564 10.726 10.028 11.063 9.851 10.518 10.315 10.181 9.741 10.181z"></path><path fill="#fff" d="M12.899 10.181L12.722 9.635 12.544 10.181 11.971 10.181 12.435 10.518 12.258 11.063 12.722 10.726 13.186 11.063 13.009 10.518 13.473 10.181 12.899 10.181z"></path><path fill="#fff" d="M12.722 6.477L12.544 7.023 11.971 7.023 12.435 7.36 12.258 7.905 12.722 7.568 13.186 7.905 13.009 7.36 13.473 7.023 12.899 7.023 12.722 6.477z"></path></svg> UZ</a></li>
                                    <li><a class="single" href="/lang/en"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#071b65"></rect><path d="M5.101,4h-.101c-1.981,0-3.615,1.444-3.933,3.334L26.899,28h.101c1.981,0,3.615-1.444,3.933-3.334L5.101,4Z" fill="#fff"></path><path d="M22.25,19h-2.5l9.934,7.947c.387-.353,.704-.777,.929-1.257l-8.363-6.691Z" fill="#b92932"></path><path d="M1.387,6.309l8.363,6.691h2.5L2.316,5.053c-.387,.353-.704,.777-.929,1.257Z" fill="#b92932"></path><path d="M5,28h.101L30.933,7.334c-.318-1.891-1.952-3.334-3.933-3.334h-.101L1.067,24.666c.318,1.891,1.952,3.334,3.933,3.334Z" fill="#fff"></path><rect x="13" y="4" width="6" height="24" fill="#fff"></rect><rect x="1" y="13" width="30" height="6" fill="#fff"></rect><rect x="14" y="4" width="4" height="24" fill="#b92932"></rect><rect x="14" y="1" width="4" height="30" transform="translate(32) rotate(90)" fill="#b92932"></rect><path d="M28.222,4.21l-9.222,7.376v1.414h.75l9.943-7.94c-.419-.384-.918-.671-1.471-.85Z" fill="#b92932"></path><path d="M2.328,26.957c.414,.374,.904,.656,1.447,.832l9.225-7.38v-1.408h-.75L2.328,26.957Z" fill="#b92932"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg> EN</a></li>
                                </ul>
                            </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-10 col-md-9 col-8">
                    <div class="header-right">
                        <a href="tel:+998935125324" class="rts-btn btn-secondary call-btn">+998 93 512 53 24
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z"
                                    fill="#3B38EB" />
                            </svg>
                        </a>
                        <a id="menu-btn" href="#" class="rts-btn btn-secondary menu-btn d-lg-none"
                            onclick="event.preventDefault();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                                fill="none">
                                <rect y="12" width="18" height="2" fill="#3B38EB"></rect>
                                <rect x="5" y="6" width="8" height="2" fill="#3B38EB"></rect>
                                <rect width="18" height="2" fill="#3B38EB"></rect>
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </header>
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="fa-solid fa-x"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="/"><img class="logo" src="/assets/images/logo/dora-logo-color.png" alt="DORA Logo"></a>
            <a class="logo-2" href="/"><img class="normal logo" src="/assets/images/logo/dora-logo-white.svg" alt="DORA Logo"></a>
            <div class="body d-none d-xl-block">


                <div class="social-wrapper-two">
                    <ul class="social-area">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://www.facebook.com/doradev.uz"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://www.youtube.com/@doradigital"><i class="fab fa-youtube"></i></a></li>
                        <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://www.linkedin.com/company/dora-holding/"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://instagram.com/dora.uz"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://t.me/dora_support"><i class="fab fa-telegram"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="body-mobile d-block d-xl-none">
                <!-- nav -->

                <nav class="main-nav mainmenu-nav">
                    <ul class="mainmenu" id="mobile-menu-active">

                        <li>
                            <a href="{{route('index')}}">@lang('index.home')</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">@lang('index.about')</a>
                        </li>
                        <style>
                            .openmenu{
                                
                            }
                            .clothemenu{
                                display: none !important;
                            }
                        </style>
                       

                        <li class="has-droupdown" onClick="opensayts(this)">
                            <a id="sayts"  href="#">@lang('index.website_development')</a>
                            <ul id="sayt_menu" class="submenu clothemenu">
                                @foreach($siteservices as $item)
                                <li><a class="single" href="{{ route('siteservicesID', $item->id) }}">{{ $item['title_'
                                        .
                                        \App::getLocale()] }}</a></li>
                                @endforeach
                            </ul>
                        </li>


                        <li onClick="opensayts(this)" class="has-droupdown">
                            <a  href="#">@lang('index.advertising')</a>
                            <ul id="openseo"  class="submenu clothemenu">
                                @foreach($designservices as $item)
                                <li><a class="single" href="{{ route('designservicesID', $item->id) }}">{{
                                        $item['title_' .
                                        \App::getLocale()] }}</a></li>
                                @endforeach
                            </ul>
                        </li>




                        <li onClick="opensayts(this)" class="has-droupdown">
                            <a href="#">@lang('index.social_media_add')</a>
                            <ul class="submenu clothemenu">
                                @foreach($seoservices as $item)
                                <li><a class="single" href="{{ route('seoservicesID', $item->id) }}">{{ $item['title_' .
                                        \App::getLocale()] }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('portfolio')}}">@lang('index.portfolio')</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">@lang('index.blog')</a>
                        </li>

                        <li>
                            <a href="{{route('contact')}}">@lang('index.contact')</a>
                        </li>

                        <li class="has-droupdown" onClick="opensayts(this)">
                            <a href="#">@lang('index.language') {{ session('lang') }}</a>
                            <ul class="submenu clothemenu">
                                <li><a class="single" href="/lang/ru">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#1435a1" d="M1 11H31V21H1z"></path><path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#fff"></path><path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#c53a28"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>
                                     RU</a></li>
                                <li><a class="single" href="/lang/uz">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#fff" d="M1 11H31V21H1z"></path><path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#4498b3"></path><path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#55b44b"></path><path fill="#be2a2c" d="M1 12H31V13H1z"></path><path fill="#be2a2c" d="M1 19H31V20H1z"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path><path d="M7.417,6.51c-.127-.021-.257-.033-.39-.033-1.291,0-2.338,1.047-2.338,2.338s1.047,2.338,2.338,2.338c.133,0,.263-.012,.39-.033-1.105-.186-1.948-1.146-1.948-2.305s.843-2.119,1.948-2.305Z" fill="#fff"></path><path fill="#fff" d="M9.741 10.181L9.564 9.635 9.387 10.181 8.813 10.181 9.277 10.518 9.1 11.063 9.564 10.726 10.028 11.063 9.851 10.518 10.315 10.181 9.741 10.181z"></path><path fill="#fff" d="M12.899 10.181L12.722 9.635 12.544 10.181 11.971 10.181 12.435 10.518 12.258 11.063 12.722 10.726 13.186 11.063 13.009 10.518 13.473 10.181 12.899 10.181z"></path><path fill="#fff" d="M12.722 6.477L12.544 7.023 11.971 7.023 12.435 7.36 12.258 7.905 12.722 7.568 13.186 7.905 13.009 7.36 13.473 7.023 12.899 7.023 12.722 6.477z"></path></svg>
                                     UZ</a></li>
                                <li><a class="single" href="/lang/en">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#071b65"></rect><path d="M5.101,4h-.101c-1.981,0-3.615,1.444-3.933,3.334L26.899,28h.101c1.981,0,3.615-1.444,3.933-3.334L5.101,4Z" fill="#fff"></path><path d="M22.25,19h-2.5l9.934,7.947c.387-.353,.704-.777,.929-1.257l-8.363-6.691Z" fill="#b92932"></path><path d="M1.387,6.309l8.363,6.691h2.5L2.316,5.053c-.387,.353-.704,.777-.929,1.257Z" fill="#b92932"></path><path d="M5,28h.101L30.933,7.334c-.318-1.891-1.952-3.334-3.933-3.334h-.101L1.067,24.666c.318,1.891,1.952,3.334,3.933,3.334Z" fill="#fff"></path><rect x="13" y="4" width="6" height="24" fill="#fff"></rect><rect x="1" y="13" width="30" height="6" fill="#fff"></rect><rect x="14" y="4" width="4" height="24" fill="#b92932"></rect><rect x="14" y="1" width="4" height="30" transform="translate(32) rotate(90)" fill="#b92932"></rect><path d="M28.222,4.21l-9.222,7.376v1.414h.75l9.943-7.94c-.419-.384-.918-.671-1.471-.85Z" fill="#b92932"></path><path d="M2.328,26.957c.414,.374,.904,.656,1.447,.832l9.225-7.38v-1.408h-.75L2.328,26.957Z" fill="#b92932"></path><path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path><path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path></svg>

                                     EN</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                
                 <script>
                 
                function opensayts(e){
                    console.log(e)
                     e.querySelector('.submenu').classList.toggle('clothemenu');
                }
                

                
                        </script>

                <!-- nav -->
                <div class="social-wrapper-two mt--50">
                    <ul class="social-area">
                        <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://www.facebook.com/doradev.uz"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://www.youtube.com/@doradigital"><i class="fab fa-youtube"></i></a></li>
                        <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://www.linkedin.com/company/dora-holding/"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://instagram.com/dora.uz"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><a target="_blank"
                                href="https://t.me/dora_support"><i class="fab fa-telegram"></i></a></li>
                    </ul>
                </div>
                <!-- <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a> -->
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <div id="popupBox" class="popupBox" style="display: none;">
        <span id="closeBox"
        style="position: fixed; top: 6%; right: 8%; color: #0d6efd; font-size: 40px;"><i class="fa-solid fa-x"></i></span>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-6" 
                        style="background-color: #fff;
                                border-radius: 12px;
                                padding: 60px 40px;
                                margin: 0 10px;
                                width: 95%;
                                padding-top: 110px;">

                    <div class="project-info" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="d-flex justify-content-center" style="margin-bottom: 5rem;">
                            <img src="{{ asset('assets/images/logo/dora-logo-color.png') }}" alt="DORA" width="67%"/>
                        </div>
                        <div class="info-head">
                            <h4 class="title d-flex justify-content-center">
                                @lang('index.portfolio_d_t') 
                            </h4>
                        </div>
                        
                        <div class="info-body">
                            <!-- single info -->
                            <div class="single-info">
                                <form action="{{ url('papop')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="single-input" data-sal-delay="150" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <label for="name">
                                            <p> </p>
                                        </label>
                                        <input class="input-style" type="text" name="name" id="name" onkeydown="return /[a-zA-Z]/i.test(event.key)" placeholder="@lang('index.name')" required>
                                    </div>
                                    <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up"
                                        data-sal-duration="800">
                                        <input class="input-style" type="text" name="number" id="number" value="+998" maxlength="13"
                                            oninput="this.value = this.value.replace(/[^0-9.+{1}]/g, '').replace(/(\..*)\./g, '$1');" placeholder="@lang('index.name')" required>
                                    </div>
                                    
                                    <button
                                        class="py-3 border border-radius-3 btn-primary buttoncha"
                                        style="padding: 22px !important; border-radius: 35px !important; margin-top: 20px !important; font-size: 18px;">@lang('index.submit')
                                    </button>
                                </form>
                            </div>
                            <!-- end single info -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="owerly_DR" id="owerly_DR" style="display: none; cursor: crosshair;"></div>
    <button id="consulting" class="button-86" role="button" onclick="openBox_DR()"
        style="display: block; font-weight: 900; left: -90px;">@lang('index.portfolio_d_t')</button>

<style>
    .input-style {
        border: 1px solid #0079fa !important;
        padding: 18px !important;
        border-radius: 35px !important;
    }
</style>
    <div>

        <div id="anywhere-home"></div>

        @yield('content')
        
        <div class="rts-footer-area-one rts-section-gap"
        style="padding: 40px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-right-one">
                            <div class="single-wized-footer">
                                <h5 class="" data-sal-delay="150" data-sal="slide-up"
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
                                <h5 class="" data-sal-delay="150" data-sal="slide-up"
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
                                <h5 class="" data-sal-delay="150" data-sal="slide-up"
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

        <!-- start Footer area -->
        
        <!-- footer area start -->
        <div class="rts-footer-three-area rts-section-gapTop footer-three-bg">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="single-footer-three-wized">
                            <div class="header">
                                <a href="/">
                                    <img src="/assets/images/logo/dora-logo-white.png" alt="Footer_logo" width="210px">
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
                                        @lang('index.menu')
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
                                <a href="https://www.iubenda.com/privacy-policy/74383217" title="@lang('index.privacy_terms')">@lang('index.privacy_terms')</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script> |
                                <a href="/contact" style="margin-left: 0;">@lang('index.contact')</a>
                            </div>
                            <div class="mid">
                                <p>@lang('index.footer_p') 2021  <a href="https://dora.uz">DORA DEV</a></p>
                            </div>
                            <div class="right">
                                <!--<a href="/brif"> @lang('index.brif_title')</a>| -->
                                <a href="/about" style="margin-left: 0;">@lang('index.about')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright-area End -->

<!-- ENd Footer Area -->


        <!-- <button  class="rts-btn btn-primary mt--30" style="transform: rotate(90deg); width: auto; position: fixed; z-index: 99; top: 50%; left: -5%;"><a href="#popup1">@lang('index.contact_detail')</a></button> -->


        <style>
            .rts-section-gap {
                padding: 60px 0;
            }
            .overlay {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.7);
                transition: opacity 500ms;
                visibility: hidden;
                opacity: 0;
            }
    
            .overlay:target {
                visibility: visible;
                opacity: 1;
            }
    
            .popup {
                margin: 70px auto;
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                width: 30%;
                position: relative;
                transition: all 5s ease-in-out;
                margin-top: 100px;
    
            }
    
            .popup h2 {
                margin-top: 0;
                color: #333;
                font-family: Tahoma, Arial, sans-serif;
            }
    
            .popup .close {
                position: absolute;
                top: 20px;
                right: 30px;
                transition: all 200ms;
                font-size: 30px;
                font-weight: bold;
                text-decoration: none;
                color: #333;
            }
    
            .popup .close:hover {
                color: #06D85F;
            }
    
            .popup .content {
                max-height: 30%;
                overflow: auto;
            }
    
            .body-mobile .mainmenu li a {
                box-shadow: none;
                border: 1px solid #cccccc3d;
                border-radius: 12px;
            }
    
            @media screen and (max-width: 700px) {
                .box {
                    width: 70%;
                }
    
                .popup {
                    width: 70%;
                }
            }
            .rts-product-one .thumbnail-area::after{
                width: 228%;
            }
        
            #closeBox {
                cursor: pointer;
            }

            .header--sticky.sticky {
                z-index: 900;
            }

            .owerly_DR {
                background-color: rgba(0, 0, 0, 0.4);
                background-color: rgba(0, 0, 0, 0.4);
                position: fixed;
                z-index: 998;
                width: 100%;
                height: 100vh;
                top: 0;
                left: 0;
            }

            .popupBox {
                position: fixed;
                z-index: 999;
                top: 50%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%)
            }

            .blog-header {
                height: 40vh;
            }

            .blog-header .thumbnail {
                height: 100%;
            }

            .blog-header .thumbnail img {
                object-fit: cover;
                height: 100%;
            }
            @media only screen and (min-width: 769px) {
                .phone {
                    display: none;
                }
            }

            .phone .phone_link {
                position: fixed;
                transform: all 0.5s ease;
                background: var(--color-primary);
                display: block;
                text-align: center;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                border-radius: 50px;
                border-right: none;
                color: #fff;
                font-weight: 700;
                font-size: 30px;
                bottom: 25px;
                right: 30px;
                border: 0;
                z-index: 999;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .phone .phone_link::before {
                content: " ";
                position: absolute;
                z-index: -1;
                left: 50%;
                top: 50%;
                display: block;
                width: 50px;
                height: 50px;
                background: var(--color-primary);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                -webkit-animation: pulse-border 1500ms ease-out infinite;
                animation: pulse-border 1500ms ease-out infinite;
            }


            @keyframes pulse-border {
                0% {
                    transform: translate(-50%, -50%) translateZ(0) scale(1);
                    opacity: 0;
                }

                100% {
                    transform: translate(-50%, -50%) translateZ(0) scale(1.5);
                    opacity: 1;
                }
            }
            
            .footer-right-one .single-wized-footer .list li a:hover{
                color: #3a37eb;
            }
            @media screen and (max-width: 989px) {
                .button-86 {
                    display: none !important;
                }
            }

            .button-86 {
                all: unset;
                padding: 10px;
                font-size: 16px;
                background: transparent;
                border: none;
                position: fixed;
                color: #f0f0f0;
                cursor: pointer;
                z-index: 1904;
                padding: 10px 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                white-space: nowrap;
                user-select: none;
                transform: rotate(270deg);
                top: 50%;
                -webkit-user-select: none;
                touch-action: manipulation;
            }

            .button-86::after,
            .button-86::before {
                content: '';
                position: absolute;
                bottom: 0;
                right: 0;
                z-index: -99999;
                transition: all .4s;
            }

            .button-86::before {
                transform: translate(0%, 0%);
                width: 100%;
                height: 100%;
                background: #3a37eb;
                border-radius: 10px;

            }

            .button-86::after {
                transform: translate(10px, 10px);
                width: 35px;
                height: 35px;
                background: #ffffff15;
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
                border-radius: 50px;
            }

            .button-86:hover::before {
                transform: translate(5%, 20%);
                width: 110%;
                height: 110%;
            }

            .button-86:hover::after {
                border-radius: 10px;
                transform: translate(0, 0);
                width: 100%;
                height: 100%;
            }

            .button-86:active::after {
                transition: 0s;
                transform: translate(0, 5%);
            }

            .amo-button-holder {
                right: 8px !important;
                bottom: 63px !important;
            }
        </style>



       <!-- <div class="loader-wrapper">
            <div class="loader">
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div> -->
        
        

         <script>
            let closeBox = document.getElementById('closeBox');
            closeBox.addEventListener('click', () => {
                document.getElementById('popupBox').style.display = "none";
                document.getElementById('owerly_DR').style.display = "none";
                document.getElementById('consulting').style.display = "block";
            });
            
            let owerly_DR = document.getElementById('owerly_DR');
  
            owerly_DR.addEventListener('click', () => {    
                document.getElementById('popupBox').style.display = "none";
                document.getElementById('owerly_DR').style.display = "none";
                document.getElementById('consulting').style.display = "block";
            });
            
            function openBox_DR() {
                document.getElementById('popupBox').style.display = "block";
                document.getElementById('owerly_DR').style.display = "block";
            };
            
        </script>

        <script>(function (a, m, o, c, r, m) { a[m] = { id: "393785", hash: "7e5f1f6e679f0234f8fbd94734453eb3000b58c9724ba7dd3becfc9583ac7fc2", locale: "ru", inline: false, setMeta: function (p) { this.params = (this.params || []).concat([p]) } }; a[o] = a[o] || function () { (a[o].q = a[o].q || []).push(arguments) }; var d = a.document, s = d.createElement('script'); s.async = true; s.id = m + '_script'; s.src = 'https://gso.amocrm.ru/js/button.js?1694682227'; d.head && d.head.appendChild(s) }(window, 0, 'amoSocialButton', 0, 0, 'amo_social_button'));</script>

        <!-- scripts start form hear -->
        <script src="/assets/js/vendor/jquery.min.js"></script>
        <script src="/assets/js/vendor/jqueryui.js"></script>
        <script src="/assets/js/vendor/waypoint.js"></script>
        <script src="/assets/js/plugins/swiper.js"></script>
        <script src="/assets/js/plugins/counterup.js"></script>
        <script src="/assets/js/plugins/sal.min.js"></script>
        <script src="/assets/js/plugins/fancybox.js"></script>
        <!--<script src="/assets/js/plugins/metismenu.js"></script>-->
        <script src="/assets/js/plugins/marquery.js"></script>
        <script src="/assets/js/vendor/bootstrap.min.js"></script>
        <script src="/assets/js/vendor/waw.js"></script>


        <script src="/assets/js/plugins/hover-revel.js"></script>
        <script src="/assets/js/plugins/twinmax.js"></script>


        <script src="/assets/js/plugins/contact.form.js"></script>


        <!-- main Js -->
        <script src="/assets/js/main.js"></script>
        <!-- scripts end form hear -->
</body>

</html>