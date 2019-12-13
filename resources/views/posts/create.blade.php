@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

            <div class="row">
                <h1>Nieuwe Post Toevoegen</h1>
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
                <label for="image" class="col-md-4 col-form-label">{{ ('Post Image') }}</label>

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

            <div class="row pt-3">
                <button class="btn btn-primary">Voeg Post toe</button>
            </div>
        </div>
    </form>
</div>
@endsection