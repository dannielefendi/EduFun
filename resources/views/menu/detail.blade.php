@extends('layout.master')
@section('title', 'Article By Category')

@section('konten')

<div class="container my-5">
  <h2 class="mb-4">Kategori: {{ $categories->name }}</h2>

  @if($articles->isEmpty())
    <p>Tidak ada artikel di kategori ini.</p>
  @else
    <div class="row">
      @foreach ($articles as $article)
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
              <a href="{{ route('article.info', $article->id) }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
</div>


@endsection
