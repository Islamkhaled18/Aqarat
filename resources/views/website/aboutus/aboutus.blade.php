@extends('layouts.inside_design')

@section('title')
    |
    @lang('site.aboutus')

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
                                <li class="active"><a href="{{ url('/aboutus') }}">@lang('site.aboutus')</a></li>
                                <li><a href="{{url('/service')}}">@lang('site.services')</a></li>
                                <li><a href="{{url('/projects')}}">@lang('site.projects')</a></li>
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
                <h2 class="title-breadcrumb">@lang('site.aboutus')</h2>
                <h4>@lang('site.Your_best_partner_in_building_and_construction')</h4>
            </div>
            <ul class="breadcrumb center">
                <li><a href="{{ url('/') }}">@lang('site.main') </a></li>
                <li><a href="{{ url('/aboutus') }}">@lang('site.aboutus')</a></li>
            </ul>
        </div>
    </section>
    <!--
        main-breadcrumb
                    -->

    @include('includes.aboutus')


    @include('includes.quote')

    <!--
        end-quote
                 -->
    <section class="choose_us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 hidden-xs">
                    <div class="img_container">
                        <img src="{{$page_container_image}}" class="about_img">
                        <img src="{{ url('/') }}/website/images/about_bg.png" class="about_bg">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="main_title">
                        <div class="text">
                            <h2>@lang('site.Why_should_you_need_us')</h2>
                        </div>
                    </div>
                    <p class="main_p">
                        @lang('site.reasons')
                    </p>
                    <ul>
                        <li>
                            <div class="image">
                                <img src="{{ url('/') }}/website/images/XMLID_705_.png" class="center">
                            </div>
                            <div class="desc">
                                <div class="main_title">
                                    <div class="text">
                                        <h2>
                                            @if( app()->getLocale()=="ar")
                                                {{$reason_one_ar}}
                                            @else
                                                {{$reason_one_en}}
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                                <p>
                                    @if( app()->getLocale()=="ar")
                                        {{$explain_reason_one_ar}}
                                    @else
                                        {{$explain_reason_one_en}}
                                    @endif
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="image">
                                <img src="{{ url('/') }}/website/images/XMLID_705_.png" class="center">
                            </div>
                            <div class="desc">
                                <div class="main_title">
                                    <div class="text">
                                        <h2>
                                            @if( app()->getLocale()=="ar")
                                                {{$reason_two_ar}}
                                            @else
                                                {{$reason_two_en}}
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                                <p>
                                    @if( app()->getLocale()=="ar")
                                        {{$explain_reason_two_ar}}
                                    @else
                                        {{$explain_reason_two_en}}
                                    @endif
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="image">
                                <img src="{{ url('/') }}/website/images/XMLID_705_.png" class="center">
                            </div>
                            <div class="desc">
                                <div class="main_title">
                                    <div class="text">
                                        <h2>
                                            @if( app()->getLocale()=="ar")
                                                {{$reason_three_ar}}
                                            @else
                                                {{$reason_three_en}}
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                                <p>
                                    @if( app()->getLocale()=="ar")
                                        {{$explain_reason_three_ar}}
                                    @else
                                        {{$explain_reason_three_en}}
                                    @endif
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--
        choose_us
                 -->

@endsection
