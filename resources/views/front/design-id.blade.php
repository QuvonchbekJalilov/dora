@extends('layouts.layout')
@section('content')

@section('title')Реклама {{$design_services['title_'. \App::getLocale()] }} в Ташкенте Цена от {{$design_services['price'] }}$ - DORA @endsection

@section('desc')Реклама {{$design_services['title_'. \App::getLocale()] }} в Ташкенте Цена от {{$design_services['price'] }}$, @lang('desc.design') @endsection

@section('keywords')landing page на русском, Сайт-визитка, Корпоративные сайты, Интернет-магазины, Сайт-каталог,landing page дизайн это,Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection


    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{$design_services['title_'. \App::getLocale()] }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- start service details area -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- service details left area start -->
                    <div class="">
                        <div class="thumbnail mb--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <img src="/storage/{{$design_services->image ?? 'noimage'}}" alt="business-area">
                        </div>
                        <h4 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            {{$design_services['title_'. \App::getLocale()] }}
                        </h4>
                        <p class="desc" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            {!!$design_services['text_'. \App::getLocale()]!!}
                        </p>
                    </div>
                </div>
                
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                        <div class="wized-header">
                            <h5 class="title">
                                @lang('index.services')
                            </h5>
                        </div>
                        <div class="wized-body">
                            @foreach($designservices as $item)
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="{{ route('designservicesID', $item->id) }}">{{ $item['title_' . \App::getLocale()] }} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            @endforeach
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized download service" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="wized-header">
                            <h5 class="title">@lang('index.buttons.download')</h5>
                        </div>
                        <div class="wized-body">
                            <!-- single downlaod area start -->
                            <div class="single-download-area">
                                <img src="/assets/images/service/icon/07.svg" alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        @lang('index.about')
                                    </h6>
                                    <span>@lang('index.buttons.view')</span>
                                </div>
                                <a class=" rts-btn btn-primary" href="/assets/about_dora_ru.pdf"><i class="fal fa-arrow-right"></i></a>
                            </div>
                            <!-- single downlaod area End -->
                            <!-- single downlaod area start -->
                             <!--<div class="single-download-area">
                                <img src="/assets/images/service/icon/08.svg" alt="Business_downlaod">
                                <div class="mid">
                                    <h6 class="title">
                                        Company Details
                                    </h6>
                                    <span>@lang('index.buttons.download')</span>
                                </div>
                                <a class=" rts-btn btn-primary" href="/assets/about_dora_ru.pdf"><i class="fal fa-arrow-right"></i></a>
                            </div>-->
                            <!-- single downlaod area End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <style>
                        .single-download-area i {
                            color: #fff;
                            font-size: 28px;
                        }
                    </style>
                    <div class="rts-single-wized download service bg-light" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                       <!-- single downlaod area start -->
                        <div class="single-download-area">
                            <i class="fa-regular fa-credit-card" style="color: #000;"></i>
                            <div class="mid">
                                <h6 class="title text-dark">
                                    @lang('index.price')
                                </h6>
                            </div>
                            <a class="title text-dark fw-bolder">
                               @lang('index.from') <span type="text" id="price_sum" name="price_sum">{{$design_services['price'] }}$</span> @lang('index.from_uz')
                            </a>
                        </div>
                        <!-- single downlaod area End -->
                        <!-- single downlaod area start -->
                        <div class="single-download-area">
                            <i class="fa-regular fa-clock" style="color: #000;"></i>
                            <div class="mid">
                                <h6 class="title text-dark">
                                    @lang('index.lifetime')
                                </h6>
                                
                            </div>
                            <a class="title text-dark fw-bolder">
                                {{$design_services['date_'. \App::getLocale()] }}
                            </a>
                        </div>
                        <!-- single downlaod area End -->
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
                    
        </div>
    </div>
  
    <x-banner-call />  
    
    <x-banner-web-services /> 
    
    <script>
    const formatter = new Intl.NumberFormat('uzs', {
    			style: 'currency',
    			currency: 'UZS',
    		});
    		
    const today = new Date();
        
    // Get the current date components
    var year = today.getFullYear();
    var month = String(today.getMonth() + 1).padStart(2, '0'); // Zero-padding the month
    var day = String(today.getDate()).padStart(2, '0'); // Zero-padding the day
    
    // Format the date as "YYYY-MM-DD"
    var formattedDate = year + '-' + month + '-' + day;
    console.log('Date', formattedDate)
    var currency = "USD";
    let uri = "https://cbu.uz" + "/oz/arkhiv-kursov-valyut/json/" + currency + "/" + formattedDate;
    let price_sum;
    fetch(uri)
      .then(response => response.json())
      .then(data => {
        console.log(data);
        
        const course = data[0].Rate;
        
        // Accessing the Rate object information
        console.log(course); // This will log the Rate object
        
        price_usd = {{$design_services['price'] }}
        
        let price_sum = price_usd * course;
    
        document.getElementById('price_sum').textContent = formatter.format(price_sum);
      
    });
    
    // Assuming you have a JSON object that contains the amount
    
    </script>
    @endsection
