@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center m-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Post</div>
                    <div class="card-body">
                        <form action="/update/{{ $posts->id }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $posts->title }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Content</label>
                                <textarea name="body" rows="5" class="form-control">{{ $posts->body }}</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
