@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center m-3">Posts</h1>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td class="text-right">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary m-1"> Edit </a>
                                    <a href="{{ route('posts.delete', $post->id) }}" class="btn btn-danger m-1" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center col-md-12 mb-3 m-2">
                    <a href="{{ route('posts.create') }}" class="btn btn-secondary">Create</a>
                </div>
            </div>
        </div>
    </div>
@endsection

