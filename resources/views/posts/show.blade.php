@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div ckass="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4 pt-2">
            <h2>{{ $post->caption}}</h2>
        </div>
    </div>
</div>
@endsection
