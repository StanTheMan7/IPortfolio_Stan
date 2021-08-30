@extends('template.base')

@section('content')
    @include('partials.heroSec')
    <main id='main'>
        @include('partials.about')
        @include('partials.facts')
        @include('partials.skills')
        @include('partials.portfolio')
        @include('partials.services')
        @include('partials.contact')
    </main>
@endsection
