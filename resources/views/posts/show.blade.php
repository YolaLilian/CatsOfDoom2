@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4 pt-2">
            <h2>{{ $post->caption}}</h2>
            <p>{{ $post->tags->name}}<p>
            <p><strong>{{$post->liked->count()}}</strong> likes for this catto!</p>    
        </div>
        <div class="col-4 pt-2 font-weight-bold">
            <a href="/post">Go back to all Catto pics!</a>
    </div>
</div>
@endsection
