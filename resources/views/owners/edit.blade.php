@extends('layouts.main', [
    'title' => 'Create'
])



@section ('content')
<h2>Edit owner...</h2>
<form action="{{action('OwnerController@update', [$owner->id])}}" method="post">
    @csrf
    @method('put')
    @component('components.form-group', [
        'label' => 'First Name',
        'name' => 'first_name'
    ])
        <input type="text" name="first_name" value="{{old('first_name', $owner->first_name)}}">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Surname',
        'name' => 'surname'
    ])
        <input type="text" name="surname" value="{{old('surname', $owner->surname)}}">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Home Address',
        'name' => 'home_address'
    ])
        <input type="text" name="home_address" value="{{old('home_address', $owner->home_address)}}">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Email',
        'name' => 'email'
    ])
        <input type="email" name="email" value="{{old('email', $owner->email)}}">
    @endcomponent
     @component('components.form-group', [
        'label' => 'Phone',
        'name' => 'phone'
    ])
        <input type="text" name="phone" value="{{old('phone', $owner->phone)}}">
    @endcomponent
    <div class="form-group form-group--submit">
        <input type="submit" value="Edit">
    </div>
</form>
@endsection