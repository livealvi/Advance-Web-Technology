@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="table-responsive w-100">
        <table class="table table-hover table-bordered text-center ">
            <thead>
                <tr class="text-center align-middle">
                    <th scope="col">#</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Teacher ID</th>
                    <th scope="col">Teacher Name</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach($allData as $count=>$data )
                <tr>
                    <th scope="row">{{++$count}}</th>
                    <td>{{$data->id}}</td>
                    <td>{{$data->course_code}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->teacherId}}</td>
                    <td>{{$teacher->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection