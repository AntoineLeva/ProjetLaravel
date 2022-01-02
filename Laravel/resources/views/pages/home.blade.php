@extends('app')

@section('content')

    <img src="{{ asset('images/drapeau-france.png') }}" alt="drapeau de la France" class="mt-12 rounded">

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Bienvenue</h1>

    <p class="text-lg">It's currently {{ date('h:i A')}}.</p>
@endsection
