@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="table-responsive w-100">
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr class="text-center align-middle">
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach($users as $count=>$user )
                <tr>
                    <th scope="row">{{++$count}}</th>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->dob}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        <a href="/user-edit/{{$user->id}}">
                            <button type="button" class="btn btn-success mb-2 mb-sm-0">Edit</button>
                        </a>
                        <a href="/user-delete/{{$user->id}}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection