@extends('backoffice.homeBack.homeBack')

@section('content')
<form action="{{route('updateSkill', $dataSkills->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">

        Nom:<input type="text" name="nom"value="{{$dataSkills->nom}}" >
        Prosentage:<input type="text" name="prosentage"value="{{$dataSkills->prosentage}}" >
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection