@extends('layouts.master')

@section('title', 'Novo Post')

@section('content')

    <div class="tm-main">
        <h2 class="text-center mb-4">Cadastro de Post</h2>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <!-- Título -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="title" placeholder="Digite o título do post">
            </div>

            <!-- Conteúdo -->
            <div class="mb-3">
                <label for="conteudo" class="form-label">Descrição</label>
                <textarea class="form-control" id="conteudo" name="content" rows="5" placeholder="Escreva o conteúdo do post"></textarea>
            </div>

            <!-- Botão -->
            <button type="submit" class="btn btn-primary w-100">Cadastrar Post</button>
        </form>
    </div>


@endsection
