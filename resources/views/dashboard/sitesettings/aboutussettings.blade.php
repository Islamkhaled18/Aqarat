@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.aboutussetting')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a> </li>
                <li class="active"><a href="{{ route('dashboard.aboutussettings') }}"><i class="fa fa-dashboard"></i>@lang('site.aboutussetting')<</a></li>
            </ol>

        </section>


        <section class="content">
            <div class="box box-primary">
                <h3 class="box-title">@lang('site.aboutussetting_update')</h3>
            </div>
            <div class="box box-primary">
                @include('partials._errors')
                <form action="{{ route('dashboard.aboutussettings.update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('site.aboutus_headertext_ar')</label>
                        <input type="text" name="aboutus_headertext_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('aboutus_headertext','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.aboutus_headertext_en')</label>
                        <input type="text" name="aboutus_headertext_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('aboutus_headertext','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.aboutus_paragraphtext_ar')</label>
                        <input type="text" name="aboutus_paragraphtext_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('aboutus_paragraphtext','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.aboutus_paragraphtext_en')</label>
                        <input type="text" name="aboutus_paragraphtext_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('aboutus_paragraphtext','en')}}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.page_main_image')</label>
                        <input type="file" name="page_main_image" value="{{$page_main_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' . $aboutussettings->page_main_image) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.number_experience')</label>
                        <input type="text" name="number_experience" class="form-control" value="{{$number_experience}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.page_quote_image')</label>
                        <input type="file" name="page_quote_image" value="{{$page_quote_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$aboutussettings->page_quote_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.quote_headertaxt_ar')</label>
                        <input type="text" name="quote_headertaxt_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('quote_headertaxt','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.quote_headertaxt_en')</label>
                        <input type="text" name="quote_headertaxt_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('quote_headertaxt','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.quote_paragraphtext_ar')</label>
                        <input type="text" name="quote_paragraphtext_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('quote_paragraphtext','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.quote_paragraphtext_en')</label>
                        <input type="text" name="quote_paragraphtext_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('quote_paragraphtext','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.page_container_image')</label>
                        <input type="file" name="page_container_image" value="{{$page_container_image}}" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/website_images/' .$aboutussettings->page_container_image ) }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.reason_one_ar')</label>
                        <input type="text" name="reason_one_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('reason_one','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.reason_one_en')</label>
                        <input type="text" name="reason_one_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('reason_one','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.explain_reason_one_ar')</label>
                        <input type="text" name="explain_reason_one_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('explain_reason_one','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.explain_reason_one_en')</label>
                        <input type="text" name="explain_reason_one_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('explain_reason_one','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.reason_two_ar')</label>
                        <input type="text" name="reason_two_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('reason_two','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.reason_two_en')</label>
                        <input type="text" name="reason_two_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('reason_two','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.explain_reason_two_ar')</label>
                        <input type="text" name="explain_reason_two_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('explain_reason_two','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.explain_reason_two_en')</label>
                        <input type="text" name="explain_reason_two_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('explain_reason_two','en')}}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.reason_three_ar')</label>
                        <input type="text" name="reason_three_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('reason_three','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.reason_three_en')</label>
                        <input type="text" name="reason_three_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('reason_three','en')}}">
                    </div>

                    <div class="form-group">
                        <label>@lang('site.explain_reason_three_ar')</label>
                        <input type="text" name="explain_reason_three_ar" class="form-control"
                               value="{{$aboutussettings->getTranslation('explain_reason_three','ar')}}">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.explain_reason_three_en')</label>
                        <input type="text" name="explain_reason_three_en" class="form-control"
                               value="{{$aboutussettings->getTranslation('explain_reason_three','en')}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.update')</button>
                    </div>
                </form> <!-- end of form -->
            </div>
        </section>

    </div>

@stop


