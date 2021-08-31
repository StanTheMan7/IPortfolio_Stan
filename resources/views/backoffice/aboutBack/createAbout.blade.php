@extends('template.base')
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
<form action="{{route('storeAbout')}}" method="post">
@csrf
Birthday:<input type="text" name="birthday"value="{{old('birthday')}}" >
Website:<input type="text" name="website" value="{{old('website')}}">
Phone:<input type="text" name="phone" value="{{old('phone')}}">
City:<input type="text" name="city" value="{{old('city')}}">
Age:<input type="text" name="age" value="{{old('age')}}">
Degree:<input type="text" name="degree" value="{{old('degree')}}">
Email:<input type="text" name="email" value="{{old('email')}}">
Freelance:<input type="text" name="freelance" value="{{old('freelance')}}">
Description:<input type="text" name="description" value="{{old('description')}}">
<button type="submit" class="btn btn-primary">Validate</button>
</form>
 @endsection