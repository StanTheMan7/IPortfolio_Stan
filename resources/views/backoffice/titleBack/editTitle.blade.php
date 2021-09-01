@extends('backoffice.homeBack.homeBack')

@section('content')
<form action="{{route('updateTitle', $titleDesc->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">

        Title:<input type="text" name="nom"value="{{$titleDesc->title}}" >
        Description:<input type="text" name="prosentage"value="{{$titleDesc->description}}" >
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection