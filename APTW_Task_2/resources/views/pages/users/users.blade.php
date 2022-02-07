@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users ?? '' as $count=>$users )
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->dob}}</td>
                <td>{{$users->phone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection