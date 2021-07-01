@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.sitesettings')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"><a href="{{ route('dashboard.sitesettings') }}"><i class="fa fa-dashboard"></i>@lang('site.sitesettings')<</a></li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.sitesettings_update')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.sitesettings.update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('site.site_name')</label>
                        <input type="text" name="site_name" class="form-control" value="{{ ($sitesettings) ? $sitesettings->site_name : '' }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.contact_email')</label>
                        <input type="text" name="contact_email" class="form-control" value="{{$sitesettings->contact_email}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.contact_number')</label>
                        <input type="text" name="contact_number" class="form-control" value="{{$sitesettings->contact_number}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.contact_number_second')</label>
                        <input type="text" name="contact_number_second" class="form-control" value="{{$sitesettings->contact_number_second}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.company_address')</label>
                        <input type="text" name="company_address" class="form-control" value="{{$sitesettings->company_address}}">
                    </div>

                        {{-- صورة الموقع الرئيسية--}}

                    <div class="form-group">
                        <label>@lang('site.website_image')</label>
                        <input type="file" name="website_image" value="{{$sitesettings->website_image}}" class="form-control image">
                    </div>

                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/slider_bg.png') }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.company_facebook_account')</label>
                        <input type="text" name="company_facebook_account" class="form-control" value="{{ $sitesettings->company_facebook_account }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.company_instagram_account')</label>
                        <input type="text" name="company_instagram_account" class="form-control" value="{{ $sitesettings->company_instagram_account }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.latitute')</label>
                        <input type="text" name="company_description" class="form-control" value="{{ $sitesettings->company_description }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.longitute')</label>
                        <input type="text" name="company_key_words" class="form-control" value="{{ $sitesettings->company_key_words }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.company_map')</label>
                        <input type="text" name="company_map" class="form-control" value="{{$sitesettings->company_map}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.update')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop
