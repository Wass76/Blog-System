@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-4">All Users  </h1>
        <a class="btn btn-success" href="{{route('user.create')}}"> create User <i class="fas fa-edit"></i></a>
           </div>
      </div>
    </div>
    <div class="row">


        @if ($users->count() > 0 )
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> Email</th>
                    <th scope="col"> Created at</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>

                        <td>
                            @if ($item->user_id == Auth::id())
                            &nbsp;&nbsp;
                             <a class="text-danger" href="{{route('user.destroy',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
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
                No Users
              </div>
        </div>

        @endif


    </div>
  </div>
@endsection
