@extends('layout.master')
@section('title', 'Home Page')

@section('konten')

<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to the Home Page!</h1>
        <p class="lead">This is the home page of our awesome web application.</p>
        <hr class="my-4">
        <p>Explore our features and enjoy your stay.</p>
        {{-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <h2>Articles</h2>
        </div>
    </div>

    <table class="table table-striped table-hover mt-4">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Writer</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->date}}</td>
                <td>{{$article->writer->name}}</td>
                <td>{{$article->category->name}}</td>
                <td>
                    <a href="{{ route('article.info', $article->id) }}" class="btn btn-primary">More</a>
                </td>
            </tr>
        @endforeach
    </table>


</div>
@endsection
