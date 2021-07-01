@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.brands')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"></i>@lang('site.brands')</li>
            </ol>

        </section>


        <section class="content">

            <div class="box box-primary">

                <div class="box box-header with-border">

                    <h5 class="box-title">@lang('site.brands')</h5>

                    <form action="{{ route('dashboard.brands.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                @if(!$brands->count() > 0)
                                    @if(auth()->user()->haspermission('site_create'))
                                        <a href="{{route('dashboard.brands.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                                    @else
                                        <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i>@lang('site.add')</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </form>
                </div><!-- end of header -->

                <div class="box-body">
                    @if( $brands->count() > 0 )
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.first_brand_image')</th>
                                <th>@lang('site.second_brand_image')</th>
                                <th>@lang('site.third_brand_image')</th>
                                <th>@lang('site.fourth_brand_image')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach( $brands as $index=>$brand )
                                    <tr>
                                        <th>{{ $loop -> iteration }}</th>

                                        <th><img src="{{ $brand->first_brand_image }}" style="width: 100px;" class="img-thumbnail" alt=""></th>
                                        <th><img src="{{ $brand->second_brand_image }}" style="width: 100px;" class="img-thumbnail" alt=""></th>
                                        <th><img src="{{ $brand->third_brand_image }}" style="width: 100px;" class="img-thumbnail" alt=""></th>
                                        <th><img src="{{ $brand->fourth_brand_image }}" style="width: 100px;" class="img-thumbnail" alt=""></th>
                                        <th>

                                            @if(auth()->user()->haspermission('site_update'))
                                                <a href="{{ route('dashboard.brands.edit',$brand->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>@lang('site.edit')</a>
                                            @else
                                                <a href="#" class="btn btn-primary disabled"><i class="fa fa-edit"></i>@lang('site.edit')</a>
                                            @endif

                                            @if(auth()->user()->haspermission('site_delete'))
                                                <form action="{{ route('dashboard.brands.destroy',$brand->id) }}" method="post" style="display: inline-block">
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

{{--                        {{ $users->appends(request()->query())->links() }}--}}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->

            </div><!-- end of box -->


        </section>

    </div>

@stop
