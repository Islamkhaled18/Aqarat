@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.projects')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"></i>@lang('site.projects')</li>
            </ol>

        </section>


        <section class="content">

            <div class="box box-primary">

                <div class="box box-header with-border">

                    <h5 class="box-title">@lang('site.projects')</h5>

                    <form action="{{ route('dashboard.singleproject.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>

                                @if(auth()->user()->haspermission('site_create'))
                                    <a href="{{route('dashboard.singleproject.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i>@@lang('site.add')</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div><!-- end of header -->

                <div class="box-body">
                    @if( $projects->count() > 0 )
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.client_name')</th>
                                <th>@lang('site.location')</th>
                                <th>@lang('site.start_date')</th>
                                <th>@lang('site.category')</th>
                                <th>@lang('site.cost')</th>
                                <th>@lang('site.details')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $projects as $project )
                                    <tr>
                                        <th>{{ $loop -> iteration }}</th>
                                        <th>{{ $project->client_name }}</th>
                                        <th>{{ $project->location }}</th>
                                        <th>{{ $project->start_date }}</th>
                                        <th>{{ $project->category->category_name }}</th>
                                        <th>{{ $project->cost }}</th>
                                        <th>
                                            @if ($project ->details == null)
                                                <p class="text-danger">لا توجد تفاصيل</p>
                                            @else
                                                <p class="text-success">{{$project ->details}}</p>
                                            @endif
                                        </th>
                                        <th><img src="{{ $project->project_image }}" style="width: 100px;" class="img-thumbnail" alt=""></th>
                                        <th>

                                            @if(auth()->user()->haspermission('site_update'))
                                                <a href="{{ route('dashboard.singleproject.edit',$project->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>@lang('site.edit')</a>

                                            @else
                                                <a href="#" class="btn btn-primary disabled"><i class="fa fa-edit"></i>@lang('site.edit')</a>
                                            @endif

                                            @if(auth()->user()->haspermission('site_delete'))
                                                <form action="{{ route('dashboard.singleproject.destroy',$project->id) }}" method="post" style="display: inline-block">
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

                        {{ $projects->appends(request()->query())->links() }}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->

            </div><!-- end of box -->


        </section>

    </div>

@stop
