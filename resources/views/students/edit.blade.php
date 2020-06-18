@extends('students.layout')

@section('content')

<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input name="name" value="{{$student->name}}" class="form-control" placeholder="Name">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Middle_name:</strong>
                <input name="middle_name" value="{{$student->middle_name}}" class="form-control" placeholder="Middle_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last_name:</strong>
                <input name="last_name" value="{{$student->last_name}}" class="form-control" placeholder="LastS_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input name="Address" value="{{$student->address}}" class="form-control" placeholder="Address">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input name="email" value='{{$student->email}}' class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection