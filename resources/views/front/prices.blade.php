@extends('layouts.layout')
@section('content')

@section('title')
@lang('index.price') - DORA
@endsection

@section('desc')
@lang('index.price_title') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.price_title')</h1>
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
                        <div class="wized-header">
                           <div class="tab-button-area-one">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" onclick="clickHome()">@lang('index.all')</button>
                                </li>
                              
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" onclick="clickSiteservices()">@lang('index.website_development')</button>
                                </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" onclick="clickSeoservices()"> @lang('index.advertising') </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tabs" data-bs-toggle="tab" data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false" onclick="clickDesignservices()">@lang('index.social_media_add')</button>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <div class="wized-body">
                           <div id="siteservices">
                                @foreach($siteservices as $item)
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{ route('siteservicesID', $item->id) }}">{{ $item['title_' . \App::getLocale()] }} <span>@lang('index.from') <span id="price">{{$item['price'] }}</span> @lang('index.from_uz')</span></a></li>
                                    <input type="hidden" id="input_price" value="{{$item['price'] }}"/>
                                </ul>
                                <!-- single categoris End -->
                                @endforeach
                           </div>
                            
                            <div id="seoservices">
                                 @foreach($seoservices as $item)
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{ route('seoservicesID', $item->id) }}">{{ $item['title_' . \App::getLocale()] }} <span>@lang('index.from') <span id="price">{{$item['price'] }}</span> @lang('index.from_uz')</span></a></li>
                                </ul>
                                <!-- single categoris End -->
                                @endforeach
                            </div>
                            
                            <div id="designservices">
                                @foreach($designservices as $item)
                                <!-- single categoris -->
                                <ul class="single-categories">
                                    <li><a href="{{ route('designservicesID', $item->id) }}">{{ $item['title_' . \App::getLocale()] }} <span>@lang('index.from') <span id="price">{{$item['price'] }}</span> @lang('index.from_uz')</span></a></li>
                                </ul>
                                <!-- single categoris End -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
        </div>
    </div>
        
    </div>

    <script>
        function clickHome() {
            document.getElementById('siteservices').style.display = "block";
            document.getElementById('seoservices').style.display = "block";
            document.getElementById('designservices').style.display = "block";
        }
        
        function clickSiteservices() {
            document.getElementById('siteservices').style.display = "block";
            document.getElementById('seoservices').style.display = "none";
            document.getElementById('designservices').style.display = "none";
        }
        function clickSeoservices() {
            document.getElementById('siteservices').style.display = "none";
            document.getElementById('seoservices').style.display = "block";
            document.getElementById('designservices').style.display = "none";
        }
        function clickDesignservices() {
            document.getElementById('siteservices').style.display = "none";
            document.getElementById('seoservices').style.display = "none";
            document.getElementById('designservices').style.display = "block";
        }
    </script>
    
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
            let input_price = document.querySelectorAll('#price');
            
            input_price.forEach((element) => {
            
            let calcSum = element.textContent * course;
            element.textContent = formatter.format(calcSum); 
        });
           
           // console.log(price_usd)
            
            // let price_sum = price_usd * course;
        
            // document.getElementById('price_sum').textContent = formatter.format(price_sum);
          
        });
        
    </script>
    
    </section>

@endsection