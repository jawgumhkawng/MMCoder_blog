@extends('admin.auth.layout.master')

@section('content')
    <div>
        <a href="{{ route('admin.tag.create') }}" class="btn btn-success">Create</a>
    </div>
    <hr>
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
                    <td class="">
                        <a href="{{ route('admin.tag.edit', $d->slug) }}" class="btn btn-sm btn-primary">Edit</a>

                        <form action="{{ route('admin.tag.destroy', $d->slug) }}" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
