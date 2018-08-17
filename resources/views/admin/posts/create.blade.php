@extends('layouts.app')


@section('content')

    @include('admin.includes.errors')


  <div class="panel panel-default">


      <div class="panel-heading">

          Create a new post

      </div>

      <div class="panel-body">

          <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}

              <div class="form-group">

                  <label for="title">Title</label>

                  <input name="title" id="title" class="form-control">

              </div>

              <div class="form-group">

                  <label for="featured">Image</label>

                  <input type="file" name="featured" class="form-control">

            </div>

              <div class="form-group">

                  <label for="category">
                    Select a Category
                  </label>

                  <select name="category_id" id="category" class="form-control">

                      @foreach($categories as $category)

                          <option value="{{ $category->id }}">

                              {{ $category->name }}

                          </option>

                          @endforeach

                  </select>

              </div>

              <div class="form-group">

                  <label for="tags"> Select tags</label>

                  @foreach($tags as $tag)

                      <div class="checbox">

                          <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</label>

                      </div>

                      @endforeach

              </div>

              <div class="form-group">

                  <label for="content">Content</label>

                  <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>

              </div>

              <div class="text-center">

                  <button class="btn btn-success" type="submit">
                      Store Post
                  </button>

              </div>


          </form>

      </div>

    </div>



    @stop

{{--@section('styles)--}}
    {{--<!-- include summernote css/js-->--}}
    {{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">--}}
    {{--@stop--}}

{{--@section('scripts')--}}
    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>--}}

    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$('#content').summernote();--}}
        {{--});--}}
    {{--</script>--}}

{{--@stop--}}

