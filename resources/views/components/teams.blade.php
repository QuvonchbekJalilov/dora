
<div style ="display: none;" class="rts-team-area rts-section-gap bg-team">
        <div class="container">
            <div class="row ">
                <div class="title-area text-center pt--115 pt_md--0 pt_sm--0">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">@lang('index.team_p')</span>
                    <h3 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">@lang('index.team_title')</h3>
                </div>
            </div>
            <div class="row g-24">
             @foreach ($teams as $team)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                  
                    <div class="single-team-two">
                        <a class="thumbnail">
                            <img src="/storage/{{$team->rasm}}" alt="team-area">
                        </a>
                        <div class="inner">
                            <a>
                                <h5>{{$team->name}}</h5>
                            </a>
                            <span class="desig">
                            {{$team['cat_'. \App::getLocale()]}}
                            </span>
                            <div class="social-wrapper-two">
                                <ul>
                                    <li>
                                        <a href="{{$team->facebook}}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$team->twitter}}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$team->instagram}}">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$team->github}}">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                </div>
                @endforeach
        </div>
     </div>
</div>