@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- <div class="col-8">
            
        </div> --}}
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
                        <td>
                            <form method="post" action="profiles/{{ $user->id}}">
                                <button type="submit" class="btn btn-outline-info btn-sm">Edit</button>
                                @method('')
                                @csrf
                            </form>
                        </td>
                        <td>
                            <form method="post" action="/{{ $user->id}}">
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>   
</div>
@endsection
