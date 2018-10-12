@extends('layouts.app') 
@section('page_name','List') 
@section('content')
<br><br><br>
<h2>Students : Create</h2>
@foreach ($errors->all() as $message) {{$message}} @endforeach
<form method="POST" action="{{action('StudentController@store')}}">
    @csrf
    <div class="form-group @if($errors->has('full_name')) has-error @endif">
        <label for="full_name">Full Name:</label>
        <input type="text" class="form-control" id="full_name" name="full_name">
    </div>
    <div class="form-group @if($errors->has('address')) has-error @endif">
        <label for="address">Address:</label>
        <textarea class="form-control" rows="5" id="address" name="address"></textarea>
    </div>
    <div class="form-group @if($errors->has('contact_no')) has-error @endif">
        <label for="contact_no">Contact Number:</label>
        <input type="text" class="form-control" id="contact_number" name="contact_no">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection