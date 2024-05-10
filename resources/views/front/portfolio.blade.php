@extends('layouts.layout')
@section('content')

@section('title')
@lang('index.menu_portfolio_title')
@endsection

@section('desc')
@lang('desc.portfolio') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_portfolio_title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!--portfolio-area start-->
    <section class="portfolio-area style-5 pt--120 pb--120 pt_xs--60 pt_xs--60">
        <div class="container">
            <div class="row">
                @foreach ($portfolio -> sortByDesc('created_at') as $ports)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <div class="portfolio-wrapper">
                            <div class="img-fluid">
                                <img src="/storage/{{$ports->image}}" alt="Portfolio Img">
                            </div>
                            <div class="single-portfolio">
                                ss
                                <!--<span>{{$ports['category_'. \App::getLocale()]}}</span>-->
                                <h4 class="portfolio-title text-white">{{$ports['title_'. \App::getLocale()]}}</h4>
                            </div>
                            <a class="pf-btn" href="{{ route('portshow',$ports->id) }}"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @endsection