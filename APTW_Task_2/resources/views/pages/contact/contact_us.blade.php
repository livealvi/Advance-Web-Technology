@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="contact">
        <div class="contact__form">
            <form action="{{route('contactUs')}}" method="post" class="needs-validation">
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
                <div class="container">
                    <h4 class="mb-5">Contact Us</h4>
                    <div class="row">
                        {{-- name --}}
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="email" name="name" placeholder="Your Name"
                                value="{{old('name')}}">
                            {{-- show error message --}}
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{-- email --}}
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="your@email.com">
                            {{-- show error message --}}
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        {{-- subject --}}
                        <div class="mb-3 col-12">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="your subject">
                            {{-- show error message --}}
                            @error('subject')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        {{-- message --}}
                        <div class="mb-3 col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="text" class="form-control" row="3" id="message" name="message"
                                placeholder="your message..."></textarea>
                            {{-- show error message --}}
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- submit --}}
                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection