@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.show_message')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li><a href="{{ route('dashboard.contactus.index') }}"><i class="fa fa-dashboard"></i>@lang('site.contactus')<</a></li>
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.contactus')</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.show_message')</h3>
            </div>
            <div class="box box-primary">

                @include('partials._errors')
                <form action="{{ route('dashboard.contactus.update', $contactus->id) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label>@lang('site.sender_name')</label>
                        <input type="text" name="sender_name" class="form-control" disabled value="{{ $contactus->sender_name }}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.sender_email')</label>
                        <input type="text" name="sender_email" class="form-control" disabled value="{{ $contactus->sender_email }}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.sender_message')</label>
                        <input type="email" name="sender_message" class="form-control" disabled value="{{ $contactus->sender_message }}">
                    </div>

                    <div>
                        <a href="{{ route('dashboard.contactus.index') }}" class="btn btn-block btn-adn">@lang('site.back')</a>
                    </div>
                </form>
            </div>
        </section>

    </div>

@stop
