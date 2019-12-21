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
    <div class="row">
        @foreach ($posts as $post)
            {{$post->caption}}
            <img src="/storage/{{ $post->image }}"class="w-100">
        @endforeach
    </div>
</div>
@endsection