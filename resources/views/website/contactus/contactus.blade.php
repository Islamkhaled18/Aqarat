@extends('layouts.inside_design')

@section('title')
    |
    @lang('site.contactus')

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
                                <li><a href="{{url('/projects')}}">@lang('site.projects')</a></li>
                                <li class="active"><a href="{{ url('/contactus') }}">@lang('site.contactus')</a></li>
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
                <h2 class="title-breadcrumb">@lang('site.contactus')</h2>
                <h4>@lang('site.Your_best_partner_in_building_and_construction')</h4>
            </div>
            <ul class="breadcrumb center">
                <li><a href="{{ url('/') }}">@lang('site.main') </a></li>
                <li><a href="{{ url('/contactus') }}">@lang('site.contactus')</a></li>
            </ul>
        </div>
    </section>
    <!--
        main-breadcrumb
                    -->
    <section class="contact-page">
        <div class="container-fluid">
            <div class="row">
                <div class="details-contact">
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <section class="main-map">
                            <div id="googleMap" style="width:695px;height:400px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14948662.522732439!2d36.0368182526849!3d23.833678558438827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2seg!4v1625148141606!5m2!1sen!2seg"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-5 col-sm-6 col-xs-12">

                        <div class="about-contact">
                            <h2><span class="fa fa-map-marker"></span>@lang('site.address') </h2>
                            <h5>{{$company_address}}</h5>
                        </div>

                        <div class="about-contact">
                            <h2><span class="fa fa-phone"></span>@lang('site.phone') </h2>
                            <h5>{{$contact_number}}</h5>
                            <h5>{{$contact_number_second}}</h5>
                        </div>

                        <div class="about-contact">
                            <h2><span class="fa fa-envelope"></span>@lang('site.email')</h2>
                            <h5>{{$contact_email}}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
        contact-page
                    -->
    <section class="contact-form">
        <div class="container-fluid">

            <form action="{{ route('dashboard.contactus.store') }}" method="post">

                @csrf

                <div class="form-group">
                    <input name="sender_name" class="form-control" type="text" placeholder="@lang('site.name')">
                </div>

                <div class="form-group">
                    <input name="sender_email" class="form-control" type="text" placeholder="@lang('site.email')">
                </div>


                <div class="form-group">
                    <textarea name="sender_message" class="form-control" placeholder="@lang('site.leave_your_message')"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-cont" type="submit">@lang('site.send')</button>
                </div>
            </form>
        </div>
    </section>
    <!--
        contact-form
                    -->
@endsection
