<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">@lang('site.all_projects')</a></li>
    @foreach($categories as $category)
        <li><a href="{{ route('product.show',$category->id) }}">{{ $category->category_name }}</a></li>
    @endforeach
</ul>
