@extends('backoffice.homeBack.homeBack')

@section('content')
<form action="{{route('updateAbout', $dataAbout->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center">

        Birthday:<input type="text" name="birthday"value="{{$dataAbout->birthday}}" >
        Website:<input type="text" name="website" value="{{$dataAbout->website}}">
        Phone:<input type="text" name="phone" value="{{$dataAbout->phone}}">
        City:<input type="text" name="city" value="{{$dataAbout->city}}">
        Age:<input type="text" name="age" value="{{$dataAbout->age}}">
        Degree:<input type="text" name="degree" value="{{$dataAbout->degree}}">
        Email:<input type="text" name="email" value="{{$dataAbout->email}}">
        Freelance:<input type="text" name="freelance" value="{{$dataAbout->freelance}}">
        Description:<input type="text" name="description" value="{{$dataAbout->description}}">
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection