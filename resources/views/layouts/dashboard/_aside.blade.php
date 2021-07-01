<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path  }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>

                <br>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <!-- خاص بالاعضاء والمشرفين -->

            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.Dashboard')</span></a></li>

            @if(auth()->user()->haspermission('users_read'))
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.contactus.index') }}"><i class="fa fa-th"></i><span>@lang('site.messages')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.followers.index') }}"><i class="fa fa-th"></i><span>@lang('site.followers')</span></a></li>
            @endif

            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.singleproject.index') }}"><i class="fa fa-th"></i><span>@lang('site.projects')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.brands.index') }}"><i class="fa fa-th"></i><span>@lang('site.brands')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.sitesettings') }}"><i class="fa fa-th"></i><span>@lang('site.sitesettings')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.aboutussettings') }}"><i class="fa fa-th"></i><span>@lang('site.aboutussetting')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.servicesettings') }}"><i class="fa fa-th"></i><span>@lang('site.servicesettings')</span></a></li>
            @endif
            @if(auth()->user()->haspermission('site_read'))
                <li><a href="{{ route('dashboard.constructionsettings') }}"><i class="fa fa-th"></i><span>@lang('site.constructionsettings')</span></a></li>
            @endif


        </ul>

    </section>

</aside>

