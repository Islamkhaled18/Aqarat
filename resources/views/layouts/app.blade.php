<!doctype html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('/') }}/website/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/css/main.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/css/responsive.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/css/animate.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ url('/') }}/website/images/shortcut_icon.png" rel="shortcut icon">


    <title>
        @lang('site.Building Construction')
        @yield('title')
    </title>
</head>

<body>

@include('includes.headerwelcomepage')

    @yield('content')

<section class="clients-opinions">
    <div class="container-fluid">
        <div class="main_title">
            <div class="text">
                <h3>@lang('site.our_best_customers_opinions')ِ</h3>
                <h2>@lang('site.customer_opinions')</h2>
            </div>
        </div>

        <div class="slider-opinions">
            <div class="item">

                <div class="block-opinion">
                    <div class="img-client">
                        <img src="{{ url('/') }}/website/images/client-1.png" alt="img">
                    </div>
                    <div class="text-client">
                        <h2>{{$customer_one_name}}  / <span> {{$customer_one_job}}</span></h2>

                        <p>
                            {{$customer_one_opinion}}
                        </p>
                    </div>
                </div>
            </div>


            <div class="item">

                <div class="block-opinion">
                    <div class="img-client">
                        <img src="{{ url('/') }}/website/images/client-2.png" alt="img">
                    </div>
                    <div class="text-client">
                        <h2>{{$customer_two_name}}  / <span> {{$customer_two_job}}</span></h2>

                        <p>
                            {{$customer_two_opinion}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
	end-clients-opinions
						-->

<section class="brands">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="item">
                <div class="block-brand">
                    <div class="img-brand center">
                        <a href="#">
                            <img src="{{$first_brand_image}}" alt="img">
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="block-brand">
                    <div class="img-brand center">
                        <a href="#">
                            <img src="{{$second_brand_image}}" alt="img">
                        </a>
                    </div>
                </div>
            </div>


            <div class="item">
                <div class="block-brand">
                    <div class="img-brand center">
                        <a href="#">
                            <img src="{{$third_brand_image}}" alt="img">
                        </a>
                    </div>
                </div>
            </div>


            <div class="item">
                <div class="block-brand">
                    <div class="img-brand center">
                        <a href="#">
                            <img src="{{$fourth_brand_image}}" alt="img">
                        </a>
                    </div>
                </div>
            </div>


            <div class="item">
                <div class="block-brand">
                    <div class="img-brand center">
                        <a href="#">
                            <img src="{{$first_brand_image}}" alt="img">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--
	end-brands
				-->

<footer>
    <div class="container-fluid">
        <div class="footer-top">
            <div class="text-footer">
                <h2>@lang('site.do_u_have_a_project_to_do')</h2>
                <h2>@lang('site.just_call_us')</h2>
            </div>
            <a href="{{ url('/contactus') }}" class="btn">@lang('site.contactus')</a>
        </div>

        <div class="about-links-footer">
            <div class="main-links">
                <div class="title-footer">
                    <h2>@lang('site.contactus')</h2>
                </div>

                <ul class="links">
                    <li><i>@lang('site.address')</i>{{$company_address}}</li>

                    <li><i>@lang('site.email')</i>{{$contact_email}}
                    </li>

                    <li><i>@lang('site.phone')</i><span>{{$contact_number}}</span>{{$contact_number_second}}</li>
                </ul>
            </div>


            <div class="main-links">
                <div class="title-footer">
                    <h2>@lang('site.working_hours')</h2>
                </div>

                <ul class="list-inline links">
                    <li><i>@lang('site.sunday')- @lang('site.thrusday')</i> 9 @lang('site.am') - 5 @lang('site.PM') </li>
                    <li><i> @lang('site.friday') - @lang('site.saturday') </i>: @lang('site.off')  </li>
                </ul>

                <div class="title-footer">
                    <h2>@lang('site.attaches')</h2>
                </div>

                <ul class=" links">
                    <li><a href="{{ url('/') }}">@lang('site.main')</a></li>
                    <li><a href="{{ url('/aboutus') }}">@lang('site.aboutus')</a></li>
                    <li><a href="{{ url('/service') }}">@lang('site.services') </a></li>
                    <li><a href="{{'/projects'}}">@lang('site.projects')</a></li>
                    <li><a href="{{ url('/contactus') }}">@lang('site.contactus')</a></li>
                </ul>

            </div>

            <div class="main-links">
                <div class="title-footer">
                    <h2>@lang('site.follow_our_latest_news')</h2>
                </div>

                <form action="{{ route('dashboard.followers.store') }}" method="post" class="form-footer">
                    @csrf

                    <div class="form-group">
                        <input name="follower_name" class="form-control" type="text" placeholder="Follower name">
                        <span class="fa fa-user"></span>
                    </div>

                    <div class="form-group">
                        <input name="follower_email" class="form-control" type="e-mail" placeholder="Follower email">
                        <span class="fa fa-envelope-o"></span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-footer-fo" type="submit">@lang('site.follow')</button>
                    </div>
                </form>
            </div>

            <div class="main-links">
                <div class="title-footer">
                    <h2>@lang('site.Our_work_gallery')</h2>
                </div>

                <ul class="list-inline fancy-img">
                    <li><a href="{{ url('/') }}/website/images/gallery-1.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-1.png"></a></li>

                    <li><a href="{{ url('/') }}/website/images/gallery-2.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-2.png"></a></li>

                    <li><a href="{{ url('/') }}/website/images/gallery-3.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-3.png"></a></li>


                    <li><a href="{{ url('/') }}/website/images/gallery-4.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-4.png"></a></li>


                    <li><a href="{{ url('/') }}/website/images/gallery-5.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-5.png"></a></li>

                    <li><a href="{{ url('/') }}/website/images/gallery-6.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-6.png"></a></li>


                    <li><a href="{{ url('/') }}/website/images/gallery-7.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-7.png"></a></li>


                    <li><a href="{{ url('/') }}/website/images/gallery-8.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-8.png"></a></li>


                    <li><a href="{{ url('/') }}/website/images/gallery-9.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-9.png"></a></li>



                    <li><a href="{{ url('/') }}/website/images/gallery-10.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-10.png"></a></li>


                    <li><a href="{{ url('/') }}/website/images/gallery-11.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-11.png"></a></li>



                    <li><a href="{{ url('/') }}/website/images/gallery-12.png" data-fancybox-group="gallery" class="fancybox">
                            <img src="{{ url('/') }}/website/images/gallery-12.png"></a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!--
	end-footer
				-->

<section class="bottom-footer">
    <div class="container-fluid">
        <div class="text-bottom">
            <h2>@lang('site.all_rights_reserved_to')<a href="{{ url('/') }}">@lang('site.Building Construction')</a></h2>
        </div>
    </div>
</section>
<!--
	end-bottom-footer
					-->


<script src="{{ url('/') }}/website/js/jquery-3.2.0.js"></script>
<script src="{{ url('/') }}/website/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/website/js/owl.carousel.min.js"></script>
<script src="{{ url('/') }}/website/js/owl.carousel2.thumbs.min.js"></script>
<script src="{{ url('/') }}/website/js/wow.min.js"></script>
<script src="{{ url('/') }}/website/js/jquery.fancybox.js"></script>
<script src="{{ url('/') }}/website/js/jquery.nicescroll.min.js"></script>
<script src="{{ url('/') }}/website/js/script.js"></script>

<script async defer
        src="{{ url('/') }}/website/https://maps.googleapis.com/maps/api/js?key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk&callback=initMap">
</script>

</body>
</html>
