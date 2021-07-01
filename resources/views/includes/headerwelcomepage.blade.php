
<section class="header">
    <div class="container-fluid">
        <div class="navigation">
            <div class="row">
                <div class="col-md-4 col-sm-8 col-xs-8">
                    <a href="#" class="hidden-xs"><img src="{{ url('/') }}/website/images/logo.png" class="logo"></a>
                    <a href="#" class="hidden-lg hidden-md hidden-sm"><img src="{{ url('/') }}/website/images/logo2.png" class="logo"></a>

                </div>
                <div class="col-md-8 col-sm-4 col-xs-4">
                    <i class="fa fa-bars clicker fa-2x" onclick="openNav()"></i>


                    <nav class="navbar navbar-default overlay" id="myNav">
                        <a href="javascript:void(0)" class="closebtn hidden-lg hidden-md" onclick="closeNav()">&times;</a>

                        <img src="{{ url('/') }}/website/images/logo2.png" class="logo2 hidden-lg hidden-md">

                        <ul class="nav navbar-nav overlay-content">
                            <li class="active"><a href="{{ url('/') }}">@lang('site.main')</a></li>
                            <li><a href="{{ url('/aboutus') }}">@lang('site.aboutus')</a></li>
                            <li><a href="{{ url('/service') }}">@lang('site.services')</a></li>
                            <li><a href="{{ url('/projects') }}">@lang('site.projects')</a></li>
                            <li><a href="{{ url('/contactus') }}">@lang('site.contactus')</a></li>
                            <li>
                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if (App::getLocale() == 'ar')
                                            {{ LaravelLocalization::getCurrentLocaleName() }}
                                            <img src="{{ url('/') }}/website/images/EG.png" alt="">
                                        @else
                                            {{ LaravelLocalization::getCurrentLocaleName() }}
                                            <img src="{{ url('/') }}/website/images/US.png" alt="">
                                        @endif
                                    </button>
                                    <div class="dropdown-menu">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </li>




                            <li class="search">
                                <a href="#" class="search_btn"><i class="fa fa-search"></i></a>
                                <div class="search_sec">
                                    <form class="input-group" action="{{ url('/singleproject')}}" method="get">
                                        <div class="form-group">
                                            <input type="text" name="search" class="form-control" placeholder="اكتب بحثك هنا..." value="{{ request()->search }}">
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>


                    </nav>
                    <div id="body-overlay"></div>
                    <div id="body-overlay2"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
	end-header
				-->
<section class="slider">
    <img src="{{$website_image}}" class="slider_bg">
    <div class="row">
        <div id="main_slider">
            @foreach($all_projects as $project)
                <div class="item">
                    <div class="col-md-7 col-sm-6 col-xs-5">
                        <div class="img_container">
                            <img src="{{asset($project->project_image)}}" class="slider_img">
                        </div>
                    </div>
                </div><!-- item -->
            @endforeach

        </div>

        <div class="col-md-5 col-sm-6 col-xs-7 main_text">
            <div class="slider_text">
                <h1>
                    @if( app()->getLocale()=="ar")
                        {{$aboutus_headertext_ar}}
                    @else
                        {{$aboutus_headertext_en}}
                    @endif
                </h1>
                <p>
                    @if( app()->getLocale()=="ar")
                        {{$aboutus_paragraphtext_ar}}
                    @else
                        {{$aboutus_paragraphtext_en}}
                    @endif
                </p>
                <a href="{{ url('/aboutus') }}" class="btn">@lang('site.read_more')</a>
            </div>
            <ul class="list-inline share">
                <li><a href="{{$company_instagram_account}}">Instgram</a></li>
                <li><a href="{{$company_facebook_account}}">Facebook</a></li>
            </ul>
        </div>

    </div>
</section>
<!-- end_slider -->
