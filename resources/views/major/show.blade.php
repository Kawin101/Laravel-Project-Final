@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Major Infomation</h1> 
    <form method="POST" action="{{ route('major.show', $major['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Major's Keywords </strong>
                    <input type="text" name="code" value="{{ $major['code']}}" readonly="code" class="form-control" placeholder="Keyword's CS, DS">
                    @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Name</strong>
                    <input type="text" name="description" value="{{ $major['description']}}" readonly="description" class="form-control" placeholder="Course name | Major name">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{ route('major.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection