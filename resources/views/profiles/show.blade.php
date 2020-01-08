@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(auth()->user()->id==$user->id)   
        <div class="col-4 pt-2">
            <table class="table">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="/profiles/{{ Auth::user()->id}}/edit">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @else <h3>The catto said no.</h3>
        @endif
    </div>   
</div>
@endsection
