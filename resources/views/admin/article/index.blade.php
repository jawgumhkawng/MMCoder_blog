@extends('admin.auth.layout.master')

@section('content')
    <div>
        <a href="{{ route('admin.article.create') }}" class="btn btn-success">Create</a>
    </div>
    <hr>
    <table class="table table-striped text-white">
        <thead>
            <tr>
                <th>Slug</th>
                <th>Title</th>
                <th>Like_Count</th>
                <th>View_Count</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->slug }}</td>
                    <td>{{ $d->title }}</td>
                    <td>{{ $d->like_count }}</td>
                    <td>{{ $d->view_count }}</td>
                    <td class="justify-content-between">
                        <a href="{{ route('admin.article.edit', $d->slug) }}" class="btn btn-sm btn-primary">Edit</a>

                        <form action="{{ route('admin.article.destroy', $d->id) }}" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" onclick="confirm('are u sure!');" class="btn btn-sm btn-danger"
                                value="Delete">
                        </form>

                        <button type="button" class="btn btn-sm btn-primary d-inline" data-toggle="modal"
                            data-target="#id{{ $d->id }}">
                            View
                        </button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
@section('script')
    <!-- Modal -->

    @foreach ($data as $d)
        <div class="modal fade" id="id{{ $d->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="modal-title " id="exampleModalLongTitle">{{ $d->title }}</h3>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <img src="{{ asset('/images/' . $d->image) }}" class="img-thumbnail w-100 mb-3 rounded"
                            alt="">

                        @foreach ($d->tag as $tag)
                            <span class="badge badge-info">{{ $tag->name }}</span>
                        @endforeach

                        @foreach ($d->programming as $p)
                            <span class="badge badge-primary">{{ $p->name }}</span>
                        @endforeach
                        <p>{!! $d->content !!}</p>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection
