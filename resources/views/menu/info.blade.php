@extends('layout.master')
@section('title', 'Info Page')

@section('konten')

<div class="container mt-4">
    <h1 class="display-4">{{ $articles->category->name }}</h1>
    <h2 class="lead">{{ $articles->title }}</h2>
    <h4>{{ $articles->date }}</h4>
    <h2 class="bold">{{ $articles->writer->name }}</h2>
    <hr class="my-4">
    <p>{{ $articles->content }}</p>
</div>

@endsection
