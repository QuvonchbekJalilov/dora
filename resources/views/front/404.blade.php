@extends('layouts.layout')
@section('content')

@section('title')
    @lang('desc.home_desc');
@endsection

@section('desc')
    @lang('desc.home');
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

<!-- rts- 404 area start -->
    <div class="rts-404-area rts-section-gap" style="padding-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="404wrapper text-center">
                        <div class="thumbnail">
                            <img src="/assets/images/contact/shape/404.png" alt="">
                        </div>
                        <h2 class="title mt--40">
                           @lang('index.404.title')
                        </h2>
                        <p class="disc">@lang('index.404.desc')</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a class="rts-btn btn-primary mx-2" href="tel:+998935125324">+998 93 513 5324</a>
                            <a class="rts-btn btn-primary mx-2" href="/">@lang('index.404.btn')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts- 404 area end -->
    
@endsection