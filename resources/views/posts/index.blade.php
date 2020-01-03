{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


</body>
</html> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-4">
        @foreach ($posts as $post)
        <a href="/p/{{ $post->id }}">
            <div class="pt-4 pb-2 font-weight-bold a-color-black">{{$post->caption}}</div>
            <img src="/storage/{{ $post->image }}"class="w-100">
        </a>
        @endforeach
    </div>
</div>
@endsection