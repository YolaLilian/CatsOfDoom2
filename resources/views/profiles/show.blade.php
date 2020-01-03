@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- <div class="col-8">
            
        </div> --}}
        <div class="col-4 pt-2">
            <table class="table">
                <tbody>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                </tbody>
            </table>
        </div>
    </div>   
</div>
@endsection
