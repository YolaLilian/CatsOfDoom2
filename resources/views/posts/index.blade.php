@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <p><strong>{{ $posts->count()}} </strong> posts</p>
    </div>
    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{ $post->id }}" class="font-weight-bold text-dark">
                    <div class="font-weight-bold">{{$post->caption}}</div>
                </a>
                <a href="/post/{{ $post->id }}" class="font-weight-bold text-muted">
                    <div class="pb-2 font-weight-bold">{{$post->tags->name}}</div> 
                </a>
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
                <like-button></like-button>
            </div>
        @endforeach
        {{-- <a href="{{action('ProfilesController@edit', $user['id'])}}">Edit your profile</a> --}}
    </div>
</div>
@endsection