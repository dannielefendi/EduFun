@extends('layout.master')
@section('title', 'Writer Page')

@section('konten')
@php
    use Illuminate\Support\Str;
@endphp

<div class="container my-5">
  <h2 class="mb-4">Our Writers</h2>

  <div class="row">
      @foreach ($writers as $writer)
      <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
              <div class="card-body">
                  <h5 class="card-title">{{ $writer->name }}</h5>
                  <p class="card-text">{{ Str::limit($writer->bio, 100) }}</p>
                  <a href="{{ route('writer.detail', $writer->id) }}" class="btn btn-primary">Articles</a>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
@endsection
