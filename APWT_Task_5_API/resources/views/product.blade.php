@extends('layouts.app')
@section('content')
{{-- d-flex justify-content-center align-items-center --}}
<div class=" vh-100 wrapper">
    <h1>Product</h1>
    <ul>
        @foreach ($products as $product)
        <li>{{$product}}</li>
        @endforeach
    </ul>
</div>

@endsection