@extends('app')

@section('title', 'About Us | '. config('app.name'))

@section('content')
    <img src="{{ asset('images/Olympic_flag.png') }}" alt="drapeau Olympique" class="my-12 rounded-full">

    <h2 class="mb-5">Bienvenue sur la page about-us</h2>

    <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection
