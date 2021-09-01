@extends('backoffice.homeBack.homeBack')

@section('content')
<form action="{{route('updateContact', $dataContact->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">

        Location:<input type="text" name="locationDesc"value="{{$dataContact->locationDesc}}" >
        Email:<input type="text" name="emailDesc" value="{{$dataContact->emailDesc}}">
        Call:<input type="text" name="callDesc" value="{{$dataContact->callDesc}}">
        Map Generator:<input type="text" name="sourceDesc" value="{{$dataContact->sourceDesc}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection