@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">All Posts  </h1>
        <a class="btn btn-success" href="{{route('post.create')}}"> Create Post <i class="fas fa-add"></i></a>
        <a class="btn btn-danger" href="{{route('posts.trashed')}}"> Recycle bin <i class="fas fa-trash"></i></a>
           </div>
      </div>
    </div>
    <div class="row">


        @if ($posts->count() > 0 )
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col"> Date</th>
                    <th scope="col">User</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($posts as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->title}}</td>
                        <td>{{$item->created_at->diffForhumans() }}</td>
                        <td>{{$item->user->name}}</td>
                        <td>
                        <img src="{{URL::asset($item->photo)}}" alt="{{$item->photo}}"
                        {{-- <img src="{{$item->photo}}" alt="{{$item->photo}}" --}}
                        class="img-thumbnail" width="100" height="100">
                        </td>
                        <td>
                            <a  class="text-success" href="{{route('post.show',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-eye"></i> </a>
                            {{-- @if ($item->user_id == Auth::id()) --}}
                            <a href="{{route('post.edit',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-edit"></i>  </a>
                            <a class="text-danger" href="{{route('post.destroy',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
                             {{-- @endif --}}

                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>


          </div>
        @else
        <div class="col" style="margin: 1%">
            <div class="alert alert-danger" role="alert">
                No posts
              </div>
        </div>

        @endif


    </div>
  </div>
@endsection
