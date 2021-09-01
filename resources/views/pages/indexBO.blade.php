@extends('backoffice.homeBack.homeBack')

@section('content2')
    
<div class="d-flex bg-primary">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home UI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('indexBO')}}">Home BackOffice</a>
    </li>
    {{-- About --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('createAbout')}}">Add About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('editAbout' ,$dataAbout[0]->id)}}">Edit About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('showAbout',$dataAbout[0]->id )}}">Show About</a>
    </li>
    {{-- Portfolio --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('createPortfolio')}}">Add Portfolio</a>
    </li>
    @foreach ($dataPortfolio as $portfolio)
    <li>
      <a href="{{route('editPortfolio', $portfolio->id)}}">Edit Portfolio {{$portfolio->id}}</a>
    </li>
    @endforeach
    @foreach ($dataPortfolio as $portfolio)
      <li><a href="{{route('showPortfolio', $portfolio->id)}}">Show Portfolio {{$portfolio->id}}</a></li>
    @endforeach
    {{-- Skills --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('createSkill')}}">Add Skill</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('editSkill' , $dataSkills[0]->id)}}">Edit Skill</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('showSkill', $dataSkills[0]->id)}}">Show Skills</a>
    </li>
    {{-- Contact --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('createContact')}}">Add Contact</a>
    </li>  
    <li class="nav-item">
      <a class="nav-link" href="{{route('editContact', $dataContact[0]->id)}}">Edit Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('showContact' , $dataContact[0]->id)}}">Show Contact</a>
    </li>
  </ul>
  <div class="w-75">

    @include('backoffice.aboutBack.tableAbout')
  </div>
</div>
@endsection