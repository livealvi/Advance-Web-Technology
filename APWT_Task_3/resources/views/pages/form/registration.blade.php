@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="registration">
    <div class="registration__form">
      <h4 class="mb-5">Create an account</h4>
      <form action="{{route('user-create')}}" method="post" class="needs-validation">
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
        {{-- name --}}
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control" id="name" name="name" placeholder="John Doe" value="{{old('name')}}">
          {{-- show error message --}}
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        {{-- email --}}
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="xyz@email.com"
            value="{{old('email')}}">
          {{-- show error message --}}
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        {{-- DOB --}}
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob" placeholder="xyz@email.com"
            value="{{old('dob')}}">
          {{-- show error message --}}
          @error('dob')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        {{-- phone --}}
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="0123456789"
            value="{{old('phone')}}">
          {{-- show error message --}}
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        {{-- password --}}
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="*******">
          {{-- show error message --}}
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="text-center">
          <a class="fw-bold" href="{{route('login')}}">Have an account? Login</a>
        </div>
        {{-- submit --}}
        <button type="submit" class="btn btn-success">Create an account</button>
      </form>
    </div>
  </div>
</div>

@endsection