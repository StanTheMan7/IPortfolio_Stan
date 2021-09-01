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
<form action="{{route('storeSkill')}}" method="post">
@csrf
Nom:<input type="text" name="nom"value="{{old('nom')}}" >
Presentage:<input type="number" name="prosentage"value="{{old('prosentage')}}" >
<button type="submit" class="btn btn-primary">Validate</button>
</form>
 @endsection