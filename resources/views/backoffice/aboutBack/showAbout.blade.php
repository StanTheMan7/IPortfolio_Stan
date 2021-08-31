@extends('template.base')
 
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$dataAbout->birthday}}</p>
        <p class="card-text">{{$dataAbout->website}}</p>
        <p class="card-text">{{$dataAbout->phone}}</p>
        <p class="card-text">{{$dataAbout->city}}</p>
        <p class="card-text">{{$dataAbout->age}}</p>
        <p class="card-text">{{$dataAbout->degree}}</p>
        <p class="card-text">{{$dataAbout->freelance}}</p>
        <p class="card-text">{{$dataAbout->description}}</p>
    <a class="btn btn-warning" href="{{route('editAbout', $dataAbout->id)}}">Edit</a>
    <form action="{{route('deleteAbout', $dataAbout->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection