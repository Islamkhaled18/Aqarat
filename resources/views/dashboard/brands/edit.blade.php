@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.edit')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li><a href="{{ route('dashboard.brands.index') }}"><i class="fa fa-dashboard"></i>@lang('site.brands')<</a></li>
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.edit')</li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.edit')</h3>
            </div>
            <div class="box box-primary">

                @include('partials._errors')
                @foreach($brands as $brand)
                    <form action="{{ route('dashboard.brands.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}


                    <div class="form-group">
                        <label>@lang('site.first_brand_image')</label>
                        <input type="file" name="first_brand_image" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ $brand->first_brand_image }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.second_brand_image')</label>
                        <input type="file" name="second_brand_image" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ $brand->second_brand_image }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.third_brand_image')</label>
                        <input type="file" name="third_brand_image" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ $brand->third_brand_image }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.fourth_brand_image')</label>
                        <input type="file" name="fourth_brand_image" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ $brand->fourth_brand_image }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>@lang('site.edit')</button>
                    </div>
                </form> <!-- end of form -->
                @endforeach
            </div>
        </section>

    </div>

@stop
