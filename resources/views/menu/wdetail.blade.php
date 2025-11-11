@extends('layout.master')
@section('title', 'Writer Detail Page')

@section('konten')

<div class="container my-5">
  <h2 class="mb-4">Kategori: {{ $writer->name }}</h2>

  @if($articles->isEmpty())
    <p>Tidak ada artikel di kategori ini.</p>
  @else
    <div class="row">
      @foreach ($articles as $article)
        <h5 class="card-title">{{ $article->title }}</h5>
        <h6>{{ $article->date }}</h6>
        <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
        <a href="{{ route('article.info', $article->id) }}" class="btn btn-primary">Read More</a>
        <hr class="my-4">


      @endforeach
    </div>
  @endif
</div>


@endsection
