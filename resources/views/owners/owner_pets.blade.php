@extends('layouts.main', [
    'title' => 'Pets'
])

@section ('content')
        <h1>{{$owner->first_name}} {{$owner->surname}}'s pet/s...</h1>
        <div>Home address:{{$owner->home_address}}</div>
        <div>Email:{{$owner->email}}</div>
        <div>Phone:{{$owner->phone}}</div>
        <br>

        @foreach ($pets as $pet)
            <div class="pet">
            <img src="/images/{{$pet->photo_path}}" alt="{{$pet->name}}">
            <div class="pet--name">{{$pet->name}}</div>
            <div class="pet--breed">{{$pet->breed}}</div>
            <div class="pet--weight">{{$pet->weight}}</div>
            <div class="pet--age">{{$pet->age}}</div>
            </div>
            <br>
        @endforeach



@endsection