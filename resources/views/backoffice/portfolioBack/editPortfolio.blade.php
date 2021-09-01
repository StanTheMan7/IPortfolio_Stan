@extends('backoffice.homeBack.homeBack')

@section('content')
<form action="{{route('updatePortfolio', $dataPortfolio->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column align-items-center justify-content-center">

        Image URL:<input type="text" name="image"value="{{$dataPortfolio->image}}" >
        <button type="submit" class="btn btn-primary">Validate</button>
    </div>
    </form>
@endsection