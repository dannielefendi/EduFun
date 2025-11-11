<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layout.bootstrap')
</head>


<body>

    <div class="container-fluid mb-4">
        {{-- bagian header --}}
        @include('layout.header')

        {{-- bagian konten --}}
        @yield('konten')

        {{-- bagian footer --}}
        @include('layout.footer')
    </div>
</body>


</html>
