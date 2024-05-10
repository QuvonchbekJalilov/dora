<div class="rts-project-area rts-section-gap bgproject-area" id="portfolio">
    <div class="container">
             <div class="row">
             <div class="title-area text-center pt_md--0 pt_sm--0">
                    <h3 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.menu_contact_title')</h3>
                </div>
                <div class="col-12">
                    <div class="appoinment-area-one mt--120 mt_sm--60">
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
                                            <!--<img src="assets/images/appoinment/icon/01.svg" alt="creative_icon">-->
                                            <div class="details-area">
                                                <span>@lang('index.contact_gmail')</span>
                                                <a href="mailto:info@dora.uz">info@dora.uz</a>
                                            </div>
                                        </div>
                                        <div class="communicate-area mt--30" data-sal-delay="550" data-sal="slide-up" data-sal-duration="800">
                                            <!--<img src="assets/images/appoinment/icon/03.png" alt="creative_icon">-->
                                            
                                            <div class="details-area">
                                                <span>@lang('index.contact_number')</span>
                                                <a href="tel:+998935135324">+998 93 513 53 24</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .details-area {
                                        margin-left: 0 !important;
                                    }
                                </style>
                                <!-- appoinment left area End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- appoinment-right -->
                                <div class="appoinment-right">
                                   <form action="{{ url('bot')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="single-input" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                            <label for="name">@lang('index.name')</label>
                                            <input type="text" name="name" id="name" onkeydown="return /[a-zA-Z]/i.test(event.key)" required>
                                        </div>
                                        <div class="single-input mt--20" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                            <label for="Email">@lang('index.number')</label>
                                            <input type="text" name="number" id="number" value="+998" required maxlength="13" oninput="this.value = this.value.replace(/[^0-9.+{1}]/g, '').replace(/(\..*)\./g, '$1');" >
                                        </div>
                                       
                                        <button class="py-4 py-md-5  border btn-primary mt--30" style="border-radius: 16px;">@lang('index.submit')</button>
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

<style>
   
     .abbos_btn{
   
  background: #ffffff;
  padding: 0.5rem 1rem;
    }
</style>
