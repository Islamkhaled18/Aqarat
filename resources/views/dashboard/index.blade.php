@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>
            <br>
            <br>
            <ol class="breadcrump">
                <li class="active"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</li>
            </ol>

        </section>


        <section class="content">

            <p>This is dashboard</p>

        </section>

    </div>

    @stop
