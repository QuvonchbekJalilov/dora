@extends('layouts.layout')
@section('content')

@section('title')
@lang('desc.services')
@endsection

@section('desc')
@lang('desc.services') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

<style>
    .rts-single-wized .single-categories li a {
        justify-content: left;
    }
</style>
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">QISQACHA MARKETING LUG‘ATI</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            
            <div class="row">
            <!--rts blog wizered area -->
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
  
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                        
                        <div class="wized-body">
                             @foreach ($dictionaries as $dictionar)
                                    <div id="siteservices">
                                             <ul class="single-categories">
                                                <li><a><span class="fw-bold me-2"> {{ $dictionar->getTranslatedAttribute('title', app()->getLocale())  }} </span>–<span class="ms-2"> {{ $dictionar->getTranslatedAttribute('text', app()->getLocale())  }} </span></a></li>
                                            </ul>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
        
    </div>
    
@endsection