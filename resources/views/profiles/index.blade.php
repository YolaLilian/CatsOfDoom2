@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 pt-2">
            <table class="table">
                <tbody>
                    <div class="pt-4 pb-2 font-weight-bold a-color-black">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                        </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form method="post" action="profiles/{{ $user->id}}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </div>
                </tbody>
            </table>
        </div>
    </div>   
</div>
@endsection