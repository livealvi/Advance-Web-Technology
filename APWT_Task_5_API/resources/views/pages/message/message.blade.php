@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages ?? '' as $count=>$msg )
            <tr>
                <th scope="row">{{++$count}}</th>
                <td>{{$msg->name}}</td>
                <td>{{$msg->email}}</td>
                <td>{{$msg->subject}}</td>
                <td>{{$msg->message}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection