<section class="quote">
    <div class="container-fluid">
        <div class="quote_overlay"></div>
        <img src="{{$page_quote_image}}" class="quote_bg">
        <h1>
            @if( app()->getLocale()=="ar")
                {{$quote_headertaxt_ar}}
            @else
                {{$quote_headertaxt_en}}
            @endif
        </h1>
        <p>
            @if( app()->getLocale()=="ar")
                {{$quote_paragraphtext_ar}}
            @else
                {{$quote_paragraphtext_en}}
            @endif
        </p>
        <a href="{{ url('/contactus') }}" class="btn">
            <img src="{{ url('/') }}/website/images/Icon Invite1.png" class="original">
            <img src="{{ url('/') }}/website/images/Icon Invite.png" class="hover">
            @lang('site.contactus')
        </a>
    </div>
</section>
<!--
    end-quote
             -->
