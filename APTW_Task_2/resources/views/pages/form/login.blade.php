@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="login">
    <h4 class="mb-5">Login</h4>
    <div class="login__form">
      <form action="{{route('loginValidator')}}" method="post" class="needs-validation">
        {{csrf_field()}}

        {{-- for error --}}
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        {{-- email --}}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="xyz@email.com"
            value="{{old('name')}}">
          {{-- show error message --}}
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        {{-- password --}}
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="*******">
        </div>
        <div class="text-center">
          <a class="fw-bold" href="{{route('registration')}}">Create An Account</a>
        </div>
        {{-- submit --}}
        <button type="submit" class="btn btn-success">Login</button>
      </form>
    </div>
  </div>
</div>

@endsection