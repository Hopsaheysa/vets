@extends('layouts.main', [
    'title' => 'Owners'
])

@section ('content')
    <ul>    
        @foreach ($owners as $owner)
            <div class="owners">
            <a href={{action('PetController@find_owners_pets', [$owner->id])}}><li>{{$owner->first_name}} {{$owner->surname}}</li></a>
            </div>
        @endforeach


    </ul>
@endsection