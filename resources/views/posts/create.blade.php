@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">Create Post</h1>
            <a class="btn btn-success" href="{{route('posts')}}"> all posts</a>
           </div>
      </div>

    </div>
    <div class="row">

        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </ul>
        @endif


      <div class="col">
      <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group">
                <label for="exampleFormControlInput1">Title </label>
                <input type="text" name="title" class="form-control"   >
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Tags </label>
                @foreach ($tags as $item)
                    <div class="form-check">
                    <input  type="checkbox"  name="tags[]"
                    value="{{$item->id}}" >
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$item->tag}} </label>
                                </div>
                @endforeach
              </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Content  </label>
              <textarea class="form-control"  name="body"   rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Photo  </label>
                <input type="file"  name="photo" class="form-control"   >
              </div>

            <div class="form-group" style="margin: 1%">

                <button class="btn btn-danger" type="submit">save</button>
            </div>

          </form>
      </div>
    </div>
  </div>
@endsection
