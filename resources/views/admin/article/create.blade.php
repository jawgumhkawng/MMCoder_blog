@extends('admin.auth.layout.master')


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="">
        <a href="{{ route('admin.article.index') }}" class="btn  btn-success">All Language</a>
    </div>

    <hr>
    <form action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="text-white">Programming</label>
            <select class="form-control" name="programming[]" id="programming" multiple>
                @foreach ($programming as $p)
                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="" class="text-white">Tag</label>
            <select class="form-control" name="tag[]" id="tag" multiple>
                @foreach ($tag as $t)
                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name" class="text-white">Title</label>
            <input type="text" name="title" class="form-control" placeholder="fill the name">

        </div>
        <div class="form-group">
            <label for="image" class="text-white">Image</label>
            <input type="file" name="image" class="form-control">

        </div>
        <div class="form-group">
            <label for="name" class="text-white">Content</label>
            <textarea name="content" id="content"></textarea>

        </div>

        <input type="submit" class="btn  btn-dark" value="Create">
    </form>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('#content').summernote({
            placeholder: 'Content',
            tabsize: 2,
            height: 100
        });
        $('#tag').select2();
        $('#programming').select2();
    </script>
@endsection
