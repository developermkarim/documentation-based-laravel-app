@extends('layouts.main')

@section( 'title' , 'Home Page')

@section('content')


 <div class="container">
        <h1>Welcome to Our Website</h1>
        <p>This is a simple Laravel application using Blade templates.</p>
        <a href="{{ route('about') }}" class="btn btn-primary my-5">Learn More About Us</a>
    </div>

    <x-alert type="danger">

        This is a danger alert

    </x-alert>

    <x-alert type="success">

    Operation successful!

    </x-alert>

       <x-alert type="info">

    Operation Info

    </x-alert>

      <x-alert type="primary">

    Operation Primary

    </x-alert>

    <x-badge  type="danger"  text="Deleted"/>

    <x-badge type="success" text='Congratulations'/>

    <x-badge type="primary" text="Welcome to My Home" />

    <x-card  title="This is my Card">

      {{-- <p>Name: {{ $user->name }}</p> --}}
      <p>Name : {{ 'Mahmodul Karm' }}</p>

    </x-card>

@endsection
