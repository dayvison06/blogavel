@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid">
        <main class="tm-main">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control rounded-4 tm-search-input" name="query" type="text" placeholder="Buscar..." aria-label="Search">
                        <button class="tm-search-button rounded-4" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row tm-row">

                @if($posts && $posts->count() > 0)
                    @foreach($posts as $post)
                        <article class="col-12 col-md-6 tm-post">
                            <!-- Status de "New" -->
                            <div class="status">New</div>

                            <!-- Imagem do post -->
                            <img src="https://placehold.co/300x200" alt="Imagem do Post">

                            <!-- Conteúdo do card -->
                            <a href="/post/{{ $post->id }}"><div class="card-content">
                                <h2>{{ $post->title }}</h2>
                                <p>{{ $post->content }}</p>

                            </div></a>
                        </article>
                    @endforeach
                @else
                    <h1>Nenhuma postagem encontrada</h1>
                @endif
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>

@endsection
