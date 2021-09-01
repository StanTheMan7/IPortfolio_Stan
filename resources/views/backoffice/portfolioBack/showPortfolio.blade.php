@section('backoffice.homeBack.homeBack')
<div class="container d-flex flex-column justify-content-center align-items-center"></div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
        <p class="card-text">{{$dataPortfolio->image}}</p>
    <a class="btn btn-warning" href="{{route('editPortfolio', $dataPortfolio->id)}}">Edit URL</a>
    <form action="{{route('deletePortfolio', $dataPortfolio->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
@endsection