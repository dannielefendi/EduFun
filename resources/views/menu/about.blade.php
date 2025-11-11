@extends('layout.master')
@section('title', 'About Page')

@section('konten')
@php
    use Illuminate\Support\Str;
@endphp

<div class="container my-5">
  <h2 class="mb-4">About Us</h2>
  <p>Welcome to our website. We are dedicated to providing the best content for our readers.</p>
</div>

@endsection
