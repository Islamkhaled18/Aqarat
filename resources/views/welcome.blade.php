@extends('layouts.app')

@section('title')

@endsection

@section('content')


    @include('includes.aboutus')

    <section class="service">
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
