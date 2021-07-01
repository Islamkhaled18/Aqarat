@extends('layouts.app')

@section('title')

@endsection

@section('content')

    <section class="contact-form">
        <div class="container-fluid">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">عضوية جديده</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"

                           onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                            تسجيل خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @include('welcome')

                </li>
            @endguest
            <div class="clear"></div>
        </div>
    </section>

@endsection
