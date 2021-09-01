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
<form action="{{route('storePortfolio')}}" method="post">
@csrf
Image URL:<input type="text" name="image"value="{{old('image')}}" >
<button type="submit" class="btn btn-primary">Validate</button>
</form>
 @endsection