@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.constructionsettings')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"><a href="{{ route('dashboard.constructionsettings') }}"><i class="fa fa-dashboard"></i>@lang('site.constructionsettings')<</a></li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.constructionsettings_update')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.constructionsettings.update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('site.explain_quote_ar')</label>
                        <input type="text" name="explain_quote_ar" class="form-control"
                               value="{{ $constructionsettings->getTranslation('explain_quote', 'ar') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.explain_quote_en')</label>
                        <input type="text" name="explain_quote_en" class="form-control"
                               value="{{ $constructionsettings->getTranslation('explain_quote', 'en') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.feature_one_ar')</label>
                        <input type="text" name="feature_one_ar" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_one', 'ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.feature_one_en')</label>
                        <input type="text" name="feature_one_en" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_one', 'en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.feature_two_ar')</label>
                        <input type="text" name="feature_two_ar" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_two', 'ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.feature_two_en')</label>
                        <input type="text" name="feature_two_en" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_two', 'en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.feature_three_ar')</label>
                        <input type="text" name="feature_three_ar" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_three', 'ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.feature_three_en')</label>
                        <input type="text" name="feature_three_en" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_three', 'en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.feature_four_ar')</label>
                        <input type="text" name="feature_four_ar" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_four', 'ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.feature_four_en')</label>
                        <input type="text" name="feature_four_en" class="form-control"
                               value="{{$constructionsettings->getTranslation('feature_four', 'en')}}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.construction_image')</label>
                        <input type="file" name="construction_image" value="{{$constructionsettings->construction_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$constructionsettings->construction_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.infrastructure_image')</label>
                        <input type="file" name="infrastructure_image" value="{{$constructionsettings->infrastructure_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$constructionsettings->infrastructure_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.road_image')</label>
                        <input type="file" name="road_image" value="{{$constructionsettings->road_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$constructionsettings->road_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.interiordesign_image')</label>
                        <input type="file" name="interiordesign_image" value="{{$constructionsettings->interiordesign_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$constructionsettings->interiordesign_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.update')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop


