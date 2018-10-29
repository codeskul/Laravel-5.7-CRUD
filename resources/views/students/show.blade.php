@extends('layouts.app') 
@section('page_name','Show') 
@section('content')
<br><br><br>
<h2>Students : Show</h2>
<br><br>
<div class="form-group row">
    <div class="col-sm-4">Full Name:</div>
    <div class="col-sm-8">{{$student->full_name}}</div>
</div>

<div class="form-group row">
    <div class="col-sm-4">Address:</div>
    <div class="col-sm-8">{{$student->address}}</div>
</div>

<div class=" form-group row">
    <div class="col-sm-4">Contact Number:</div>
    <div class="col-sm-8">{{$student->contact_no}}</div>
</div>


    <div class="form-group row">
        <a href="{{route('students.index')}}"><button class="btn ">Cancel</button></a>
    </div>

@endsection