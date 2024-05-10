@extends('layouts.layout')

@section('title')
@lang('index.brif_title')
@endsection

@section('desc')
@lang('index.brif') - DORA
@endsection

    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb-1">
                    <h1 class="title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">@lang('index.brif_title')</h1>
                </div>
            </div>
        </div>
    </div>
    
     <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfxVGfOkbH8QZRrNcuUB4qF7jZfZClEyJuXLQA7RC6JwVCLSA/viewform?embedded=true" width="100%" height="6300" id="brid_ifream" frameborder="0" marginheight="0" marginwidth="0">Загрузка…</iframe>
    </div>
    </div>
    </div>
    
    <script>
        let mG61Hd = document.getElementById('mG61Hd');
        
        mG61Hd.addEventListener('submit', () => {
            console.log('submit ishladi');
            document.getElementById('brid_ifream').style.height = "100% !important";
            setTimeout(() => {
               window.location.replace(
                    "https://dora.uz",
                );
            }, 3000);
        });
        
    </script>