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
                <p class="text-center login_user"><a href="{{route('login')}}">Sign in</a></p>
            @endguest
            <p class="text-center login_user">{{$user->getUserName()}}</p>
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
        <div class="tm-mb-65">
            <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                <i class="fab fa-facebook tm-social-icon"></i>
            </a>
            <a href="https://twitter.com" class="tm-social-link">
                <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a href="https://instagram.com" class="tm-social-link">
                <i class="fab fa-instagram tm-social-icon"></i>
            </a>
            <a href="https://linkedin.com" class="tm-social-link">
                <i class="fab fa-linkedin tm-social-icon"></i>
            </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
            Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
        </p>
    </div>
</header>
