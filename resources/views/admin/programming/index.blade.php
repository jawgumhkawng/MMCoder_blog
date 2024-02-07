@extends('admin.auth.layout.master')

@section('content')
    <table class="table table-striped text-white">
        <thead>
            <tr>
                <th>Slug</th>
                <th>Name</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->slug }}</td>
                    <td>{{ $d->name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.programming.edit', $d->slug) }}" class="btn btn-sm btn-primary">Edit</a>

                        <form action="{{ route('admin.programming.destroy', $d->slug) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
