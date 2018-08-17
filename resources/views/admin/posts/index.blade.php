@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Published Posts
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Image
                </th>

                <th>
                    Title
                </th>

                <th>
                    Edit
                </th>
                <th>
                   Trash
                </th>
                </thead>
                <tbody>
                @if($post->count() > 0)
                    @foreach($post as $post)
                        <tr>
                            <td><img src="{{$post->featured }}" alt="post-title" width="" height="90px"></td>
                            <td>{{ $post->title }}</td>
                            <td> <a href="{{ route('post.edit', ['id'=> $post->id]) }}" class="btn btn-xs btn-info">Edit</a></td>
                            <td> <a href="{{ route('post.delete', ['id'=> $post->id]) }}" class="btn btn-xs btn-danger">Trash</a></td>
                        </tr>
                    @endforeach
                    @else
                    <tr>

                        <th colspan="5" class="text-center">No published posts</th>
                    </tr>

                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop