@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->role_id==1)
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

            <div class="row">
                <h1>Add new Catto Pic</h1>
            </div>

            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">{{ ('Image caption') }}</label>
            
                <div class="col-md-6">
                    <input id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" 
                    value="{{ old('caption') }}"  
                    autocomplete="name" 
                    autofocus>
            
                    @error('caption')
                    <span class="invalid-feedback"               
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class= "form-group row">
                <label for="image" class="col-md-4 col-form-label">{{ ('Post image') }}</label>

                <div class="col-md-6">
                    <input id="image"  
                    type="file"
                    class="form-control-file"                     
                    name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tags_id" class="col-md-4 col-form-label">{{ ('Image tags') }}</label>
                <div class="col-md-6">
                    <select class="custom-select" name="tags_id" id="tags_id">
                        <option value="" selected="" disabled="" hidden="">Select tag...</option>
                        <option value="1">Eating</option>
                        <option value="2">Sleeping</option>
                        <option value="3">Playing</option>
                        <option value="4">Cuddling</option>
                    </select><br>
            
                    @error('tags_id')
                        <strong>The tag is required.</strong>
                    @enderror
                </div>
            </div>

            <div class="row pt-3">
                <button class="btn btn-outline-warning">Add post</button>
            </div>
        </div>
    </form>
    @else <h3>The catto said no.</h3>
    @endif
</div>
@endsection
