@extends('layouts.inside_design')

@section('title')
    |
    @lang('site.projects')

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
                <li><a href="{{url('/service')}}">@lang('site.services')</a></li>
                <li><a href="#">@lang('site.constructions')</a></li>
            </ul>
        </div>
    </section>
    <!--
        main-breadcrumb
                    -->

    <section class="project-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="nav nav-tabs side-links">
                        <li class="active"><a data-toggle="tab" href="#home2">@lang('site.all_projects')</a></li>
                        @foreach($categories as $category)
                            <li><a href="{{ route('product.show',$category->id) }}">{{ $category->category_name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-9 col-sm-8 col-xs-12">

                    <div class="tab-content">

                        <div id="home2" class="tab-pane fade in active">
                            <div class="blocks_page">
                                <div class="row">
                                    @foreach($all_projects as $project)
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="block-tab">
                                                <div class="bg-img">
                                                    <img src="{{asset(  $project->project_image)}}">
                                                </div>
                                                <div class="text-block">
                                                    <h2>{{$project->client_name}}</h2>
                                                    <a href="{{route('singleproject' , $project->id)}}" class="link-block">{{$project ->details}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="col-xs-12">
                                        <a href="#" class="btn btn-page">المزيد من المشاريع
                                            <span class="fa fa-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--
        project-page
                    -->

@endsection
