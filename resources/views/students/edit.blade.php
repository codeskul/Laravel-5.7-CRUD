@extends('layouts.app') 
@section('page_name','Edit') 
@section('content')
<br><br><br>
<h2>Students : Edit</h2>
<br><br>
<form method="POST" action="{{action('StudentController@update', $student->id)}}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="form-group row">
        <label for="full_name">Full Name:</label>
        <input type="text" class="form-control @if(!empty($errors->first('full_name'))) is-invalid @endif" id="full_name" name="full_name"
            value="{{$student->full_name}}" autofocus> @if(!empty($errors->first('full_name')))
        <div class="invalid-feedback">
            {{$errors->first('full_name')}}
        </div> @endif
    </div>
    <div class="form-group row">
        <label for="address">Address:</label>
        <textarea class="form-control @if(!empty($errors->first('address'))) is-invalid @endif" rows="5" id="address" name="address"
            >{{$student->address}}</textarea> @if(!empty($errors->first('address')))
        <div class="invalid-feedback">
            {{$errors->first('address')}}
        </div>
        @endif
    </div>
    <div class="form-group row">
        <label for="contact_no">Contact Number:</label>
        <input type="text" class="form-control @if(!empty($errors->first('contact_no'))) is-invalid @endif" id="contact_no" name="contact_no"
            value="{{ $student->contact_no }}"> @if(!empty($errors->first('contact_no')))
        <div class="invalid-feedback">
            {{$errors->first('contact_no')}}
        </div>
        @endif
    </div>


    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
        <a href="{{route('students.index')}}" class="btn">Cancel</a>
    </div>
</form>
@endsection