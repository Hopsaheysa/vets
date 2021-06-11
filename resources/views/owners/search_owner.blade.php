@extends('layouts.main', [
    'title' => 'Result'
])



@section ('content')

<h1>Your result...</h1>
    @foreach($results as $result)
        <a href={{action('PetController@find_owners_pets', [$result->id])}}>{{$result->first_name}} {{$result->surname}}</a>
        {{-- <h2>{{$result->first_name}} {{$result->surname}}</h2> --}}
        <div>Home address:{{$result->home_address}}</div>
        <div>Email:{{$result->email}}</div>
        <div>Phone:{{$result->phone}}</div>
        <img src="face.jpeg" alt="owner image">
    @endforeach
@endsection