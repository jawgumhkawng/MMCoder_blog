@extends('admin.auth.layout.master')

@section('content')
    <div class="">
        <a href="{{ route('admin.tag.index') }}" class="btn  btn-success">All Language</a>
    </div>

    <hr>
    <form action="{{ route('admin.tag.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="text-white">Name</label>
            <input type="text" name="name" class="form-control" placeholder="fill the name">

        </div>
        <input type="submit" class="btn  btn-dark" value="Create">
    </form>
@endsection
