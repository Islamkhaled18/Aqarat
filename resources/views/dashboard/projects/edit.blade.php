@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.edit')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li><a href="{{ route('dashboard.singleproject.index') }}"><i class="fa fa-dashboard"></i>@lang('site.projects')<</a></li>
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.edit')</li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.edit')</h3>
            </div>
            <div class="box box-primary">

                @include('partials._errors')
                <form action="{{ route('dashboard.singleproject.update', $project->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label>@lang('site.client_name_en') </label>
                        <input type="text" name="client_name_en" class="form-control"
                               value="{{ $project->getTranslation('client_name', 'en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.client_name_ar')</label>
                        <input type="text" name="client_name_ar" class="form-control"
                               value="{{ $project->getTranslation('client_name', 'ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.location_en')</label>
                        <input type="text" name="location_en" class="form-control"
                               value="{{ $project->getTranslation('location', 'en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.location_ar')</label>
                        <input type="text" name="location_ar" class="form-control"
                               value="{{ $project->getTranslation('location', 'ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.start_date_en')</label>
                        <input type="text" name="start_date_en" class="form-control"
                               value="{{ $project->getTranslation('start_date', 'en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.start_date_ar')</label>
                        <input type="text" name="start_date_ar" class="form-control"
                               value="{{ $project->getTranslation('start_date', 'ar') }}">
                    </div>

                    <div class="form-group">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">@lang('site.category')</label>
                        <select name="category_id" id="category_name" class="form-control" required>
                            <option selected disabled> --@lang('site.select_category')--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('site.cost_en')</label>
                        <input type="text" name="cost_en" class="form-control"
                               value="{{ $project->getTranslation('cost', 'en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.cost_ar')</label>
                        <input type="text" name="cost_ar" class="form-control"
                               value="{{ $project->getTranslation('cost', 'ar') }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.details_en')</label>
                        <input type="text" name="details_en" class="form-control"
                               value="{{ $project->getTranslation('details', 'en') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.details_ar')</label>
                        <input type="text" name="details_ar" class="form-control"
                               value="{{ $project->getTranslation('details', 'ar') }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>@lang('site.edit')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop
