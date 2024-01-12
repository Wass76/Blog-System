@extends('layouts.app')

@section('content')

@php
    $genderArray = ['Male' , 'Female'];
    $provinceArray = ['Damas' , 'Aleppo' , 'Homs' , 'Lattakia' , 'Hama' , 'Dar\'a']
@endphp

<div class = "container" style = "padding-top: 2%">

    @if (count($errors)>0)
    @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
            {{$item}}
        </div>
    @endforeach
    @endif

<form method="POST" action="{{route('profile.update')}}">

    @csrf
    @method('POST')
    <div class="form-group">
        <label for="exampleFormControlInput1" >Name</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}" >
    </div>


    <div class="form-group">
        <label for="exampleFormControlInput1">Facebook</label>
        <input type="text" name="facebook" class="form-control" value="{{$user -> facebook}}" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Gender</label>
        <select class = "form-group" name="gender">
            @foreach ($genderArray as $item )
            <option value="{{$item}}" {{($user->gender = $item) ? 'selected' : ' '}}>
                {{$item}}
            </option>

            @endforeach
      </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1"> Province </label>
    <select class="form-control" name="province" >
        @foreach ($provinceArray  as $item)
        <option value="{{$item}}" {{($user->province == $item) ? 'selected':''}}>
            {{$item}}
        </option>
        @endforeach
    </select>
</div>

  <div class="form-group">
        <label for="exampleFormControlTextarea1">Bio </label>
        <textarea class="form-control" name="bio" rows="3">
           {!! $user ->bio !!}
         </textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">password</label>
    <input type="password" name="password" class="form-control" >
</div>
<div class="form-group">
    <label for="exampleFormControlInput1" >confirm password</label>
    <input type="password" name="c_password" class="form-control" >
</div>




  <div class="form-group">
    <button class ="btn btn-success" type = "submit"> update</button>
  </div>

</form>
</div>

@endsection
