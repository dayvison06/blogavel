<?php
    $active = '';
    $user = new \App\Http\Controllers\Blogavel\UserController();
?>

<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper shadow-md">
        <button class="navbar-toggler bg-black mx-3 mt-2 size-8 rounded" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo shadow-sm"><img src="{{asset('img/laravel-original.svg')}}"></div>
            <h2 class="text-center font-sans">Blogavel</h2>
            @guest
                <p class="text-center login_user mt-8"><a href="{{route('login')}}"><i class="fas fa-door-open"></i> Login</a></p>
            @endguest
            @auth
                <p class="text-center"><x-button-menu>{{$user->getUserName()}}</x-button-menu></p>
            @endauth
        </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <li class="tm-nav-item {{Route::current()->uri == '/' ? 'active' : ''}}"><a href="/" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    </a></li>
                <li class="tm-nav-item {{Route::current()->uri == 'post' ? 'active' : ''}}"><a href="/post" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Single Post
                    </a></li>
                <li class="tm-nav-item {{Route::current()->uri == 'sobre' ? 'active' : ''}}"><a href="/sobre" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        About Xtra
                    </a></li>
                <li class="tm-nav-item {{Route::current()->uri == 'contato' ? 'active' : ''}}"><a href="/contato" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a></li>
            </ul>
        </nav>
    </div>
</header>
