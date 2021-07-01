@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.opinopns')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"><a href="{{ route('dashboard.opinionsettings') }}"><i class="fa fa-dashboard"></i>@lang('site.opinionsettings')<</a></li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.opinionsettings_update')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.opinionsettings.update') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('site.customer_one_name')</label>
                        <input type="text" name="customer_one_name" class="form-control" value="{{ ($opinionsettings) ? $opinionsettings->customer_one_name : '' }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.customer_one_job')</label>
                        <input type="text" name="customer_one_job" class="form-control" value="{{$opinionsettings->customer_one_job}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.customer_one_opinion')</label>
                        <input type="text" name="customer_one_opinion" class="form-control" value="{{$opinionsettings->customer_one_opinion}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.customer_two_name')</label>
                        <input type="text" name="customer_two_name" class="form-control" value="{{ ($opinionsettings) ? $opinionsettings->customer_two_name : '' }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.customer_two_job')</label>
                        <input type="text" name="customer_two_job" class="form-control" value="{{$opinionsettings->customer_two_job}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.customer_two_opinion')</label>
                        <input type="text" name="customer_two_opinion" class="form-control" value="{{$opinionsettings->customer_two_opinion}}">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.update')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop
