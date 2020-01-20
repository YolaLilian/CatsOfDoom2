@extends('layouts.app')

@section('content')
<div>
    @if(auth()->user()->likes->count() > 2) {
        <div class="container">
            <div class="justify-content-center">
                <div><strong>{{ $posts->count()}} </strong> posts</div>
                

                <form action="/post/filtered" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="tags_id" class="col-md-4 col-form-label">{{ ('Filter:') }}</label>
                        <div class="col-md-6">
                            <select class="custom-select" name="tags_id" id="tags_id">
                                <option value="" selected="" disabled="" hidden="">Select tag...</option>
                                <option value="1">Eating</option>
                                <option value="2">Sleeping</option>
                                <option value="3">Playing</option>
                                <option value="4">Cuddling</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-success">Filter posts!</button>
                    </div>
                </form>
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
                    <like-button post-id="{{ $post->id }}" likes="{{ $likes }}"></like-button>
                    </div>
                @endforeach
            </div>
        </div>
    }
    @elseif(auth()->user()->likes->count() <=2) {

        <div class="container">
            <div class="justify-content-center">
                <div><strong>{{ $posts->count()}} </strong> posts</div>
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
                    <like-button post-id="{{ $post->id }}" likes="{{ $likes }}"></like-button>
                    </div>
                @endforeach
            </div>
        </div>
    }
    @endif
</div>
@endsection