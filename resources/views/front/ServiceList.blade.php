@extends('layouts.layout')
@section('content')

@section('title')
@lang('desc.services')
@endsection

@section('desc')
@lang('desc.services') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
            <h1 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.services')</h1>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="bread-tag">
               <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="text-primary">@lang('index.portfolio_detals_menu')</a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="rts-project-area rts-section-gap">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="tab-button-area-one">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">@lang('index.all')</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> @lang('index.website_development') </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> @lang('index.advertising') </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="contact-tabs" data-bs-toggle="tab" data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false"> @lang('index.social_media_add') </button>
                  </li>
               </ul>
            </div>
            <div class="tab-content-area mt--50 mt_sm--30">
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <!-- tab product area -->
                     <div class="row g-5">
                        @foreach($siteservices as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                           <!-- single -product area -->
                           <div class="rts-product-one">
                              <div class="product-contact-wrapper">
                                 <a href="{{ route('siteservicesID', $item->id) }}">
                                    <h5 class="title"> {{ $item['title_' . \App::getLocale()] }}</h5>
                                 </a>
                                 <span class="text-primary">@lang('index.website_development')</span>
                              </div>
                           </div>
                           <!-- single -product area End -->
                        </div>
                        @endforeach
                        @foreach($seoservices as $seoservice)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                           <!-- single -product area -->
                           <div class="rts-product-one">
                              <div class="product-contact-wrapper">
                                 <a href="{{ route('seoservicesID', $seoservice->id) }}">
                                    <h5 class="title">{{ $seoservice['title_' . \App::getLocale()] }}</h5>
                                 </a>
                                 <span class="text-primary">@lang('index.advertising')</span>
                              </div>
                           </div>
                           <!-- single -product area End -->
                        </div>
                        @endforeach
                        @foreach($designservices as $designservice)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                           <!-- single -product area -->
                           <div class="rts-product-one">
                              <div class="product-contact-wrapper">
                                 <a href="{{ route('designservicesID', $designservice->id) }}">
                                    <h5 class="title">{{$designservice['title_'. \App::getLocale()] }}</h5>
                                 </a>
                                 <span class="text-primary">@lang('index.social_media_add')</span>
                              </div>
                           </div>
                           <!-- single -product area End -->
                        </div>
                        @endforeach
                     </div>
                     <!-- tab product area end-->
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <!-- tab product area -->
                     <div class="row g-5">
                        @foreach($designservices as $designservice)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                           <!-- single -product area -->
                           <div class="rts-product-one">
                              <div class="product-contact-wrapper">
                                 <a href="{{ route('designservicesID', $designservice->id) }}">
                                    <h5 class="title">{{$designservice['title_'. \App::getLocale()] }}</h5>
                                 </a>
                                 <span class="text-primary">@lang('index.website_development')</span>
                              </div>
                           </div>
                           <!-- single -product area End -->
                        </div>
                        @endforeach
                     </div>
                     <!-- tab product area end-->
                  </div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <!-- tab product area -->
                     <div class="row g-5">
                        @foreach($siteservices as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                           <!-- single -product area -->
                           <div class="rts-product-one">
                              <div class="product-contact-wrapper">
                                 <a href="{{ route('siteservicesID', $item->id) }}">
                                    <h5 class="title"> {{ $item['title_' . \App::getLocale()] }}</h5>
                                 </a>
                                 <span class="text-primary">@lang('index.advertising')</span>
                              </div>
                           </div>
                           <!-- single -product area End -->
                        </div>
                        @endforeach
                     </div>
                     <!-- tab product area end-->
                  </div>
                  <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contact-tabs">
                     <!-- tab product area -->
                     <div class="row g-5">
                        @foreach($seoservices as $seoservice)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                           <!-- single -product area -->
                           <div class="rts-product-one">
                              <div class="product-contact-wrapper">
                                 <a href="{{ route('seoservicesID', $seoservice->id) }}">
                                    <h5 class="title"> {{ $seoservice['title_' . \App::getLocale()] }}</h5>
                                 </a>
                                 <span class="text-primary">@lang('index.social_media_add')</span>
                              </div>
                           </div>
                           <!-- single -product area End -->
                        </div>
                        @endforeach
                     </div>
                     <!-- tab product area end-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
   .rts-product-one .thumbnail-area img {
   height: 30rem;
   object-fit: cover;
   }
</style>
<x-banner-call />
<x-banner-web-services />
<x-portfol />
@endsection