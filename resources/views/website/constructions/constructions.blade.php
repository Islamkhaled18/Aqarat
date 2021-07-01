@extends('layouts.inside_design')

@section('title')
    |
    @lang('site.constructions')

@endsection

@section('content')

    <section class="header">
        <div class="container-fluid">
            <div class="navigation">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-8">
                        <a href="#" class="hidden-xs"><img src="{{ url('/') }}/website/images/logo2.png" class="logo"></a>
                        <a href="#" class="hidden-lg hidden-md hidden-sm"><img src="{{ url('/') }}/website/images/logo2.png" class="logo"></a>

                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-4">
                        <i class="fa fa-bars clicker fa-2x" onclick="openNav()"></i>


                        <nav class="navbar navbar-default overlay" id="myNav">
                            <a href="javascript:void(0)" class="closebtn hidden-lg hidden-md" onclick="closeNav()">&times;</a>

                            <img src="{{ url('/') }}/website/images/logo2.png" class="logo2 hidden-lg hidden-md">

                            <ul class="nav navbar-nav overlay-content">
                                <li><a href="{{ url('/') }}">@lang('site.main')</a></li>
                                <li><a href="{{ url('/aboutus') }}">@lang('site.aboutus')</a></li>
                                <li class="active"><a href="{{ url('/service') }}">@lang('site.services')</a></li>
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
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="اكتب بحثك هنا...">
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

    <section class="main-breadcrumb">
        <div class="container">
            <div class="text-breadcrumb center">
                <h2 class="title-breadcrumb">@lang('site.constructions')</h2>
                <h4>@lang('site.Your_best_partner_in_building_and_construction')</h4>
            </div>
            <ul class="breadcrumb center">
                <li><a href="{{ url('/') }}">@lang('site.main')</a></li>
                <li><a href="{{ url('/service') }}">@lang('site.services')</a></li>
                <li><a href="{{ url('/constructions') }}">@lang('site.constructions')</a></li>
            </ul>
        </div>
    </section>
    <!--
        main-breadcrumb
                    -->


    <section class="constructions-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="nav nav-tabs side-links">
                        <li class="active"><a data-toggle="tab" href="#home3">@lang('site.all_projects')</a></li>
                        <li><a data-toggle="tab" href="#menu9">@lang('site.interior_design')</a></li>
                        <li><a data-toggle="tab" href="#menu10">@lang('site.roads')</a></li>
                        <li><a data-toggle="tab" href="#menu11">@lang('site.infrastructures')</a></li>
                    </ul>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">

                    <div class="tab-content">

                        <div id="home3" class="tab-pane fade in active">

                            <div class="contruction-block">
                                <div class="img-construct">
                                    <img src="{{$construction_image}}" class="big-img">
                                </div>


                                <div class="">
                                    <img src="{{ url('/') }}/website/images/img-icon.png" class="mini-icon">
                                </div>
                            </div>

                        </div>

                        <div id="menu9" class="tab-pane fade">

                            <div class="contruction-block">
                                <div class="img-construct">
                                    <img src="{{$infrastructure_image}}" class="big-img">
                                </div>


                                <div class="">
                                    <img src="{{ url('/') }}/website/images/img-icon.png" class="mini-icon">
                                </div>
                            </div>

                        </div>

                        <div id="menu10" class="tab-pane fade">

                            <div class="contruction-block">
                                <div class="img-construct">
                                    <img src="{{$road_image}}" class="big-img">
                                </div>


                                <div class="">
                                    <img src="{{ url('/') }}/website/images/img-icon.png" class="mini-icon">
                                </div>
                            </div>

                        </div>


                        <div id="menu11" class="tab-pane fade">

                            <div class="contruction-block">
                                <div class="img-construct">
                                    <img src="{{$interiordesign_image}}" class="big-img">
                                </div>


                                <div class="">
                                    <img src="{{ url('/') }}/website/images/img-icon.png" class="mini-icon">
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--
        constructions-page
                    -->

    <section class="service-construct">
        <div class="container-fluid">

            <div class="about-service">
                <div class="main_title">
                    <div class="text">
                        <h2>@lang('site.about_service') </h2>
                    </div>
                </div>

                <p>
                    @if( app()->getLocale()=="ar")
                        {{$explain_quote_ar}}
                    @else
                        {{$explain_quote_en}}
                    @endif

                </p>
            </div>

            <div class="advert-service">
                <div class="main_title">
                    <div class="text">
                        <h2>@lang('site.features_of_sevices')</h2>
                    </div>
                </div>

                <ul class="ul-advert">
                    <li><span class="title-li">@lang('site.execution_speed')</span>
                        @if( app()->getLocale()=="ar")
                            {{$feature_one_ar}}
                        @else
                            {{$feature_one_en}}
                        @endif
                    </li>

                    <li><span class="title-li">@lang('site.punctuality')</span>
                        @if( app()->getLocale()=="ar")
                            {{$feature_two_ar}}
                        @else
                            {{$feature_two_en}}
                        @endif
                    </li>


                    <li><span class="title-li">@lang('site.Execution_quality')</span>
                        @if( app()->getLocale()=="ar")
                            {{$feature_three_ar}}
                        @else
                            {{$feature_three_en}}
                        @endif
                    </li>



                    <li><span class="title-li">@lang('site.well_trained_team')</span>
                        @if( app()->getLocale()=="ar")
                            {{$feature_four_ar}}
                        @else
                            {{$feature_four_en}}
                        @endif
                    </li>
                </ul>
            </div>

            <div class="related-service">
                <div class="main_title">
                    <div class="text">
                        <h2>@lang('site.projects_belong_to_the_servce')</h2>
                    </div>
                </div>

                <div class="blocks-related">
                    @foreach($all_projects as $project)
                        <div class="block-tab">

                            <div class="bg-img">
                                <img src="{{asset(  $project->project_image)}}">
                            </div>
                            <div class="text-block">
                                <h2>{{$project->client_name}}</h2>
                                <a href="{{route('singleproject' , $project->id)}}" class="link-block">{{$project ->details}} </a>
                            </div>

                            <div class="overlay-text">
                                <a href="#" class="link-overlay"><span class="fa fa-external-link"></span></a>

                                <div class="details-overlay">
                                    <h2>{{$project->client_name}}</h2>
                                    <p>
                                        {{$project ->details}}
                                    </p>
                                </div>
                            </div>

                        </div>
                    @endforeach


                </div>
            </div>

            <img src="{{ url('/') }}/website/images/bg-consrtuct.png" class="bg-consrtuct" alt="image">
        </div>
    </section>

    <!--
        service-construct
                    -->

@endsection
