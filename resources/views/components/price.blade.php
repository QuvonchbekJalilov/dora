
<style>
    .single-pricing-area-h2 .pricing-body .title {
        font-size: 28px;
    }
    .single-feature {
        position: relative;
        transition: all 1s linear;
    }
    .feature-area-span span {
        display: none;
        position: absolute;
        bottom: -16px;
        left: -100px;
        opacity: 0;
        transition: all 1s linear;
        
    }
    .feature-area-span {
        cursor: pointer;
        width: 100%;
    }
    .feature-area-span:hover > span {
        display: block;
        left: 15px;
        bottom: -16px;
        opacity: 1;
        transition: all 1s linear;
    }
</style>
    <!-- rts pricing area start -->
    <div class="pricing-area-h2 rts-section-gap">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area">
                        <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Техническая поддержка сайтов</h2>
                    </div>
                </div>
            </div>
            <div class="row g-24">

                <div class="col-lg-4">
                    <!-- single pricing start -->
                    <div class="single-pricing-area-h2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-head">
                            <h5 class="title">
                                Базовый
                            </h5>
                        </div>
                        <div class="pricing-body">
                            <h3 class="title">
                                483.000 UZS <span>/ежемесячно</span>
                            </h3>
                            <p class="disc">
                                Мониторинг бесперебойной работы сайта, полное бэкапирование на наши сервера 1 раз в месяц
                            </p>
                            <div class="feature-area">
                                <div class="single-feature">
                                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                                    <span>Рекомендации по развитию сайта</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Включенные работы</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">
                                        Включено часов 
                                        <span style="font-size: 12px;">16ч (ставка  235.000 UZS)</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Изменение контента
                                        <span style="font-size: 12px;">100.000 UZS/ч</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Стоимость часа сверх тарифа
                                        <span style="font-size: 12px;">270.000 UZS</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Время ответа менеджера
                                        <span style="font-size: 12px;">Не более 4 часов</span>
                                    </span>
                                    
                                </div> 
                            </div>
                            <a class="rts-btn btn-secondary" onclick="openBox_DR()">@lang('index.start')</a>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
                <div class="col-lg-4">
                    <!-- single pricing start -->
                    <div class="single-pricing-area-h2 standared" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-head">
                            <h5 class="title">
                                Бизнес
                            </h5>
                        </div>
                        <div class="pricing-body">
                            <h3 class="title">
                                795.000 UZS <span>/ежемесячно</span>
                            </h3>
                            <p class="disc">
                                Как в Базовом + инкрементное ежедневное бэкапирование проекта на наши площадки
                            </p>
                            <div class="feature-area">
                                <div class="single-feature">
                                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                                    <span>Рекомендации по развитию сайта</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Включенные работы</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">
                                        Включено часов 
                                        <span style="font-size: 12px;">50ч (ставка  205.000 UZS)</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Изменение контента
                                        <span style="font-size: 12px;">85.000 UZS/ч</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Стоимость часа сверх тарифа
                                        <span style="font-size: 12px;">240.000 UZS</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Время ответа менеджера
                                        <span style="font-size: 12px;">Не более 2 часов</span>
                                    </span>
                                    
                                </div> 
                            </div>
                            <a class="rts-btn btn-secondary" onclick="openBox_DR()">@lang('index.start')</a>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
                <div class="col-lg-4">
                    <!-- single pricing start -->
                    <div class="single-pricing-area-h2" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="pricing-head">
                            <h5 class="title">
                                Корпоративный
                            </h5>
                        </div>
                        <div class="pricing-body">
                            <h3 class="title">
                                1.059.000 UZS <span>/ежемесячно</span>
                            </h3>
                            <p class="disc">
                                Как в Бизнес + ежемесячная проверка на уязвимости
                            </p>
                            <div class="feature-area">
                                <div class="single-feature">
                                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                                    <span>Рекомендации по развитию сайта</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Включенные работы</span>
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">
                                        Включено часов 
                                        <span style="font-size: 12px;">90ч (ставка  185.000 UZS)</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Изменение контента
                                        <span style="font-size: 12px;">70.000 UZS/ч</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Стоимость часа сверх тарифа
                                        <span style="font-size: 12px;">220.000 UZS</span>
                                    </span>
                                    
                                </div>
                                <div class="single-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="feature-area-span">Время ответа менеджера
                                        <span style="font-size: 12px;">Не более 1 часов</span>
                                    </span>
                                    
                                </div> 
                            </div>
                            <a class="rts-btn btn-secondary" onclick="openBox_DR()">@lang('index.start')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
