@section('backoffice.homeBack.homeBack')
<div class="container d-flex flex-column justify-content-center align-items-center"></div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$dataContact->locationDesc}}</p>
        <p class="card-text">{{$dataContact->emailDesc}}</p>
        <p class="card-text">{{$dataContact->callDesc}}</p>
        <p class="card-text">{{$dataContact->sourceDesc}}</p>
    <a class="btn btn-warning" href="{{route('editContact', $dataContact->id)}}">Edit Contact</a>
    <form action="{{route('deleteContact', $dataContact->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection