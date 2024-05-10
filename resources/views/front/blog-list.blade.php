@extends('layouts.layout')
@section('content')

@section('title')
{{$blog['title_'. \App::getLocale()] }} | @lang('index.menu_blog_title') 
@endsection

@section('desc')
{{$blog['title_'. \App::getLocale()] }} | @lang('index.menu_blog_title') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="bread-tag">
               <a href="{{route('index')}}" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.home')</a>
               <span> / </span>
               <a href="/blog" class="active" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">@lang('index.blog')</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end breadcrumb area -->
<!-- rts blog mlist area -->
<div class="rts-blog-list-area rts-section-gap">
   <div class="container">
      <div class="row g-5">
         <!-- rts blo post area -->
         <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <!-- single post -->
            <div class="blog-single-post-listing details mb--0">
               <div class="thumbnail">
                  <img src="{{ asset('/storage/' . $blog->image) }}" alt="Business-Blog">
               </div>
               <div class="blog-listing-content">
                  <div class="user-info">
                     <!-- single info -->
                     <div class="single">
                        <i class="far fa-user-circle"></i>
                        <span style="color: black;">{{$blog->smit}}</span>
                     </div>
                     <!-- single infoe end -->
                     <!-- single info -->
                     <div class="single">
                        <i class="far fa-clock"></i>
                        <span style="color: black;">{{$blog->date}}</span>
                     </div>
                     <!-- single infoe end -->
                     <!-- single info -->
                     <div class="blog-text">
                       <h1 class="title"> {{$blog['title_'. \App::getLocale()]}}</h1>
                       <p class="disc para-1">
                          {!!$blog['text_'. \App::getLocale()]!!}
                       </p>
                    </div>
                     <!-- single infoe end -->
                  </div>
                  <div>
                  </div>
                  <a class="rts-btn btn-primary" href="{{route('index')}}">@lang('index.home')</a>
               </div>
            </div>
            <!-- single post End-->
         </div>

         <!-- rts-blog post end area -->
         <!--rts blog wizered area -->
         <!-- rts- blog wizered end area -->
      </div>
   </div>
</div>
<style>
   .blog-text a{
   color: #3a37eb;
   }
</style>
@endsection