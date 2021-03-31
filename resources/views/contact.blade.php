@extends('layouts.app')
@section('content')
    <form action="{{ route('contactPost') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email[]" class="form-control" placeholder="Work email">
        </div>
        <div class="form-group">
            <input type="email" name="email[]" class="form-control" placeholder="Personal email">
        </div>
        <div class="form-group">
            <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="attachment" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Send Message</button>
        </div>
    </form>
@endsection