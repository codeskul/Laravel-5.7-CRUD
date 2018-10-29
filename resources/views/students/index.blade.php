@extends('layouts.app') 
@section('page_name','List') 
@section('content')
<br><br><br>
<h2>Students : List</h2>
<br><br><a href="{{route('students.create')}}"><button type="button" class="btn btn-primary">Create</button></a><br><br>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->full_name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->contact_no}}</td>
                <td><a href="{{route('students.show',['id'=>$student->id])}}"><button class="btn btn-default">Show</button></a></td>
                <td><a href="{{route('students.edit',['id'=>$student->id])}}"><button class="btn btn-primary">Edit</button></a></td>
                <td><form method="POST" action="{{action('StudentController@destroy', $student->id)}}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection