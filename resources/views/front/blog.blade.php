@extends('layouts.layout')
@section('content')

@section('title')
@lang('index.menu_blog_title')
@endsection

@section('desc')
@lang('desc.blog') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_blog_title')</h1>
                </div>
               
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog grid area -->
    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">
                    @foreach ($blogs ->sortByDesc('id') as $blog)
                        <div class="col-lg-4 col-md-4 сol-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="{{ route('blogid',$blog->id) }}">
                                        <img src="{{ asset('/storage/' . $blog->image) }}" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            <i class="fal fa-user-circle"></i>
                                            <span>{{$blog->smit}}</span>
                                        </div>

                                    </div>
                                    <div class="date">
                                        <span style="color: black;">{{ $blog->date }}</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('blogid',$blog->id) }}">
                                        <h5 class="title">
                                            {{$blog['title_'. \App::getLocale()]}}
                                        </h5>
                                    </a>
                                </div>
                            </div>

                        </div>
                       @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
