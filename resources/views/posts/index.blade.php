@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-4 bordor-color-gray">
        @foreach ($posts as $post)
        <a href="/post/{{ $post->id }}" class="font-weight-bold">
            <div class="font-weight-bold">{{$post->caption}}</div>
            <div class="pb-2 font-weight-bold">{{$post->tags->name}}</div> 
            <img src="/storage/{{ $post->image }}"class="w-100 pb-5">
        </a>
        @endforeach
    </div>
</div>
@endsection