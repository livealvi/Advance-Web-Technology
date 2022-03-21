@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center mt-5">
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach($teachers as $count=>$teacher )
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>
                    <a href="/teachers/courses/{{$teacher->id}}">
                        <button type="button" class="btn btn-success">View Details</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection