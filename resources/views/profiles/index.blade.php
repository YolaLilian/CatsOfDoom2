@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(auth()->user()->role_id==1)
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
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    @method('delete')
                                    @csrf
                                </form>
                                {{-- <form method="post" action="profiles/{{ $user->id}}/edit">
                                    <button type="submit" class="btn btn-outline-warning btn-sm">Edit</button>
                                    @csrf
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                    </div>
                </tbody>
            </table>
        </div>
        @else 
            <div> 
                <h3>The catto said no.</h3>
                {{-- <div class=backgroundimage> --}}
                    <img class=img-fluid src="https://lh3.googleusercontent.com/cEQ0BQc1sk63XLqQNrZE-m213LIIyLgxGkknBX6W-euqwP4duwlfSFzN-RewTFVcxvjRBasOTUDpeys9S-OV0uoH0Pe0iwyD27Nm5-zHebnHkfohyL7tTu1zWVxzSBpLFfFvTzeb3_ZFYYTfo1h56pAPWAbVy7fMqJX5AXdllTCW8h96mLInkARKJoO6gqbOyUYtSNLU6CQ22GpCyajgChBHvwrpx8HU-oaKERp-WKSoU7vHeyUe4AVBh_LpSiOq9aLlqk_vydPmV6afn7YceLdkld8MJTiT3AlrKWKHebsMYNUqwlFA23tYLCHFdk931RVhIyW5euPJH3diP728y48EzXhBWWsqx-h6Xwx8slMtMbR9HkPxSA1soI6W6RbIIE32xP3zTcT64an3mmxBgdIVzrRJAYp69NlJNaCidsEw8_QXnWLn_tolDktK7RSnH6RU36n1J4g33MGfnilVFrvNSLkENuIevuiqS223n1Mx7qROhElxAvy1B5mashyxGjbsVuKu4SeO4zJ38SQC0SSf0OTQo2xKGWynB_2x2ZRZd3RcclQF7cQjmh5nIhYgc1A_k6i_K2PLhrx8m5-xVfZX4xnaF2ByXZKGSqk4TAxMcB-YMbCGgV0-m0WG1adn2TTT9PYQcu52tz-lCFaRYCA0jD_qWE-F7BAYwIJo9JAE3dZ9ryFong=w1224-h937-no">
            </div>
        @endif
    </div>   
</div>
@endsection