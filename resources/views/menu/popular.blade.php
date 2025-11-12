@extends('layout.master')

@section('title', 'Popular Articles | EduFun')

@section('konten')

<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to the Popular Articles Page!</h1>
        <p class="lead">This is the home page of our Trending Articles.</p>
        <hr class="my-4">
        <p>Explore our articles and enjoy your stay.</p>


        @if ($articles->isEmpty())
            <p class="text-muted">Belum ada artikel populer.</p>
        @else
        @foreach ($articles as $article)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h4>{{ $article->title }}</h4>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <h6>{{ $article->category->name }}</h6>
                    <p class="text-muted small mb-2">
                        {{ $article->date }} | By {{ $article->writer->name }}
                    </p>
                    <a href="{{ route('article.info', $article->id) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        @endforeach

        <nav aria-label="Page navigation example mb-4">
            <ul class="pagination justify-content-center">
                {{-- Tombol Previous --}}
                @if ($articles->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $articles->previousPageUrl() }}">Previous</a>
                </li>
                @endif

                {{-- Nomor halaman --}}
                @for ($i = 1; $i <= $articles->lastPage(); $i++)
                <li class="page-item {{ $i == $articles->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                </li>
                @endfor

                {{-- Tombol Next --}}
                @if ($articles->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
                </li>
                @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </nav>


        @endif
    </div>
</div>

<div class="container mt-4">
    <hr class="my-4">
</div>


@endsection
