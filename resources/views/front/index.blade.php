@extends('layouts.layout')
@section('content')

@section('title')
DORA - DIGITAL COMPANY
@endsection

@section('desc')
@lang('desc.home') DORA
@endsection
@section('keywords')Разработка сайтов, СММ продвижение, Создание сайтов, Продвижение соц сетях, Разработка интернет магазинов в ташкенте, разработка логотипов в ташкенте, разработка телеграм ботов, создание телеграм ботов, брендинг в ташкенте, сео продвижение, seo продвижение сайтов в ташкенте, контекстная реклама, срм системы в ташкенте, программа для автоматизации, битрикс24, разработчики сайтов, рекламные ролики, видеосъемка в ташкенте, рекламные компании, веб студия, онлайн реклама, нейминг в ташкенте, разработка мобильных приложении, amocrm, амосрм, мой склад, складской учет, программа для торговли@endsection
<x-index-home />

<x-our-services />

<x-brend />

<x-popular-service/>

<x-banner-call />

<x-contacts />

<script>
    setTimeout(() => {
      document.getElementById('popupBox').style.display = "block";
      document.getElementById('owerly_DR').style.display = "block";
      document.getElementById('consulting').style.display = "none";
    }, 20000);
</script>

@endsection
