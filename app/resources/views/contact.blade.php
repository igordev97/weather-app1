@extends('layouts.layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2 class="text-center">Contact Us</h2>
                <form action="{{route('contact.send')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Enter your Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="subject" class="form-label">Enter Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                    </div>

                    <div class="form-group my-3">
                        <label for="message" class="form-label">Enter Message:</label>
                        <textarea class="form-control" name="message" id="message"></textarea>
                    </div>

                    <button class="btn btn-primary mt-3">Send</button>
                </form>

                @if($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif

                @if(session()->has('message'))
                    <p class="text-success">{{session('message')}}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
