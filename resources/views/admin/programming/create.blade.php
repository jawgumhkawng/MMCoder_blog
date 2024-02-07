@extends('admin.auth.layout.master')

@section('content')
    <div class="">
        <a href="{{ route('admin.programming.index') }}" class="btn btn-sm btn-success">All Language</a>
    </div>

    <hr>
    <form action="{{ route('admin.programming.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="text-white">Name</label>
            <input type="text" name="name" class="form-control">

        </div>
        <input type="submit" class="btn  btn-dark" value="Create">
    </form>
@endsection
