<div class="container ">
    <h2 class="text-center mb-5">DATA ABOUT</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Birthday</th>
            <th scope="col">Website</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">Age</th>
            <th scope="col">Degree</th>
            <th scope="col">Email</th>
            <th scope="col">Freelance</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($dataAbout as $about)
      <tr>
        <th scope="row">{{$about->id}}</th>
        <td>{{$about->birthday}}</td>
        <td>{{$about->website}}</td>
        <td>{{$about->phone}}</td>
        <td>{{$about->city}}</td>
        <td>{{$about->age}}</td>
        <td>{{$about->degree}}</td>
        <td>{{$about->email}}</td>
        <td>{{$about->freelance}}</td>
        <td>{{$about->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>