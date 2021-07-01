@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.add_new_category')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-dashboard"></i>@lang('site.categories')<</a></li>
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.add_new_category')</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.add')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.categories.store') }}" method="POST">
                    {{csrf_field()}}
                    {{ method_field('post') }}

                    <div class="form-group">
                        <label>@lang('site.category_name_ar')</label>
                        <input type="text" name="category_name_ar" class="form-control" value="{{ old('category_name_ar') }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.category_name_en')</label>
                        <input type="text" name="category_name_en" class="form-control" value="{{ old('category_name_en') }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>{{trans('site.add')}}</button>
                    </div>
                </form><!--end of form-->
            </div>
        </section>

    </div>

@stop
