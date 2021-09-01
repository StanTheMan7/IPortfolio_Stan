@extends('backoffice.homeBack.homeBack')
 @section('content')
 @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form action="{{route('storeContact')}}" method="post">
@csrf
Location:<input type="text" name="locationDesc"value="{{old('locationDesc')}}" >
Email:<input type="text" name="emailDesc" value="{{old('emailDesc')}}">
Call:<input type="text" name="callDesc" value="{{old('callDesc')}}">
Map Generator:<input type="text" name="sourceIframe" value="{{old('sourceIframe')}}">
<button type="submit" class="btn btn-primary">Validate</button>
</form>
 @endsection