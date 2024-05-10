@extends('layouts.layout')

@section('title')
@lang('index.testimonial_title')
@endsection

@section('desc')
@lang('index.testimonial_title') - DORA
@endsection

@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 breadcrumb-1">
                <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.testimonial_title')</h1>
            </div>
        </div>
    </div>
</div>

<div class="rts-team-area pt_sm--40 rts-section-gap2Bottom">
  <div class="container">

    <div class="row g-24 mt-4 justify-content-center img_box">
        
        @foreach($rewievs as $item)
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 col-12 mx-3" style="box-shadow: 1px 3px 13px #ccc; padding: 12px;">
        <div class="team-single-digital rts-img-reveal-item" data-subtitle="{{ $item->Title }}" data-title="{{ $item->Title }}"
          >
          <!--<a href="#" onclick class="thumbnail">-->
            <img class="img-testim" src="{{asset('storage/'. $item->img) }}" alt="{{ $item->Title }}">
          <!--</a>-->
          <div class="rts-img-reveal-wrapper">
            <div class="rts-img-reveal-wrapper__inner">
              <div class="rts-img-reveal-wrapper__img">
                <div class="rts-hover-wrapper">

                </div>
              </div>
            </div>
          </div>
          <div class="rts-img-reveal-wrapper">
            <div class="rts-img-reveal-wrapper__inner" style="overflow: hidden;">
              <div class="rts-img-reveal-wrapper__img" style="background-image:url()">
                <div class="rts-hover-wrapper">
                  <h3 class="rts-hover-title animated fadeIn">{{ $item->Title }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</div>


<style>
    .active_image{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
        width: 376px !important;
    }
    @media (min-width: 769px) {
         .active_image{
      width: 560px !important;
         }
    }
</style>

<script>
let activeImages = document.querySelector('body');
let images = document.querySelectorAll('.img-testim');

    activeImages.addEventListener('click', (e) => {
        
        if(e.target.nodeName === 'IMG'){
        images.forEach(item =>{
            item.classList.remove('active_image')
        });
        document.getElementById('owerly_DR').style.display = "block";
        e.target.classList.toggle("active_image");
        
        } else if(e.target.nodeName !== 'IMG'){
            images.forEach(item =>{
                item.classList.remove('active_image')
                document.getElementById('owerly_DR').style.display = "none";
            });
        }
        
    })

// 


</script>



