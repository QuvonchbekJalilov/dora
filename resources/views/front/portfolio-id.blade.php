@extends('layouts.layout')
@section('content')

@section('title')Проект "{{$portfolio['title_'. \App::getLocale()] }}" от Доры @endsection

@section('desc'){{$portfolio['title_'. \App::getLocale()] }} Это @lang('desc.portfolio').@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$portfolio['title_'. \App::getLocale()] }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- project details image area -->
    <div class="rts-project-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="big-bg-porduct-details">
                        <img style="object-fit: contain; aspect-ratio: 4/2;"      src="/storage/{{$portfolio->image}}" alt="Business_Finbiz">
                        <div class="project-info" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="info-head">
                                <h5 class="title">@lang('index.portfolio_d_t')</h5>
                            </div>
                            <div class="info-body">
                                <!-- single info -->
                                <div class="single-info">
                                    <form action="{{ url('bot')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                                <label for="name"> <p>@lang('index.name') </p>  </label>
                                            <input type="text" name="name" id="name" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                          <label for="number" > <p>@lang('index.number') </p></label> 
                                            <input type="text" name="number" id="number" value="+998" required pattern="[0-9]+" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.+{1}]/g, '').replace(/(\..*)\./g, '$1');" >
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                            <label for="message"><p>@lang('index.message')</p>  </label>
                                            <textarea id="message" name="message"></textarea>
                                        </div>
                                        <button class="py-3 border border-radius-3 btn-primary mt--30 buttoncha">@lang('index.submit')</button>
                                    </form>
                                </div>
                                <!-- end single info -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--70 mb--50">
                <div class="col-12">
                    <div class="product-details-main-inner">
                        
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">{{$portfolio['title_'. \App::getLocale()] }}</h3>
                        
                        <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">{!!$portfolio['text_'. \App::getLocale()]!!}</p>
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>
    <x-zayafku />
    @endsection