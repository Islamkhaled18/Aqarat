@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.servicesettings')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"><a href="{{ route('dashboard.servicesettings') }}"><i class="fa fa-dashboard"></i>@lang('site.servicesettings')<</a></li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.servicesettings_update')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.servicesettings.update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('site.constructions_explain_ar')</label>
                        <input type="textarea" name="constructions_explain_ar" class="form-control"
                               value="{{ $servicesettings->getTranslation('constructions_explain', 'ar') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.constructions_explain_en')</label>
                        <input type="textarea" name="constructions_explain_en" class="form-control"
                               value="{{ $servicesettings->getTranslation('constructions_explain', 'en') }}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.interiordesign_explain_ar')</label>
                        <input type="textarea" name="interiordesign_explain_ar" class="form-control"
                               value="{{ $servicesettings->getTranslation('interiordesign_explain', 'ar') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.interiordesign_explain_en')</label>
                        <input type="textarea" name="interiordesign_explain_en" class="form-control"
                               value="{{ $servicesettings->getTranslation('interiordesign_explain', 'en') }}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.roads_explain_ar')</label>
                        <input type="textarea" name="roads_explain_ar" class="form-control"
                               value="{{$servicesettings->getTranslation('roads_explain','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.roads_explain_en')</label>
                        <input type="textarea" name="roads_explain_en" class="form-control"
                               value="{{$servicesettings->getTranslation('roads_explain','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.infrastructures_explain_ar')</label>
                        <input type="textarea" name="infrastructures_explain_ar" class="form-control"
                        value="{{ $servicesettings->getTranslation('infrastructures_explain' , 'ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.infrastructures_explain_en')</label>
                        <input type="textarea" name="infrastructures_explain_en" class="form-control"
                               value="{{ $servicesettings->getTranslation('infrastructures_explain' , 'en') }}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.service_image')</label>
                        <input type="file" name="service_image" value="{{$servicesettings->service_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$servicesettings->service_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.update')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop


