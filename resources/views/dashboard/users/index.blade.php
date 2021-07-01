@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"></i>@lang('site.users')</li>
            </ol>

        </section>


        <section class="content">

            <div class="box box-primary">

                <div class="box box-header with-border">

                    <h5 class="box-title">@lang('site.users')</h5>

                    <form action="{{ route('dashboard.users.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>

                                @if(auth()->user()->haspermission('users_create'))
                                    <a href="{{route('dashboard.users.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i>@@lang('site.add')</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div><!-- end of header -->

                <div class="box-body">
                    @if( $users->count() > 0 )
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.first_name')</th>
                                <th>@lang('site.last_name')</th>
                                <th>@lang('site.email')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $users as $index=>$user )
                                    <tr>
                                        <th>{{ $loop -> iteration }}</th>
                                        <th>{{ $user->first_name }}</th>
                                        <th>{{ $user->last_name }}</th>
                                        <th>{{ $user->email }}</th>
                                        <th><img src="{{ $user->image_path }}" style="width: 100px;" class="img-thumbnail" alt=""></th>
                                        <th>

                                            @if(auth()->user()->haspermission('users_update'))
                                                <a href="{{ route('dashboard.users.edit',$user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>@lang('site.edit')</a>

                                            @else
                                                <a href="#" class="btn btn-primary disabled"><i class="fa fa-edit"></i>@lang('site.edit')</a>
                                            @endif

                                            @if(auth()->user()->haspermission('users_delete'))
                                                <form action="{{ route('dashboard.users.destroy',$user->id) }}" method="post" style="display: inline-block">
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

                        {{ $users->appends(request()->query())->links() }}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->

            </div><!-- end of box -->


        </section>

    </div>

@stop
