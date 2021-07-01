<section class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="main_title">
                    <div class="text">
                        <h2>@lang('site.aboutus')</h2>
                    </div>
                </div>

                <div class="about_text">
                    <h1>
                        @if( app()->getLocale()=="ar")
                            {{$aboutus_headertext_ar}}
                        @else
                            {{$aboutus_headertext_en}}
                        @endif
                    </h1>
                    <p>
                        @if( app()->getLocale()=="ar")
                            {{$aboutus_paragraphtext_ar}}
                        @else
                            {{$aboutus_paragraphtext_en}}
                        @endif
                    </p>

                    <div class="experience">
                        <span></span>
                        <h1>{{$number_experience}}</h1>
                        <h2>‏@lang('site.year')<br> @lang('site.experience')</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="img_container">
                    <img src="{{$page_main_image}}" class="about_img">
                    <img src="{{ url('/') }}/website/images/about_bg.png" class="about_bg">
                </div>
            </div>
        </div>
    </div>
</section>
<!--
    end-about
                -->
