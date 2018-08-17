@extends('layouts.app')



@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Posts
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
                    Restore
                </th>
                <th>
                    Delete
                </th>
                </thead>
                <tbody>

                @if($post->count() > 0)

                @foreach($post as $post)
                    <tr>

                        <td><img src="{{$post->featured }}" alt="post-title" width="" height="90px"></td>
                        <td>{{ $post->title }}</td>
                        <td>Edit</td>
                        <td> <a href="{{ route('post.restore', ['id'=> $post->id]) }}" class="btn btn-xs btn-success">Restore</a></td>
                        <td> <a href="{{ route('post.kill', ['id'=> $post->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>

                    </tr>



                @endforeach

                    @else

                <tr>

                    <th colspan="5" class="text-center">No trashed posts</th>
                </tr>

                </tbody>

@endif

            </table>




        </div>
    </div>



@stop