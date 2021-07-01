@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.followers')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"></i>@lang('site.followers')</li>
            </ol>

        </section>


        <section class="content">

            <div class="box box-primary">

                <div class="box box-header with-border">

                    <h5 class="box-title">@lang('site.follow')</h5>

                    <form action="{{ route('dashboard.followers.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>
                        </div>
                    </form>
                </div><!-- end of header -->

                <div class="box-body">
                    @if( $followers->count() >= 0 )
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.follower_name')</th>
                                <th>@lang('site.follower_email')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $followers as $index=>$follower )
                                <tr>
                                    <th>{{ $loop -> iteration }}</th>
                                    <th>{{ $follower->follower_name }}</th>
                                    <th>{{ $follower->follower_email }}</th>
                                    <th>
                                        @if(auth()->user()->haspermission('site_delete'))
                                            <form action="{{ route('dashboard.followers.destroy',$follower->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}

                                                <button type="submit" class="btn btn-danger delete "><i class="fa fa-trash"></i>@lang('site.delete')</button>

                                            </form><!-- end of form -->
                                        @else
                                            <button class="btn btn-danger disabled"><i class="fa fa-trash"></i>@lang('site.delete')</button>
                                        @endif

                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!-- end of table -->

                                                {{ $followers->appends(request()->query())->links() }}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->

            </div><!-- end of box -->


        </section>

    </div>

@stop
