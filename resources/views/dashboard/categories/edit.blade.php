@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.edit')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-dashboard"></i>@lang('site.categories')<</a></li>
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.edit')</li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.edit')</h3>
            </div>
            <div class="box box-primary">

                @include('partials._errors')

                <form action="{{ route('dashboard.categories.update', $category->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label>{{ trans('site.category_Name_ar') }}</label>
                        <input type="text" name="category_Name_ar" class="form-control"
                               value="{{ $category->getTranslation('category_name', 'ar') }}"
                               placeholder="الاسم">
                    </div>

                    <div class="form-group">
                        <label>{{ trans('site.category_Name_en') }}</label>
                        <input type="text" name="category_Name_en" class="form-control"
                               value="{{ $category->getTranslation('category_name', 'en')  }}"
                               placeholder="name">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-edit"></i>{{ trans('site.edit') }}
                        </button>
                    </div>
                </form><!-- end of form -->
            </div>
        </section>

    </div>

@stop
