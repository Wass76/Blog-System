@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">All Tags  </h1>
        <a class="btn btn-success" href="{{route('tag.create')}}"> create tag <i class="fas fa-edit"></i></a>
           </div>
      </div>
    </div>
    <div class="row">


        @if ($tag->count() > 0 )
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tag's Name</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($tag as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->tag}}</td>

                        <td>
                            @if ($item->user_id == Auth::id())
                            &nbsp;&nbsp;
                            <a href="{{route('tag.edit',['id'=> $item->id])}}"> <i class="fas fa-2x fa-edit"></i>  </a>&nbsp;&nbsp;
                            <a class="text-danger" href="{{route('tag.destroy',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
                            @endif

                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>


          </div>
        @else
        <div class="col" style="margin: 1%">
            <div class="alert alert-danger" role="alert">
                No Tags
              </div>
        </div>

        @endif


    </div>
  </div>
@endsection
