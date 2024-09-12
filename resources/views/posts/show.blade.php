@extends('layouts.master')

@section('title', $post->title)

@section('content')

    <div class="tm-main">
        <div class="mb-3">
            <label for="titulo" class="form-label">{{$post->title}}</label>
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">Postagem de: {{$ownerPost->name}}</label>
        </div>

        <!-- Conteúdo -->
        <div class="mb-3">
            <label for="conteudo" class="form-label">Descrição</label>
            <textarea class="form-control" id="conteudo" name="content" rows="5"
                      placeholder="Escreva o conteúdo do post"></textarea>
        </div>
    </div>

@endsection
