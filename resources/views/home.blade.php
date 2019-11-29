@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-10"> 
            <img src="https://cat-bounce.com/catbounce.png" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ Auth::user()->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>12</strong> posts</div>
                <div class="pr-5"><strong>12</strong> posts</div>
                <div class="pr-5"><strong>12</strong> posts</div>
            </div>
        </div>
    </div>
</div>
@endsection
