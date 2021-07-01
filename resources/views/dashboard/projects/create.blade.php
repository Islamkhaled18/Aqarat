@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.add_new_project')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li><a href="{{ route('dashboard.singleproject.index') }}"><i class="fa fa-dashboard"></i>@lang('site.projects')<</a></li>
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.add_new_project')</li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.add')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.singleproject.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label>@lang('site.client_name_en')</label>
                        <input type="text" name="client_name_en" class="form-control" value="{{ old('client_name_en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.client_name_ar')</label>
                        <input type="text" name="client_name_ar" class="form-control" value="{{ old('client_name_ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.location_en')</label>
                        <input type="text" name="location_en" class="form-control" value="{{ old('location_en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.location_ar')</label>
                        <input type="text" name="location_ar" class="form-control" value="{{ old('location_ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.start_date_en')</label>
                        <input type="text" name="start_date_en" class="form-control" value="{{ old('start_date_en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.start_date_ar')</label>
                        <input type="text" name="start_date_ar" class="form-control" value="{{ old('start_date_ar') }}">
                    </div>

                    <div class="form-group">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">@lang('site.category')</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="" selected disabled> --@lang('site.select_category')--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('site.cost_en')</label>
                        <input type="text" name="cost_en" class="form-control" value="{{ old('cost_en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.cost_ar')</label>
                        <input type="text" name="cost_ar" class="form-control" value="{{ old('cost_ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.details_en')</label>
                        <input type="text" name="details_en" class="form-control" value="{{ old('details_en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.details_ar')</label>
                        <input type="text" name="details_ar" class="form-control" value="{{ old('details_ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="project_image[]" accept="image/*" multiple class="form-control" value="{{ old('image') }}">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <img src="{{ asset('uploads/user_images/' . $projects->image) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop
