@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">Edit Tag</h1>
            <a class="btn btn-success" href="{{route('tags')}}"> all Tags</a>
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
      <form action="{{route('tag.update' , ['id'=> $tag->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Title </label>
              <input type="text" name="tag" value="{{$tag->tag}}" class="form-control"   >
            </div>

            <div class="form-group" style="margin: 1%">

                <button class="btn btn-danger" type="submit">Update</button>
            </div>

          </form>
      </div>
    </div>
  </div>
@endsection
