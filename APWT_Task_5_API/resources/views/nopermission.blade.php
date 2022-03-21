@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center flex-column vh-100">
    <h1>No Permission</h1>
    <a class="btn btn-primary btn-small navbar-btn " href="{{ url()->previous() }}">Go Back</a>
</div>

@endsection