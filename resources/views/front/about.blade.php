@extends('layouts.layout')
@section('content')

@section('title')
    @lang('index.menu_about_title')
@endsection

@section('desc')
    @lang('desc.about') - DORA
@endsection

@section('keywords')
    Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте,
    разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео
    продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для
    автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия,
    онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет,
    программа для торговли
@endsection

<style>
    .tab-button-area-one .nav li button.active {
        box-shadow: -6px 16px 10px -8px rgba(0, 0, 0, 0.15) !important;
        margin-top: -50px !important;
        background-color: #fff !important;
    }
</style>

<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 breadcrumb-1">
                <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    @lang('index.menu_about_title')</h1>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb area -->
{{-- <img src="assets/images/1222.jpg"/> --}}
<!-- about us area start -->
<div class="rts-about-us-area rts-section-gap">
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
                            @lang('index.about_title')
                        </h3>
                    </div>
                    <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        @lang('index.about_desc')
                    </p>

                    <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="assets/about_dora_ru.pdf" class="rts-btn btn-primary" download>@lang('index.download') <i
                                class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->

<!-- project section srart -->
<div class="rts-project-area rts-section-gap ">
    <div class="container">
        <div class="row">
            <div class="title-area text-start">
                <h2 class="title sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    @lang('index.official_partner')</h2>
            </div>
            <div class="col-12">
                <div class="tab-button-area-one">
                    <ul class="nav d-flex justify-content-start" id="myTab" role="tablist">
                        <li class="nav-item col-kg col-lg-2 justify-content-center  " role="presentation">
                            <button class="nav-link dr-filter-pertner active" id="contact-tabs" data-bs-toggle="tab"
                                data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                                aria-selected="false">
                                <img src="assets/images/brand/amocrm.png" alt="amocrm">
                            </button>
                        </li>
                        <li class="nav-item col-lg-2 justify-content-center" role="presentation">
                            <button class="nav-link dr-filter-pertners" id="contact-tabrts" data-bs-toggle="tab"
                                data-bs-target="#contactrts" type="button" role="tab" aria-controls="contactrts"
                                aria-selected="false">
                                <img src="assets/images/brand/moysklad.png" alt="moysklad">

                            </button>
                        </li>
                        <li class="nav-item col-lg-2 justify-content-center" role="presentation">
                            <button class="nav-link dr-filter-pertners" id="contact-sipuni" data-bs-toggle="tab"
                                data-bs-target="#sipuni" type="button" role="tab" aria-controls="sipuni"
                                aria-selected="false">
                                <img src="assets/images/brand/sipuni.svg" alt="sipuni">

                            </button>
                        </li>

                        <li class="nav-item col-lg-2 justify-content-center" role="presentation">
                            <button class="nav-link dr-filter-pertners" id="contact-f5" data-bs-toggle="tab"
                                data-bs-target="#f5" type="button" role="tab" aria-controls="f5"
                                aria-selected="false">
                                <img src="assets/images/brand/f5.png" alt="Команда F5">
                            </button>
                        </li>

                        <li class="nav-item col-lg-2 justify-content-center" role="presentation">
                            <button class="nav-link dr-filter-pertners" id="contact-marketing" data-bs-toggle="tab"
                                data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing"
                                aria-selected="false">
                                <img src="assets/images/brand/marketing.webp"
                                    alt="МАРКЕТИНГОВАЯ АССОЦИАЦИЯ УЗБЕКИСТАНА">
                            </button>
                        </li>
                    </ul>
                </div>
                <style>
                    .dr-filter-pertners img {
                        width: 100%;
                        aspect-ratio: 4/1;
                        object-fit: contain;
                    }
                </style>
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="contacts" role="tabpanel"
                            aria-labelledby="contact-tabs">

                            <!-- tab product area -->
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-s m-12 col-12">
                                    <!-- single -product area -->
                                    <div class="rts-product-one">
                                        <div class="product-contact-wrapper">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-6">
                                                    <a href="#" target="_blank">
                                                        <h3 class="title">Серьёзное решение для серьёзных проблем</h3>
                                                    </a>
                                                    <p class="mb-4">
                                                        С помощью нас вы сможете еще больше
                                                        улучшить свой отдел продаж. Любую сложную
                                                        проблему можно решить, предложив
                                                        правильное решение. Будьте уникальными
                                                        вместе с нами ! С уважением "DORA"
                                                    </p>
                                                    <a href="#" class="rts-btn btn-primary d-none"
                                                        target="_blank">
                                                        @lang('index.buttons.more-details')
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-12 col-lg-6">
                                                    <img src="assets/images/brand/amosertificat.webp"
                                                        width="100%" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -product area End -->
                                </div>
                            </div>
                            <!-- tab product area end-->
                        </div>

                        <div class="tab-pane fade" id="contactrts" role="tabpanel" aria-labelledby="contact-tabrts">
                            <!-- tab product area -->
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- single -product area -->
                                    <div class="rts-product-one">
                                        <div class="product-contact-wrapper row">
                                            <div class="col-sm-12 col-lg-6">
                                                <a href="#" target="_blank">
                                                    <h3 class="title">Торговля, склад, CRM в облаке</h3>
                                                </a>
                                                <p class="">
                                                    Dora – ваш надежный партнер в области автоматизации бизнес-процессов
                                                    на протяжении более пяти лет.
                                                    Наша компания специализируется на создании инновационных решений,
                                                    направленных на оптимизацию и улучшение эффективности вашего
                                                    бизнеса.
                                                    Мы предоставляем широкий спектр услуг, охватывающих различные
                                                    отрасли и сферы деятельности.
                                                    Наш опыт в области автоматизации включает в себя разработку
                                                    программных продуктов, адаптированных под индивидуальные потребности
                                                    клиента, а также внедрение передовых технологий для повышения
                                                    производительности и сокращения временных затрат.
                                                    Мы гордимся своей командой профессионалов, способных создавать
                                                    интегрированные и интуитивно понятные решения, удовлетворяющие самым
                                                    высоким стандартам качества.
                                                    Наш подход к автоматизации бизнес-процессов не только повышает
                                                    эффективность вашей компании, но также обеспечивает надежность и
                                                    безопасность ваших данных.
                                                    Выбирая Dora, вы делаете ставку на инновации, надежность и успешное
                                                    развитие вашего бизнеса.
                                                    Мы готовы сотрудничать с вами для достижения ваших стратегических
                                                    целей и обеспечения долгосрочного успеха.
                                                </p>
                                                <a href="#" class="rts-btn btn-primary d-none" target="_blank">
                                                    @lang('index.buttons.more-details')
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <img src="assets/images/brand/moyskladsertifi.webp" width="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -product area End -->
                                </div>
                            </div>
                            <!-- tab product area end-->
                        </div>

                        <div class="tab-pane fade" id="sipuni" role="tabpanel" aria-labelledby="contact-sipuni">
                            <!-- tab product area -->
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- single -product area -->
                                    <div class="rts-product-one">
                                        <div class="product-contact-wrapper row">
                                            <div class="col-sm-12 col-lg-6">
                                                <a href="#" target="_blank">
                                                    <h3 class="title">Корпоративная телефония для бизнеса SIPUNI</h3>
                                                </a>
                                                <p class="">

                                                </p>
                                                <a href="#" class="rts-btn btn-primary d-none" target="_blank">
                                                    @lang('index.buttons.more-details')
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <img src="assets/images/brand/sipuni.webp" width="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -product area End -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="f5" role="tabpanel" aria-labelledby="contact-f5">
                            <!-- tab product area -->
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- single -product area -->
                                    <div class="rts-product-one">
                                        <div class="product-contact-wrapper row">
                                            <div class="col-sm-12 col-lg-6">
                                                <a href="#" target="_blank">
                                                    <h3 class="title d-none">@lang('index.comming_soon')</h3>
                                                    <h3 class="title">Решаем любые задачи бизнеса в amoCRM</h3>
                                                </a>
                                                <p class="">
                                                    Системный интегратор «Команда F5» входит в ТОП-1 интеграторов
                                                    amoCRM. За 10 лет работы реализовано более 2000 проектов.
                                                    Компания предоставляет консалтинговые и сервисные услуги, а также
                                                    разрабатывает SaaS-решения и различные интеграции.
                                                </p>
                                                <a href="#" class="rts-btn btn-primary d-none" target="_blank">
                                                    @lang('index.buttons.more-details')
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 d-none">
                                                <img src="assets/images/brand/moyskladsertifi.webp" width="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -product area End -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="marketing" role="tabpanel"
                            aria-labelledby="contact-marketing">
                            <!-- tab product area -->
                            <div class="row g-5">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- single -product area -->
                                    <div class="rts-product-one">
                                        <div class="product-contact-wrapper row">
                                            <div class="col-sm-12 col-lg-6">
                                                <a href="https://marketing.uz/assotsiirovannye-partnery/dora.htm"
                                                    target="_blank">
                                                    <h3 class="title">Ассоциированные партнеры MARKETING.UZ</h3>
                                                </a>
                                                <p class="">
                                                    Добро пожаловать в самое крупное бизнес-сообщество маркетологов
                                                    Центральной Азии!
                                                    Мы объединяем тех, кто развивает бизнес в Узбекистане с помощью
                                                    маркетинга и его инструментов.
                                                </p>
                                                <a href="https://marketing.uz/assotsiirovannye-partnery/dora.htm"
                                                    class="rts-btn btn-primary" target="_blank">
                                                    @lang('index.buttons.more-details')
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <img src="assets/images/brand/marketingsertifi.webp" width="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single -product area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- project section end -->

<x-brend />


<!-- cta section start -->
<div class="rts-cta-section-start rts-section-gap cta-bg-h4">
    <div class="container">
        <div class="row">
            <div class="title-area text-center">
                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.about_projects_p')</span>
                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    @lang('index.about_projects_title')</h3>
                <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <a href="{{ route('portfolio') }}" class="rts-btn btn-primary">@lang('index.about_projects_button') <i
                            class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta section end -->

<x-teams />


@endsection
