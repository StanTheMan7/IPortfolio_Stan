@extends('backoffice.homeBack.homeBack')

@section('content2')
<div class="container d-flex flex-column justify-content-center align-items-center"></div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$dataSkills->nom}}</p>
        <p class="card-text">{{$dataSkills->prosentage}}</p>
    <a class="btn btn-warning" href="{{route('editSkill', $dataSkills->id)}}">Edit Skill</a>
    <form action="{{route('deleteSkill', $dataSkills->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection