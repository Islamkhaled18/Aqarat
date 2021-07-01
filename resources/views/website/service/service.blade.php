@extends('layouts.inside_design')

@section('title')
    |
    @lang('site.services')

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
                                <li><a href="{{ url('/contactus') }}"> @lang('site.contactus')</a></li>

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
                <h2 class="title-breadcrumb">@lang('site.services')</h2>
                <h4>@lang('site.Your_best_partner_in_building_and_construction')</h4>
            </div>
            <ul class="breadcrumb center">
                <li><a href="{{ url('/') }}">@lang('site.main')</a></li>
                <li><a href="{{ url('/service') }}">@lang('site.services')</a></li>
            </ul>
        </div>
    </section>
    <!--
        main-breadcrumb
                    -->
    <section class="service service_page">
        <div class="container-fluid">
            <div class="main_title">
                <div class="text">
                    <h3>@lang('site.what_we_offer')</h3>
                    <h2>@lang('site.services')</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="service_block">
                        <img src="{{ url('/') }}/website/images/service_1.png">
                        <h1>@lang('site.constructions')</h1>
                        <p>
                            @if( app()->getLocale()=="ar")
                                {{$constructions_explain_ar}}
                            @else
                                {{$constructions_explain_en}}
                            @endif
                        </p>
                    </div>

                    <div class="service_block">
                        <img src="{{ url('/') }}/website/images/service_2.png">
                        <h1>@lang('site.roads')</h1>
                        <p>
                            @if( app()->getLocale()=="ar")
                                {{$roads_explain_ar}}
                            @else
                                {{$roads_explain_en}}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="service_block">
                        <img src="{{ url('/') }}/website/images/service_3.png">
                        <h1>@lang('site.interior_design')</h1>
                        <p>
                            @if( app()->getLocale()=="ar")
                                {{$interiordesign_explain_ar}}
                            @else
                                {{$interiordesign_explain_en}}
                            @endif
                        </p>
                    </div>
                    <div class="service_block">
                        <img src="{{ url('/') }}/website/images/service_4.png">
                        <h1>@lang('site.infrastructure')</h1>
                        <p>
                            @if( app()->getLocale()=="ar")
                                {{$infrastructures_explain_ar}}
                            @else
                                {{$infrastructures_explain_en}}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="img_container">
                        <img src="{{ url('/') }}/website/images/service_img.png" class="service_img">
                        <img src="{{ url('/') }}/website/images/service_bg.png" class="service_bg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
        end-service
                    -->
    @include('includes.quote')
    <!--
        end-quote
                 -->
    <section class="last-projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="main_title">
                        <div class="text">
                            <h3>@lang('site.build_future')</h3>
                            <h2>@lang('site.latest_projects')</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    @include('includes.categoriestabs')
                </div>
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            @include('includes.projectstabs')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
        end-last-projects
                        -->

@endsection
