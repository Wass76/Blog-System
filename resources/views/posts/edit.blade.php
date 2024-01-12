@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">Edit Post</h1>
            <a class="btn btn-success" href="{{route('posts')}}"> all posts</a>
           </div>
      </div>

    </div>
    <div class="row">

        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                    <div class="alert alert-warning" role="alert">
                        {{$item}}
                    </div>
                </li>
            @endforeach
        </ul>
        @endif


      <div class="col">
      <form action="{{route('post.update' , ['id'=> $post->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Title </label>
              <input type="text" name="title" value="{{$post->title}}" class="form-control"   >
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Tags </label>
                @foreach ($tag as $item)
                    <div class="form-check">
                    <input  type="checkbox"  name="tags[]"
                    value="{{$item->id}}"

                    @foreach ($post->tag as $item2)
                        @if ($item->id == $item2->id)
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$item->tag}} </label>
                                </div>
                @endforeach
              </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Content  </label>
              <textarea class="form-control"  name="body"  rows="3"> {{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Photo  </label>
                <input type="file"  name="photo"  class="form-control"   >
              </div>

            <div class="form-group">

                <button class="btn btn-danger" type="submit">Update</button>
            </div>

          </form>
      </div>
    </div>
  </div>
@endsection
