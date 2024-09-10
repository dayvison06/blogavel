<?php
    $active = '';
    $user = new \App\Http\Controllers\Blogavel\UserController();
?>

<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><img src="{{asset('img/blogavel_logo.svg')}}"></div>
            <h2 class="text-center">Blogavel</h2>
            @guest
                <p class="text-center login_user"><a href="{{route('login')}}"><i class="fas fa-door-open"></i> Login</a></p>
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
