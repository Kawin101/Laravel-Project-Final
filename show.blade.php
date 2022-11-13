@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Student Infomation</h1> 
    <form method="POST" action="{{ route('student.show', $student['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Student-ID</strong>
                    <input type="text" name="stuid" value="{{ $student['stuid']}}" readonly="stuid" class="form-control" placeholder="633410000-0" maxlength="11">
                    @error('stuid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $student['name']}}" readonly="name" class="form-control" placeholder="Kawinphop Chs.">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Lastname</strong>
                    <input type="text" name="lastname" value="{{ $student['lastname']}}" readonly="lastname" class="form-control" placeholder="Chomnikorn">
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Year</strong>
                    <input type="number" name="year" value="{{ $student['year']}}" readonly="year" class="form-control" placeholder="3">
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Major-id</strong>
                    <input type="number" name="major_id" value="{{ $student['major_id']}}" readonly="major_id" class="form-control" placeholder="1">
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection