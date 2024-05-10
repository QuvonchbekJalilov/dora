@extends('layouts.layout')
@section('content')

@section('title')
@lang('index.menu_contact_title')
@endsection

@section('desc')
@lang('desc.contact') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

<div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->

        <!-- inner menu area desktop End -->
    </div>

    <div id="anywhere-home"></div>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_contact_title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts circle progress area -->
    <div class="rts-circle-progress-area rts-section-gap">
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="appoinment-area-one " >
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- appoinment left area -->
                                <div class="appoinment-left">
                                    <div class="title-area">
                                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_p')
                                        </span>
                                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_title')
                                        </h3>
                                        <p class="disc" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                        @lang('index.contact_text')
                                        </p>
                                        <div class="communicate-area" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/01.svg" alt="creative_icon">
                                            <div class="details-area">
                                                <span>@lang('index.contact_gmail')</span>
                                                <a href="mailto:info@dora.com">info@dora.uz</a>
                                            </div>
                                        </div>
                                        <div style="align-items:flex-start" class="communicate-area mt--30" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                            <img src="assets/images/appoinment/icon/02.svg" alt="creative_icon">
                                            <div class="details-area">
                                              
                                                
                                                 <div class="mb-3">
                                                     <span>@lang('index.development_department')</span>
                                                     <a href="tel:+998935125324" class="mb-3">+998 93 512 53 24</a>
                                                 </div>
                                                 <div class="mb-3">
                                                     <span>@lang('index.marketing_department')</span>
                                                     <a href="tel:+998935145324">+998 93 514 53 24</a>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- appoinment left area End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- appoinment-right -->
                                <div class="appoinment-right">
                                    <form action="{{ url('bot')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                            <label for="name">@lang('index.name')</label>
                                            <input type="text" name="name" id="name" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                            <label for="Email">@lang('index.number')</label>
                                            <input type="text" name="number" id="number" value="+998" required maxlength="13" oninput="this.value = this.value.replace(/[^0-9.+{1}]/g, '').replace(/(\..*)\./g, '$1');" >
                                        </div>
                                        <button class="py-4 py-md-5  border btn-primary mt--30  ">@lang('index.submit')</button>
                                    </form>
                                </div>
                                <!-- appoinment-right End -->
                            </div>
                        </div>
                    </div>
                    <div class="appoinment-shape">
                        <img class="shape-1 shape" src="assets/images/appoinment/shape/01.png" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
                        <img class="shape shape-2" src="assets/images/appoinment/shape/02.png" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="rts-circle-progress-area rts-section-gap"
        style="padding-bottom: 40px; padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="appoinment-area-one" 
                        style="padding: 40px;">
                        <div class="row">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.644575748704!2d69.21566071193689!3d41.294839271192004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b7bb3e26fc1%3A0x93f3f483b0ab19c6!2zRG9yYSAtINCh0L7Qt9C00LDQvdC40LUg0YHQsNC50YLQvtCyINCyINCj0LfQsdC10LrQuNGB0YLQsNC90LU!5e0!3m2!1sru!2s!4v1694854285178!5m2!1sru!2s" 
                                width="600" 
                                height="450" 
                                style="border:0;"
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                            >
                            </iframe>
                        </div>
                    </div>
                    <div class="appoinment-shape">
                        <img class="shape-1 shape sal-animate" src="assets/images/appoinment/shape/01.png" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
                        <img class="shape shape-2 sal-animate" src="assets/images/appoinment/shape/02.png" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
    .abbos_btn{
  
  background: #ffffff;
  padding: 0.5rem 1rem;
    }
    </style>

    @endsection
