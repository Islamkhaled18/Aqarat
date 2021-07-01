@extends('layouts.inside_design')

@section('title')
    |
    @lang('site.project')

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
                                <li><a href="{{url('/')}}">@lang('site.main')</a></li>
                                <li><a href="{{url('/aboutus')}}">@lang('site.aboutus')</a></li>
                                <li><a href="{{url('/service')}}">@lang('site.services')</a></li>
                                <li class="active"><a href="{{url('/projects')}}">@lang('site.projects')</a></li>
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
                <h2 class="title-breadcrumb">@lang('site.projects')</h2>
                <h4>@lang('site.Your_best_partner_in_building_and_construction')</h4>
            </div>
            <ul class="breadcrumb center">
                <li><a href="{{url('/')}}">@lang('site.main') </a></li>
                <li><a href="{{url('/projects')}}">@lang('site.projects')</a></li>
                <li><a href="#">@lang('site.constructions')</a></li>
            </ul>
        </div>
    </section>
    <!--
        main-breadcrumb
                    -->
    <section class="single_project">
        <div class="container-fluid">
            <div class="slider_container">
                <div id="single_slider" data-slider-id="1">
                    <div class="item">
                        <img src="{{ url('/') }}/website/images/single_1.png" class="slider_img">
                    </div>
                    <div class="item">
                        <img src="{{ url('/') }}/website/images/thumbs_2.png" class="slider_img">
                    </div>
                    <div class="item">
                        <img src="{{ url('/') }}/website/images/thumbs_3.png" class="slider_img">
                    </div>
                    <div class="item">
                        <img src="{{ url('/') }}/website/images/thumbs_4.png" class="slider_img">
                    </div>
                    <div class="item">
                        <img src="{{ url('/') }}/website/images/thumbs_5.png" class="slider_img">
                    </div>
                    <div class="item">
                        <img src="{{ url('/') }}/website/images/thumbs_6.png" class="slider_img">
                    </div>
                </div>

                <div class="owl-thumbs" data-slider-id="1">
                    <button class="owl-thumb-item"><img src="{{asset(  $singleproject->project_image)}}"></button>
{{--                    <button class="owl-thumb-item"><img src="{{ url('/') }}/website/images/thumbs_2.png"></button>--}}
{{--                    <button class="owl-thumb-item"><img src="{{ url('/') }}/website/images/thumbs_3.png"></button>--}}
{{--                    <button class="owl-thumb-item"><img src="{{ url('/') }}/website/images/thumbs_4.png"></button>--}}
{{--                    <button class="owl-thumb-item"><img src="{{ url('/') }}/website/images/thumbs_5.png"></button>--}}
{{--                    <button class="owl-thumb-item"><img src="{{ url('/') }}/website/images/thumbs_6.png"></button>--}}

                </div>
            </div>

            <div class="project_info">

                <div class="aside">
                    <img src="{{ url('/') }}/website/images/single_side.png" class="side_img">
                    <div class="side_overlay"></div>
                    <div class="info_text">
                        <ul>
                            <li>@lang('site.information_project')</li>
                            <li>@lang('site.client_name') / {{$singleproject->client_name}}</li>
                            <li>@lang('site.location') / {{$singleproject->location}}</li>
                            <li>@lang('site.start_date') / {{$singleproject->start_date}}</li>
                            <li>@lang('site.cost') / {{$singleproject->cost}}</li>
                            <li>@lang('site.category_name') / {{$singleproject->category->category_name}}</li>
                        </ul>
                    </div>
                </div>

                <div class="project_desc">
                    <div class="main_title">
                        <div class="text">
                            <h2>@lang('site.about_project')</h2>
                        </div>
                    </div>
                    <p>
                        {{$singleproject->details}}
                    </p>


                </div>

            </div>

        </div>
    </section>
    <!--
        single_project
                        -->
    <section class="last-projects single_page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_title">
                        <div class="text">
                            <h2> @lang('site.projects') </h2>
                        </div>
                    </div>
                </div>


{{--                <div class="col-md-12">--}}
{{--                    <div class="tab-slider">--}}
{{--                        @foreach($all_projects as $project)--}}
{{--                            <div class="item">--}}
{{--                                <div class="block-tab">--}}
{{--                                    <div class="bg-img">--}}
{{--                                        <img src="{{asset(  $project->project_image)}}">--}}
{{--                                    </div>--}}
{{--                                    <div class="text-block">--}}
{{--                                        <h2>{{$project->client_name}}</h2>--}}
{{--                                        <a href="#" class="link-block">{{$project ->details}} </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="overlay-text">--}}
{{--                                        <a href="#" class="link-overlay"><span class="fa fa-external-link"></span></a>--}}

{{--                                        <div class="details-overlay">--}}
{{--                                            <h2>{{$project->client_name}}</h2>--}}
{{--                                            <p>--}}
{{--                                                {{$project ->details}}--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!--
        end-last-projects
                        -->

@endsection
